<?php
function my_fse_theme_setup()
{
    // Remove block template parts support
    // add_theme_support('block-template-parts');
    add_theme_support('editor-styles');

    // Add only basic Elementor support
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'my_fse_theme_setup');

function mytheme_setup()
{
    add_theme_support('custom-logo', [
        'height' => 40,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ]);

    // Add Elementor page templates support
    add_theme_support('elementor-templates');
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_register_menus()
{
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_register_menus');

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
    wp_enqueue_script('swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), '1.0', true);
    wp_script_add_data('swiper', 'type', 'module');
    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu-enhanced.js', ['swiper'], '1.0', true);
    wp_script_add_data('menu', 'type', 'module');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('enqueue_block_editor_assets', 'my_theme_enqueue_styles');

// Remove all block registration functions since we're moving to Elementor

// Include Elementor widgets
require_once get_template_directory() . '/elementor-widgets.php';

// Add custom CSS to hide Pro elements
function hide_elementor_pro_elements_css()
{
    ?>
    <style>
        /* Hide any elementor-panel-category that contains eicon-upgrade-crown */
        .elementor-panel-category:has(.eicon-upgrade-crown) {
            display: none !important;
        }

        .elementor-element-wrapper.elementor-element--promotion {
            display: none !important;
        }
    </style>
    <?php
}
add_action('elementor/editor/after_enqueue_styles', 'hide_elementor_pro_elements_css');
add_action('elementor/editor/before_enqueue_scripts', 'hide_elementor_pro_elements_css');
add_action('admin_head', 'hide_elementor_pro_elements_css');
