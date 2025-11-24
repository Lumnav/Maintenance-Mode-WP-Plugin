<?php
/**
 * Plugin Name: Maintenance Mode
 * Description: A maintenance mode plugin with a simple on/off toggle in the admin bar.
 * Version: 1.0.0
 * Author: Lumnav
 * Author URI: https://lumnav.com
 * License: GPL-2.0+
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LUMNAV_MM_OPTION', 'lumnav_maintenance_mode_status' );
define( 'LUMNAV_MM_STYLE_OPTION', 'lumnav_maintenance_mode_style' );

/**
 * Adds the maintenance mode toggle to the WordPress admin bar.
 *
 * @param WP_Admin_Bar $wp_admin_bar The admin bar object.
 */
function lumnav_mm_admin_bar_item( $wp_admin_bar ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $status = get_option( LUMNAV_MM_OPTION, 'off' );
    $is_on  = ( $status === 'on' );

    $toggle_url = add_query_arg(
        array(
            'action'   => 'lumnav_toggle_mm',
            '_wpnonce' => wp_create_nonce( 'lumnav_toggle_mm_nonce' ),
        ),
        admin_url( 'index.php' )
    );

    $wp_admin_bar->add_node(
        array(
            'id'    => 'lumnav-maintenance-mode',
            'title' => $is_on ? 'Maintenance Mode: ON' : 'Maintenance Mode: OFF',
            'href'  => esc_url( $toggle_url ),
            'meta'  => array(
                'class' => $is_on ? 'lumnav-mm-on' : 'lumnav-mm-off',
                'title' => $is_on ? 'Click to disable Maintenance Mode' : 'Click to enable Maintenance Mode',
            ),
        )
    );
}
add_action( 'admin_bar_menu', 'lumnav_mm_admin_bar_item', 100 );

/**
 * Handles the logic for toggling the maintenance mode status.
 */
function lumnav_mm_toggle_status() {
    if (
        isset( $_GET['action'] ) &&
        $_GET['action'] === 'lumnav_toggle_mm' &&
        isset( $_GET['_wpnonce'] ) &&
        wp_verify_nonce( sanitize_key( $_GET['_wpnonce'] ), 'lumnav_toggle_mm_nonce' ) &&
        current_user_can( 'manage_options' )
    ) {
        $status     = get_option( LUMNAV_MM_OPTION, 'off' );
        $new_status = ( $status === 'on' ) ? 'off' : 'on';
        update_option( LUMNAV_MM_OPTION, $new_status );

        wp_safe_redirect( remove_query_arg( array( 'action', '_wpnonce' ), wp_get_referer() ?: admin_url() ) );
        exit;
    }
}
add_action( 'admin_init', 'lumnav_mm_toggle_status' );

/**
 * Adds a settings page for the plugin.
 */
function lumnav_mm_add_settings_page() {
    add_options_page(
        'Maintenance Mode Settings',
        'Maintenance Mode',
        'manage_options',
        'lumnav-maintenance-mode',
        'lumnav_mm_render_settings_page'
    );
}
add_action( 'admin_menu', 'lumnav_mm_add_settings_page' );

/**
 * Registers the plugin's settings.
 */
function lumnav_mm_register_settings() {
    register_setting( 'lumnav_mm_settings_group', LUMNAV_MM_STYLE_OPTION );
}
add_action( 'admin_init', 'lumnav_mm_register_settings' );

/**
 * Renders the settings page HTML.
 */
function lumnav_mm_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>Maintenance Mode Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'lumnav_mm_settings_group' );
            $current_style = get_option( LUMNAV_MM_STYLE_OPTION, 'simple' );
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Maintenance Page Style</th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="<?php echo esc_attr( LUMNAV_MM_STYLE_OPTION ); ?>" value="simple" <?php checked( $current_style, 'simple' ); ?> />
                                <span>Simple</span>
                            </label>
                            <br />
                            <label>
                                <input type="radio" name="<?php echo esc_attr( LUMNAV_MM_STYLE_OPTION ); ?>" value="hightech" <?php checked( $current_style, 'hightech' ); ?> />
                                <span>High-Tech</span>
                            </label>
                        </fieldset>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

/**
 * Checks if maintenance mode is active and displays the maintenance page.
 */
function lumnav_mm_check_status() {
    $status = get_option( LUMNAV_MM_OPTION, 'off' );

    if ( $status !== 'on' || current_user_can( 'manage_options' ) || in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ), true ) ) {
        return;
    }

    header( 'HTTP/1.1 503 Service Temporarily Unavailable' );
    header( 'Content-Type: text/html; charset=utf-8' );
    header( 'Retry-After: 3600' );

    $style = get_option( LUMNAV_MM_STYLE_OPTION, 'simple' );

    if ( $style === 'hightech' ) {
        lumnav_mm_render_hightech_page();
    } else {
        lumnav_mm_render_simple_page();
    }

    exit;
}
add_action( 'template_redirect', 'lumnav_mm_check_status' );

/**
 * Renders the simple maintenance page.
 */
function lumnav_mm_render_simple_page() {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Under Maintenance</title>
        <style>
            body { text-align: center; padding: 150px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background-color: #f1f1f1; color: #444; }
            h1 { font-size: 50px; }
            p { font-size: 18px; }
            article { display: block; text-align: left; max-width: 650px; margin: 0 auto; }
        </style>
    </head>
    <body>
        <article>
            <h1>We&rsquo;ll be back soon!</h1>
            <div>
                <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. We&rsquo;ll be back online shortly!</p>
                <p>&mdash; The Team</p>
            </div>
        </article>
    </body>
    </html>
    <?php
}

/**
 * Renders the high-tech maintenance page.
 */
function lumnav_mm_render_hightech_page() {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>System Upgrade in Progress</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
            body {
                background-color: #0a0a0a;
                color: #00ff00;
                font-family: 'Orbitron', sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                overflow: hidden;
                text-align: center;
                text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00;
            }
            .container {
                position: relative;
                z-index: 2;
                padding: 20px;
                border: 2px solid #00ff00;
                box-shadow: 0 0 20px #00ff00;
                background-color: rgba(0, 20, 0, 0.5);
                animation: flicker 3s infinite alternate;
            }
            h1 {
                font-size: 3rem;
                margin-bottom: 1rem;
                text-transform: uppercase;
                letter-spacing: 4px;
                animation: glitch 1s linear infinite;
            }
            p {
                font-size: 1.2rem;
                margin: 0;
                letter-spacing: 2px;
            }
            .scanline {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: repeating-linear-gradient(
                    0deg,
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0) 2px,
                    rgba(0, 255, 0, 0.1) 3px,
                    rgba(0, 255, 0, 0.1) 4px
                );
                animation: scan 7s linear infinite;
                pointer-events: none;
            }

            @keyframes flicker {
                0%, 100% { opacity: 1; }
                50% { opacity: 0.9; }
            }
            @keyframes scan {
                0% { transform: translateY(-10%); }
                100% { transform: translateY(10%); }
            }
            @keyframes glitch {
                2%,64% { transform: translate(2px,0) skew(0deg); }
                4%,60% { transform: translate(-2px,0) skew(0deg); }
                62% { transform: translate(0,0) skew(5deg); }
            }
        </style>
    </head>
    <body>
        <div class="scanline"></div>
        <div class="container">
            <h1>System Maintenance</h1>
            <p>Recalibrating... We will be back online shortly.</p>
        </div>
    </body>
    </html>
    <?php
}

/**
 * Adds styling for the admin bar button to indicate status.
 */
function lumnav_mm_admin_bar_styles() {
    if ( ! is_user_logged_in() ) {
        return;
    }
    ?>
    <style>
        #wp-admin-bar-lumnav-maintenance-mode.lumnav-mm-on > .ab-item {
            background-color: #D54E21 !important;
        }
        #wp-admin-bar-lumnav-maintenance-mode.lumnav-mm-off > .ab-item {
            background-color: #46B450 !important;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'lumnav_mm_admin_bar_styles' );
add_action( 'admin_head', 'lumnav_mm_admin_bar_styles' );