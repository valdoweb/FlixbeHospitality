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
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'flixbe_hospitality_theme_support');

// Register custom block styles
function flixbe_hospitality_register_block_styles() {


// Enqueue mobile menu script
function flixbe_hospitality_enqueue_scripts() {
    wp_enqueue_script(
        'flixbe-mobile-menu',
        get_template_directory_uri() . '/assets/mobile-menu.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'flixbe_hospitality_enqueue_scripts');

// Add mobile menu script inline to avoid external file
function flixbe_hospitality_inline_mobile_menu_script() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.getElementById('mobile-menu-toggle');
        const mobileNav = document.getElementById('mobile-navigation');
        
        if (mobileToggle && mobileNav) {
            mobileToggle.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                
                // Toggle aria-expanded
                this.setAttribute('aria-expanded', !isExpanded);
                
                // Toggle active classes
                this.classList.toggle('active');
                mobileNav.classList.toggle('active');
                
                // Prevent body scroll when menu is open
                if (!isExpanded) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileToggle.contains(event.target) && !mobileNav.contains(event.target)) {
                    mobileToggle.classList.remove('active');
                    mobileNav.classList.remove('active');
                    mobileToggle.setAttribute('aria-expanded', 'false');
                    document.body.style.overflow = '';
                }
            });
            
            // Close menu on window resize if larger than mobile breakpoint
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    mobileToggle.classList.remove('active');
                    mobileNav.classList.remove('active');
                    mobileToggle.setAttribute('aria-expanded', 'false');
                    document.body.style.overflow = '';
                }
            });
        }
    });
    </script>
    <?php
}
add_action('wp_footer', 'flixbe_hospitality_inline_mobile_menu_script');

    // Register full-screen group styles
    register_block_style(
        'core/group',
        array(
            'name'  => 'fullscreen',
            'label' => __('Full Screen', 'flixbe-hospitality'),
        )
    );
    
    register_block_style(
        'core/group',
        array(
            'name'  => 'fullscreen-width',
            'label' => __('Full Width', 'flixbe-hospitality'),
        )
    );
    
    register_block_style(
        'core/group',
        array(
            'name'  => 'fullscreen-height',
            'label' => __('Full Height', 'flixbe-hospitality'),
        )
    );
    
    register_block_style(
        'core/group',
        array(
            'name'  => 'full-viewport',
            'label' => __('Edge to Edge', 'flixbe-hospitality'),
        )
    );
}
add_action('init', 'flixbe_hospitality_register_block_styles');
