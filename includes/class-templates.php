<?php
/**
 * Templates class
 * 
 * Handles loading and rendering of all landing page templates.
 * 
 * @package Landing_Pages
 */

if (!defined('ABSPATH')) {
    exit;
}

class Lumnav_LP_Templates
{
    /**
     * Available templates
     *
     * @var array
     */
    private static $templates = array(
        'simple',
        'hightech',
        'artistic',
        'glassmorphic',
        'neural',
        'liquid',
        'torus',
        'kinetic',
        'aurora',
        'holographic',
        'neon',
        'swiss',
        'vhs',
        'brutalist',
        'galaxy',
        'matrix',
        'vaporwave',
        'particles',
        'geometric',
        'glitch',
    );

    /**
     * Render a template
     *
     * @param string $template_name Template name to render
     */
    public static function render($template_name)
    {
        // Sanitize template name
        $template_name = sanitize_key($template_name);

        // Default to simple if template not found
        if (!in_array($template_name, self::$templates, true)) {
            $template_name = 'simple';
        }

        $template_file = LUMNAV_LP_PLUGIN_DIR . 'templates/' . $template_name . '.php';

        if (file_exists($template_file)) {
            include $template_file;
        } else {
            // Fallback to simple template
            include LUMNAV_LP_PLUGIN_DIR . 'templates/simple.php';
        }
    }

    /**
     * Get domain name without www
     *
     * @return string
     */
    public static function get_domain()
    {
        return preg_replace('/^www\./', '', wp_parse_url(home_url(), PHP_URL_HOST));
    }

    /**
     * Get list of available templates
     *
     * @return array
     */
    public static function get_templates()
    {
        return self::$templates;
    }
}
