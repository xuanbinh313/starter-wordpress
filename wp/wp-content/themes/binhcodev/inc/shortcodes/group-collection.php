<?php
function mytheme_group_collection_shortcode($atts)
{
    $atts = shortcode_atts([
        'title' => 'Tiêu đề mặc định',
        'content' => 'Nội dung mặc định',
    ], $atts);
    ob_start(); // Bắt đầu output buffer
    // Truyền biến vào view
    include __DIR__ . '/views/group-collection.php';

    return ob_get_clean(); // Lấy nội dung đã include và trả về
}
add_shortcode('group-collection', 'mytheme_group_collection_shortcode');