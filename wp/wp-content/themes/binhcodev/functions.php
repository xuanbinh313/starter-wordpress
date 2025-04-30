<?php
// Enqueue CSS
function mytheme_enqueue_styles()
{
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function my_custom_menu_li_class($classes, $item)
{
    $classes[] = 'test';
    return $classes;
}
add_filter('nav_menu_css_class', 'my_custom_menu_li_class', 10, 2);