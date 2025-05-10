<?php
// Register Elementor Widgets
function register_elementor_widgets() {
    // Include widget files
    require_once get_template_directory() . '/elementor/header-widget.php';
    require_once get_template_directory() . '/elementor/footer-widget.php';
    // Add more widget includes as needed
}
add_action('elementor/widgets/widgets_registered', 'register_elementor_widgets');

// Register Elementor Categories
function add_elementor_widget_categories($elements_manager) {
    $elements_manager->add_category(
        'fse-category',
        [
            'title' => esc_html__('FSE Theme Widgets', 'fsetheme'),
            'icon' => 'fa fa-plug',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');