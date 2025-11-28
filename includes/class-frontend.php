<?php
/**
 * Frontend functionality class
 * 
 * Handles all frontend-related features including
 * maintenance mode check and template rendering.
 * 
 * @package Landing_Pages
 */

if (!defined('ABSPATH')) {
    exit;
}

class Lumnav_LP_Frontend
{
    /**
     * Constructor
     */
    public function __construct()
    {
        add_action('template_redirect', array($this, 'check_maintenance_mode'));
    }

    /**
     * Checks if maintenance mode is active and displays the maintenance page
     */
    public function check_maintenance_mode()
    {
        // Check for preview request
        if (isset($_GET['lumnav_mm_preview']) && $_GET['lumnav_mm_preview'] === 'true' && current_user_can('manage_options')) {
            $style = isset($_GET['style']) ? sanitize_key($_GET['style']) : 'simple';
            Lumnav_LP_Templates::render($style);
            exit;
        }

        // Normal maintenance mode check
        if (!get_option(LUMNAV_MM_OPTION) || current_user_can('manage_options') || in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'), true)) {
            return;
        }

        $style = get_option(LUMNAV_MM_STYLE_OPTION, 'simple');

        header('HTTP/1.1 503 Service Temporarily Unavailable');
        header('Content-Type: text/html; charset=utf-8');
        header('Retry-After: 3600');

        Lumnav_LP_Templates::render($style);
        exit;
    }
}
