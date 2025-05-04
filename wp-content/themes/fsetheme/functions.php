<?php
function my_fse_theme_setup()
{
    add_theme_support('block-template-parts');
    add_theme_support('editor-styles');
}
add_action('after_setup_theme', 'my_fse_theme_setup');
function my_theme_enqueue_styles()
{
    // Enqueue the main stylesheet
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
    // Enqueue custom styles
    wp_enqueue_style('custom-header', get_template_directory_uri() . '/assets/css/Header.De5ibjrP.css');
    wp_enqueue_style('custom-icon', get_template_directory_uri() . '/assets/css/Icon.q1ZgNOwO.css');
    wp_enqueue_style('custom-menu', get_template_directory_uri() . '/assets/css/MenuTree.Ab5BPcsM.css');
    wp_enqueue_style('custom-btn', get_template_directory_uri() . '/assets/css/BtnScrollToTop.BFCbEkz-.css');
    wp_enqueue_style('custom-index', get_template_directory_uri() . '/assets/css/index.D_dqvR0y.css');
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('enqueue_block_editor_assets', 'my_theme_enqueue_styles');
// register theme 
function my_theme_register_blocks()
{
    $block_dir = get_template_directory() . '/blocks/simple-block';

    register_block_type($block_dir, [
        'render_callback' => function ($attributes, $content, $block) use ($block_dir) {
            ob_start();
            include $block_dir . '/render.php';
            return ob_get_clean();
        }
    ]);
}
add_action('init', 'my_theme_register_blocks');

function mytheme_register_static_block()
{
    // Đảm bảo đường dẫn đúng
    $block_static_dir = get_template_directory() . '/blocks/static-block';

    register_block_type($block_static_dir, [
        'render_callback' => function ($attributes, $content, $block) use ($block_static_dir) {
            ob_start();
            include $block_static_dir . '/render.php';
            return ob_get_clean();
        }
    ]);
}
add_action('init', 'mytheme_register_static_block');