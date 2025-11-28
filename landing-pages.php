<?php
/**
 * Plugin Name: Landing Pages
 * Description: A landing page plugin with a simple on/off toggle in the admin bar.
 * Version: 1.0.17
 * Author: Lumnav
 * Author URI: https://lumnav.com
 * License: GPL-2.0+
 * Requires at least: 5.0
 * Tested up to: 6.8.3
 * Requires PHP: 7.0
 */

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('LUMNAV_LP_VERSION', '1.0.17');
define('LUMNAV_LP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('LUMNAV_LP_PLUGIN_URL', plugin_dir_url(__FILE__));
define('LUMNAV_LP_PLUGIN_FILE', __FILE__);
define('LUMNAV_MM_OPTION', 'lumnav_maintenance_mode_status');
define('LUMNAV_MM_STYLE_OPTION', 'lumnav_maintenance_mode_style');

// GitHub Auto-Update Configuration
define('LUMNAV_GITHUB_USERNAME', 'Lumnav');
define('LUMNAV_GITHUB_REPO', 'Maintenance-Mode-WP-Plugin');

// Load core classes
require_once LUMNAV_LP_PLUGIN_DIR . 'includes/class-github-updater.php';
require_once LUMNAV_LP_PLUGIN_DIR . 'includes/class-frontend.php';
require_once LUMNAV_LP_PLUGIN_DIR . 'includes/class-admin.php';
require_once LUMNAV_LP_PLUGIN_DIR . 'includes/class-templates.php';

// Initialize GitHub Auto-Updater
if (class_exists('Lumnav_GitHub_Updater')) {
    new Lumnav_GitHub_Updater(__FILE__, LUMNAV_GITHUB_USERNAME, LUMNAV_GITHUB_REPO);
}

// Initialize plugin
function lumnav_lp_init()
{
    // Initialize frontend
    new Lumnav_LP_Frontend();

    // Initialize admin (only in admin area)
    if (is_admin()) {
        new Lumnav_LP_Admin();
    }
}
add_action('plugins_loaded', 'lumnav_lp_init');
