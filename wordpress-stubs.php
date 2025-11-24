<?php

/**
 * Stubs for WordPress functions to silence linter errors.
 * These functions are defined in WordPress core.
 */

if (!function_exists('add_theme_support')) {
    function add_theme_support($feature, ...$args)
    {
    }
}

if (!function_exists('add_action')) {
    function add_action($hook_name, $callback, $priority = 10, $accepted_args = 1)
    {
    }
}

if (!function_exists('wp_get_theme')) {
    function wp_get_theme($stylesheet = null, $theme_root = null)
    {
        return new class {
            public function get($header)
            {
                return '';
            }
            public function parent()
            {
                return null;
            }
        };
    }
}

if (!function_exists('wp_enqueue_style')) {
    function wp_enqueue_style($handle, $src = '', $deps = array(), $ver = false, $media = 'all')
    {
    }
}

if (!function_exists('get_template_directory_uri')) {
    function get_template_directory_uri()
    {
        return '';
    }
}

if (!function_exists('get_stylesheet_uri')) {
    function get_stylesheet_uri()
    {
        return '';
    }
}

if (!function_exists('language_attributes')) {
    function language_attributes($doctype = 'html')
    {
    }
}

if (!function_exists('bloginfo')) {
    function bloginfo($show = '')
    {
    }
}

if (!function_exists('wp_head')) {
    function wp_head()
    {
    }
}

if (!function_exists('body_class')) {
    function body_class($class = '')
    {
    }
}

if (!function_exists('esc_url')) {
    function esc_url($url, $protocols = null, $_context = null)
    {
        return $url;
    }
}

if (!function_exists('home_url')) {
    function home_url($path = '', $scheme = null)
    {
        return '';
    }
}

if (!function_exists('have_posts')) {
    function have_posts()
    {
        return false;
    }
}

if (!function_exists('the_post')) {
    function the_post()
    {
    }
}

if (!function_exists('the_ID')) {
    function the_ID()
    {
    }
}

if (!function_exists('post_class')) {
    function post_class($class = '', $post_id = null)
    {
    }
}

if (!function_exists('has_post_thumbnail')) {
    function has_post_thumbnail($post = null)
    {
        return false;
    }
}

if (!function_exists('the_post_thumbnail')) {
    function the_post_thumbnail($size = 'post-thumbnail', $attr = '')
    {
    }
}

if (!function_exists('the_permalink')) {
    function the_permalink($post = 0)
    {
    }
}

if (!function_exists('the_title')) {
    function the_title($before = '', $after = '', $echo = true)
    {
    }
}

if (!function_exists('the_excerpt')) {
    function the_excerpt()
    {
    }
}

if (!function_exists('the_posts_pagination')) {
    function the_posts_pagination($args = array())
    {
    }
}

if (!function_exists('wp_footer')) {
    function wp_footer()
    {
    }
}

if (!function_exists('wp_enqueue_script')) {
    function wp_enqueue_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = false)
    {
    }
}

if (!function_exists('is_singular')) {
    function is_singular($post_types = '')
    {
        return false;
    }
}

if (!function_exists('the_content')) {
    function the_content($more_link_text = null, $strip_teaser = false)
    {
    }
}

if (!function_exists('comments_template')) {
    function comments_template($file = '/comments.php', $separate_comments = false)
    {
    }
}

if (!function_exists('register_nav_menus')) {
    function register_nav_menus($locations = array())
    {
    }
}

if (!function_exists('wp_nav_menu')) {
    function wp_nav_menu($args = array())
    {
    }
}
