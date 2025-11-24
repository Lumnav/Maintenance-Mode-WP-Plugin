<?php
/**
 * Plugin Name: My New Plugin
 * Description: A maintenance mode plugin with a simple on/off toggle in the admin bar.
 * Version: 1.0.0
 * Author: Your Name
 * License: GPL-2.0+
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LUMNAV_MM_OPTION', 'lumnav_maintenance_mode_status' );

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
    exit;
}
add_action( 'template_redirect', 'lumnav_mm_check_status' );

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