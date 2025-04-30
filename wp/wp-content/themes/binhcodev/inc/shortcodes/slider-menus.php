<?php
function mytheme_slider_menus_shortcode($atts)
{
    $atts = shortcode_atts([
        'title' => 'Tiêu đề mặc định',
        'content' => 'Nội dung mặc định',
    ], $atts);
    ob_start(); // Bắt đầu output buffer
    // Truyền biến vào view
    include __DIR__ . '/views/slider-menus.php';

    return ob_get_clean(); // Lấy nội dung đã include và trả về
}
add_shortcode('slider-menus', 'mytheme_slider_menus_shortcode');