<?php
function my_fse_theme_setup()
{
    add_theme_support('block-template-parts');
    add_theme_support('editor-styles');
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

function mytheme_register_all_blocks() {
    // Đường dẫn đến thư mục blocks
    $blocks_dir = get_template_directory() . '/blocks';

    // Đọc tất cả thư mục trong /blocks
    $block_folders = scandir($blocks_dir);

    foreach ($block_folders as $folder) {
        if ($folder === '.' || $folder === '..') {
            continue;
        }

        $block_dir = $blocks_dir . '/' . $folder;
        $render_file = $block_dir . '/render.php';

        // Chỉ đăng ký nếu có render.php
        if (is_dir($block_dir) && file_exists($render_file)) {
            register_block_type($block_dir, [
                'render_callback' => function ($attributes, $content, $block) use ($render_file) {
                    ob_start();
                    include $render_file;
                    return ob_get_clean();
                }
            ]);
        }
    }
}

add_action('init', 'mytheme_register_all_blocks');


// Tự động đăng ký tất cả block trong thư mục /blocks
add_action('init', function() {
    $blocks_dir = get_template_directory() . '/blocks';
    
    // Quét tất cả thư mục trong /blocks
    foreach (glob($blocks_dir . '/*/block.json') as $block_json) {
        // Đường dẫn thư mục block
        $block_dir = dirname($block_json);
        $block_data = json_decode(file_get_contents($block_json), true);

        // Đăng ký block với render (cho dynamic block)
        register_block_type($block_dir, [
            'render_callback' => isset($block_data['render']) ? function($attributes, $content) use ($block_data) {
                return $block_data['render']($attributes, $content);
            } : null,
        ]);
    }
});

