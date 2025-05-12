<?php
// Register Elementor Widgets
function register_fse_elementor_widgets($widgets_manager) {
    // Include widget files
    require_once get_template_directory() . '/elementor/widgets/header-widget.php';
    require_once get_template_directory() . '/elementor/widgets/footer-widget.php';
    require_once get_template_directory() . '/elementor/widgets/slider-widget.php';

    // Register the widgets
    $widgets_manager->register(new \FSE_Header_Widget());
    $widgets_manager->register(new \FSE_Footer_Widget());
    $widgets_manager->register(new \FSE_Slider_Widget());
}
add_action('elementor/widgets/register', 'register_fse_elementor_widgets');

// Register Elementor Categories
function add_fse_elementor_widget_categories($elements_manager) {
    $elements_manager->add_category(
        'fse-category',
        [
            'title' => esc_html__('FSE Theme Widgets', 'fsetheme'),
            'icon' => 'fa fa-plug',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'add_fse_elementor_widget_categories'); 