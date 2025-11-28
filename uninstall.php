<?php
/**
 * Uninstall script for Landing Pages plugin
 * 
 * Fires when the plugin is uninstalled via WordPress admin
 * 
 * @package Landing_Pages
 */

// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Delete plugin options
delete_option('lumnav_maintenance_mode_status');
delete_option('lumnav_maintenance_mode_style');

// For multisite installations
if (is_multisite()) {
    global $wpdb;

    $blog_ids = $wpdb->get_col("SELECT blog_id FROM $wpdb->blogs");
    $original_blog_id = get_current_blog_id();

    foreach ($blog_ids as $blog_id) {
        switch_to_blog($blog_id);
        delete_option('lumnav_maintenance_mode_status');
        delete_option('lumnav_maintenance_mode_style');
    }

    switch_to_blog($original_blog_id);
}
