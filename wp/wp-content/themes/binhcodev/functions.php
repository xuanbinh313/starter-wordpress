<?php
// Enqueue CSS
function mytheme_enqueue_styles()
{
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_setup()
{
    add_theme_support('custom-logo', [
        'height' => 40,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ]);
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_register_menus()
{
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_register_menus');

// functions.php (hoặc trong file setup khác của bạn)
require_once get_template_directory() . '/inc/shortcodes/init.php';