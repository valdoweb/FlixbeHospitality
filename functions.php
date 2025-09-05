<?php
/**
 * Minimalis functions and definitions.
 * Intentionally minimal: the theme uses block templates and theme.json.
 * Add your custom PHP here only if strictly necessary.
 */

// Enqueue theme styles
function flixbe_hospitality_enqueue_styles() {
    wp_enqueue_style(
        'flixbe-hospitality-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'flixbe_hospitality_enqueue_styles');

// Add theme support for various WordPress features
function flixbe_hospitality_theme_support() {
    // Add support for block styles
    add_theme_support('wp-block-styles');
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Add support for wide alignment
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'flixbe_hospitality_theme_support');
