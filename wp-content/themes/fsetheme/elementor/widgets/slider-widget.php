<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class FSE_Slider_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'fse_slider';
    }

    public function get_title()
    {
        return esc_html__('FSE Slider', 'fsetheme');
    }

    public function get_icon()
    {
        return 'eicon-slider-push';
    }

    public function get_categories()
    {
        return ['fse-category'];
    }

    protected function register_controls()
    {
        // Menu Section
        $this->start_controls_section(
            'menu_section',
            [
                'label' => esc_html__('Menu Settings', 'fsetheme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $menus = wp_get_nav_menus();
        $menu_options = [];

        if (!empty($menus)) {
            foreach ($menus as $menu) {
                $menu_options[$menu->term_id] = $menu->name;
            }
        }

        $this->add_control(
            'menu_id',
            [
                'label' => esc_html__('Select Menu', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $menu_options,
                'default' => !empty($menu_options) ? array_key_first($menu_options) : '',
                'description' => esc_html__('Select the menu to display in the sidebar', 'fsetheme'),
            ]
        );

        $this->end_controls_section();

        // Main Slider Section
        $this->start_controls_section(
            'main_slider_section',
            [
                'label' => esc_html__('Main Slider', 'fsetheme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'slide_image',
            [
                'label' => esc_html__('Slide Image', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/images/f36dc00edb0ba09081fbcb6c3a3faa8c.jpg',
                ],
            ]
        );

        $repeater->add_control(
            'slide_link',
            [
                'label' => esc_html__('Slide Link', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'fsetheme'),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'slide_title',
            [
                'label' => esc_html__('Slide Title', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('THAY MÀN MACBOOK - Từ 1.5 Triệu', 'fsetheme'),
            ]
        );

        $this->add_control(
            'slides',
            [
                'label' => esc_html__('Slides', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slide_image' => ['url' => get_template_directory_uri() . '/assets/images/f36dc00edb0ba09081fbcb6c3a3faa8c.jpg'],
                        'slide_title' => 'THAY MÀN MACBOOK - Từ 1.5 Triệu',
                    ],
                    [
                        'slide_image' => ['url' => get_template_directory_uri() . '/assets/images/f878195b519b16f9a2496d66c27c517d.jpg'],
                        'slide_title' => 'THAY MÀN MACBOOK - Từ 1.5 Triệu',
                    ],
                ],
                'title_field' => '{{{ slide_title }}}',
            ]
        );

        $this->end_controls_section();

        // Right Banner Section
        $this->start_controls_section(
            'right_banner_section',
            [
                'label' => esc_html__('Right Banners', 'fsetheme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'banner_image',
            [
                'label' => esc_html__('Banner Image', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/images/0b819a51d3ab8a1d7496a9e1e0c51474.jpg',
                ],
            ]
        );

        $repeater->add_control(
            'banner_link',
            [
                'label' => esc_html__('Banner Link', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'fsetheme'),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'banner_alt',
            [
                'label' => esc_html__('Alt Text', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Banner Image', 'fsetheme'),
            ]
        );

        $this->add_control(
            'right_banners',
            [
                'label' => esc_html__('Right Banners', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'banner_image' => ['url' => get_template_directory_uri() . '/assets/images/0b819a51d3ab8a1d7496a9e1e0c51474.jpg'],
                        'banner_alt' => 'CỦ CÁP CHÍNH HÃNG - Chỉ từ 25K',
                    ],
                    [
                        'banner_image' => ['url' => get_template_directory_uri() . '/assets/images/6f14a59f1a86017c181a53ea69013a9e.jpg'],
                        'banner_alt' => 'PIN DỰ PHÒNG PISEN - Chỉ từ 300K',
                    ],
                ],
                'title_field' => '{{{ banner_alt }}}',
            ]
        );

        $this->end_controls_section();

        // Bottom Banner Section
        $this->start_controls_section(
            'bottom_banner_section',
            [
                'label' => esc_html__('Bottom Banner', 'fsetheme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'bottom_banner_desktop',
            [
                'label' => esc_html__('Desktop Banner', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/images/6379f1d9a2d15d2a68e16d5bdf66bd84.png',
                ],
            ]
        );

        $this->add_control(
            'bottom_banner_mobile',
            [
                'label' => esc_html__('Mobile Banner', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/images/1d843a15189e2f420e25ef36af35eafa.png',
                ],
            ]
        );

        $this->add_control(
            'bottom_banner_link',
            [
                'label' => esc_html__('Banner Link', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'fsetheme'),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="w-full">
            <div class="w-full flex select-none">
                <!-- Menu Sidebar -->
                <div
                    class="bg-[#fff] w-[200px] h-[368px] shrink-0 rounded-md shadow-3dtv border-[1px] border-[#ddd] p-[5px] flex-col mr-[10px] hidden w800:flex wrapper shrink-0">
                    <?php
                    if (!empty($settings['menu_id'])) {
                        $menu_items = wp_get_nav_menu_items($settings['menu_id']);
                        if ($menu_items) {
                            echo '<nav class="w-full flex flex-col justify-between flex-1">';
                            foreach ($menu_items as $item) {
                                if ($item->menu_item_parent != 0) {
                                    continue; // Skip child items
                                }

                                // Get category thumbnail if it's a product category
                                if ($item->object === 'product_cat') {
                                    $term_id = $item->object_id;
                                    $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
                                    $image_url = wp_get_attachment_url($thumbnail_id);
                                } else {
                                    $image_url = get_template_directory_uri() . '/assets/images/default.png';
                                }
                                ?>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-id="<?php echo esc_attr($item->ID); ?>">
                                    <?php if ($image_url): ?>
                                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($item->title); ?>" width="40"
                                            height="40" class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover">
                                    <?php endif; ?>
                                    <a href="<?php echo esc_url($item->url); ?>" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold">
                                        <?php echo esc_html($item->title); ?>
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                        role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z"></path>
                                    </svg>
                                </div>
                                <?php
                            }
                            echo '</nav>';
                        }
                    }
                    ?>
                </div>

                <!-- Main Slider -->
                <div
                    class="slider-home w-full w800:shadow-3dtv w800:border-[1px] border-[#ddd] rounded-md relative overflow-hidden w800:bg-[#fff]">
                    <div class="w-full h-fit relative mb-[24px] w800:mb-[0px]">
                        <div
                            class="banner-swiper w-full h-fit w800:h-[298px] shadow-3dtv w800:shadow-none rounded-md w800:rounded-none overflow-hidden swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper">
                                <?php foreach ($settings['slides'] as $slide): ?>
                                    <div class="swiper-slide">
                                        <a class="w-full h-full flex items-center"
                                            href="<?php echo esc_url($slide['slide_link']['url']); ?>">
                                            <img src="<?php echo esc_url($slide['slide_image']['url']); ?>"
                                                alt="<?php echo esc_attr($slide['slide_title']); ?>" class="w-full rounded-md" />
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-button-prev swiper-button-nav shadow-1dtv invisible w800:visible">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="icon text-2xl" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17.77 3.77L16 2L6 12l10 10l1.77-1.77L9.54 12z"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next swiper-button-nav shadow-1dtv invisible w800:visible">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="icon text-2xl" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M6.23 20.23L8 22l10-10L8 2L6.23 3.77L14.46 12z"></path>
                                </svg>
                            </div>
                            <div class="swiper-pagination w800:hidden"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Banners -->
                <div class="w-[264px] ml-[10px] flex-col hidden w1024:flex gap-[10px] shrink-0">
                    <?php foreach ($settings['right_banners'] as $banner): ?>
                        <a href="<?php echo esc_url($banner['banner_link']['url']); ?>"
                            class="block w-full rounded-md shadow-3dtv border border-[#ddd] overflow-hidden">
                            <img src="<?php echo esc_url($banner['banner_image']['url']); ?>" loading="lazy"
                                alt="<?php echo esc_attr($banner['banner_alt']); ?>" width="690" height="300"
                                class="w-full object-contain">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Bottom Banner -->
            <div class="w-full pt-[5px]">
                <div class="w-full h-fit rounded-md shadow-3dtv border-[1px] border-[#ddd] overflow-hidden w600:mt-[10px]">
                    <a class="hidden aspect-[16/1] w800:block bottom-banner"
                        href="<?php echo esc_url($settings['bottom_banner_link']['url']); ?>">
                        <img src="<?php echo esc_url($settings['bottom_banner_desktop']['url']); ?>" alt="bottom banner"
                            width="1200" height="75" class="w-full h-full object-cover">
                    </a>
                    <a class="block aspect-[16/3] w800:hidden bottom-banner"
                        href="<?php echo esc_url($settings['bottom_banner_link']['url']); ?>">
                        <img src="<?php echo esc_url($settings['bottom_banner_mobile']['url']); ?>" alt="bottom banner"
                            width="600" height="112" class="w-full h-full object-cover">
                    </a>
                </div>
            </div>
        </section>
        <?php
    }
}