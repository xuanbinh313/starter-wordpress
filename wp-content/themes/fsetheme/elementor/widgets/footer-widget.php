<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class FSE_Footer_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'fse_footer';
    }

    public function get_title() {
        return esc_html__('FSE Footer', 'fsetheme');
    }

    public function get_icon() {
        return 'eicon-footer';
    }

    public function get_categories() {
        return ['fse-category'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'fsetheme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'copyright_text',
            [
                'label' => esc_html__('Copyright Text', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('© 2024 Your Company. All rights reserved.', 'fsetheme'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="fse-footer">
            <p><?php echo esc_html($settings['copyright_text']); ?></p>
        </div>
        <?php
    }
} 