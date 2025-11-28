<?php
/**
 * Admin functionality class
 * 
 * Handles all admin-related features including settings page,
 * admin bar toggle, and admin-specific hooks.
 * 
 * @package Landing_Pages
 */

if (!defined('ABSPATH')) {
    exit;
}

class Lumnav_LP_Admin
{
    /**
     * Constructor
     */
    public function __construct()
    {
        add_action('admin_bar_menu', array($this, 'add_admin_bar_item'), 100);
        add_action('admin_init', array($this, 'handle_toggle'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('admin_menu', array($this, 'add_settings_page'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles'));
    }

    /**
     * Adds the maintenance mode toggle to the WordPress admin bar
     *
     * @param WP_Admin_Bar $wp_admin_bar The admin bar object
     */
    public function add_admin_bar_item($wp_admin_bar)
    {
        if (!current_user_can('manage_options')) {
            return;
        }

        $status = get_option(LUMNAV_MM_OPTION, 'off');
        $is_on = ($status === 'on');

        $toggle_url = add_query_arg(
            array(
                'action' => 'lumnav_toggle_mm',
                '_wpnonce' => wp_create_nonce('lumnav_toggle_mm_nonce'),
            ),
            admin_url('index.php')
        );

        $wp_admin_bar->add_node(
            array(
                'id' => 'lumnav-maintenance-mode',
                'title' => $is_on ? 'Landing Page: ON' : 'Landing Page: OFF',
                'href' => esc_url($toggle_url),
                'meta' => array(
                    'class' => $is_on ? 'lumnav-mm-on' : 'lumnav-mm-off',
                    'title' => $is_on ? 'Click to disable Landing Page' : 'Click to enable Landing Page',
                ),
            )
        );
    }

    /**
     * Handles the logic for toggling the maintenance mode status
     */
    public function handle_toggle()
    {
        if (
            isset($_GET['action']) &&
            $_GET['action'] === 'lumnav_toggle_mm' &&
            isset($_GET['_wpnonce']) &&
            wp_verify_nonce(sanitize_key($_GET['_wpnonce']), 'lumnav_toggle_mm_nonce') &&
            current_user_can('manage_options')
        ) {
            $status = get_option(LUMNAV_MM_OPTION, 'off');
            $new_status = ($status === 'on') ? 'off' : 'on';
            update_option(LUMNAV_MM_OPTION, $new_status);

            wp_safe_redirect(remove_query_arg(array('action', '_wpnonce'), wp_get_referer() ?: admin_url()));
            exit;
        }
    }

    /**
     * Adds a settings page for the plugin
     */
    public function add_settings_page()
    {
        add_options_page(
            'Landing Page Settings',
            'Landing Page',
            'manage_options',
            'lumnav-maintenance-mode',
            array($this, 'render_settings_page')
        );
    }

    /**
     * Registers the plugin's settings
     */
    public function register_settings()
    {
        register_setting('lumnav_mm_settings_group', LUMNAV_MM_STYLE_OPTION);
    }

    /**
     * Enqueue admin styles
     */
    public function enqueue_admin_styles($hook)
    {
        if ($hook === 'settings_page_lumnav-maintenance-mode') {
            wp_enqueue_style(
                'lumnav-admin-styles',
                LUMNAV_LP_PLUGIN_URL . 'assets/css/admin.css',
                array(),
                LUMNAV_LP_VERSION
            );
        }
    }

    /**
     * Renders the settings page HTML with style previews
     */
    public function render_settings_page()
    {
        require_once LUMNAV_LP_PLUGIN_DIR . 'admin/settings-page.php';
    }
}
