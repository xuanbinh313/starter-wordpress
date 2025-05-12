<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class FSE_Header_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'fse_header';
    }

    public function get_title()
    {
        return esc_html__('FSE Header', 'fsetheme');
    }

    public function get_icon()
    {
        return 'eicon-header';
    }

    public function get_categories()
    {
        return ['fse-category'];
    }

    protected function register_controls()
    {
        // Banner Section
        $this->start_controls_section(
            'banner_section',
            [
                'label' => esc_html__('Banner Settings', 'fsetheme'),
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
                    'url' => get_template_directory_uri() . '/assets/images/fast.png',
                ],
            ]
        );

        $repeater->add_control(
            'banner_alt',
            [
                'label' => esc_html__('Alt Text', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('pin header banner', 'fsetheme'),
            ]
        );

        $this->add_control(
            'banner_slides',
            [
                'label' => esc_html__('Banner Slides', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'banner_image' => ['url' => get_template_directory_uri() . '/assets/images/fast.png'],
                        'banner_alt' => 'Fast Delivery',
                    ],
                    [
                        'banner_image' => ['url' => get_template_directory_uri() . '/assets/images/service.png'],
                        'banner_alt' => 'Service',
                    ],
                    [
                        'banner_image' => ['url' => get_template_directory_uri() . '/assets/images/technical-skills.png'],
                        'banner_alt' => 'Technical Skills',
                    ],
                ],
                'title_field' => '{{{ banner_alt }}}',
            ]
        );

        $this->end_controls_section();

        // Location Section
        $this->start_controls_section(
            'location_section',
            [
                'label' => esc_html__('Location Settings', 'fsetheme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'location_title',
            [
                'label' => esc_html__('Location Title', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Xem tại', 'fsetheme'),
            ]
        );

        $this->add_control(
            'location_name',
            [
                'label' => esc_html__('Location Name', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Hồ Chí Minh', 'fsetheme'),
            ]
        );

        $this->end_controls_section();

        // Search Section
        $this->start_controls_section(
            'search_section',
            [
                'label' => esc_html__('Search Settings', 'fsetheme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'search_placeholder',
            [
                'label' => esc_html__('Search Placeholder', 'fsetheme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Bạn cần tìm gì hả?', 'fsetheme'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <!-- Banner Header -->
        <div class="banner-header w-full h-[45px] bg-[#fff]">
            <div class="w-full h-full mx-auto max-w-[1200px]">
                <div class="swiper-container w-full h-full">
                    <div class="swiper-wrapper">
                        <?php foreach ($settings['banner_slides'] as $slide) : ?>
                            <div class="swiper-slide !h-full !flex items-center justify-center">
                                <img src="<?php echo esc_url($slide['banner_image']['url']); ?>"
                                    loading="lazy" alt="<?php echo esc_attr($slide['banner_alt']); ?>"
                                    height="30">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-prev swiper-button-nav w800:invisible visible swiper-button-disabled swiper-button-lock">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icon text-xl" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M17.77 3.77L16 2L6 12l10 10l1.77-1.77L9.54 12z"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-nav w800:invisible visible swiper-button-disabled swiper-button-lock">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icon text-xl" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M6.23 20.23L8 22l10-10L8 2L6.23 3.77L14.46 12z"></path>
                        </svg>
                    </div>
                </div>
                <script>
                    jQuery(document).ready(function($) {
                        if (typeof Swiper !== 'undefined') {
                            new Swiper('.swiper-container', {
                                slidesPerView: 3,
                                // loop: true,
                                // autoplay: {
                                //     delay: 3000,
                                //     disableOnInteraction: false,
                                // },
                                pagination: {
                                    el: '.swiper-pagination',
                                    clickable: true,
                                },
                                navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                }
                            });
                        } else {
                            console.error('Swiper not loaded. Make sure it is enqueued.');
                        }
                    });
                </script>
            </div>
        </div>

        <!-- Main Header -->
        <div class="w-full h-fit">
            <div class="w-full bg-dtv">
                <div class="max-w-[1200px] w-full h-[90px] w800:h-[65px] py-[5px] w800:py-0 m-auto subpixel-antialiased flex flex-col">
                    <nav class="w-full flex-1 w800:h-full px-[10px] w800:px-[5px] flex justify-between items-center relative">
                        <!-- Header logo -->
                        <?php if (function_exists('the_custom_logo') && has_custom_logo()): ?>
                            <?php the_custom_logo(); ?>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" rel="home">
                                <?php bloginfo('name'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="flex-1 h-full flex items-center justify-end w800:justify-around">
                            <!-- Location Button -->
                            <div class="relative h-[35px] w800:h-[40px] w-fit mr-[5px] w500:mr-[10px] w800:mr-0">
                                <div class="btn-opacity text-[#fff] bg-[#ee374c] stroke-[#fff] shrink-0 w-fit h-full rounded-lg flex items-center pr-[5px] select-none cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icon text-[#fff] text-lg w800:text-xl mx-[2px] w800:mr-[5px]" width="1em" height="1em" viewBox="0 0 100 100">
                                        <path fill="currentColor" d="M50.001 0C33.65 0 20.25 13.36 20.25 29.666c0 6.318 2.018 12.19 5.433 17.016L46.37 82.445c2.897 3.785 4.823 3.066 7.232-.2l22.818-38.83c.46-.834.822-1.722 1.137-2.629a29.3 29.3 0 0 0 2.192-11.12C79.75 13.36 66.354 0 50.001 0m0 13.9c8.806 0 15.808 6.986 15.808 15.766S58.807 45.43 50.001 45.43c-8.805 0-15.81-6.982-15.81-15.763S41.196 13.901 50 13.901"></path>
                                        <path fill="currentColor" d="m68.913 48.908l-.048.126l.042-.115zM34.006 69.057C19.88 71.053 10 75.828 10 82.857C10 92.325 26.508 100 50 100s40-7.675 40-17.143c0-7.029-9.879-11.804-24.004-13.8l-1.957 3.332C74.685 73.866 82 76.97 82 80.572c0 5.05-14.327 9.143-32 9.143s-32-4.093-32-9.143c-.001-3.59 7.266-6.691 17.945-8.174z" color="currentColor"></path>
                                    </svg>
                                    <div class="h-full flex flex-col justify-center">
                                        <div class="h-[14px] flex">
                                            <span class="text-[11px] inline-block"><?php echo esc_html($settings['location_title']); ?></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icon text-sm" width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m12 15l-5-5h10z"></path>
                                            </svg>
                                        </div>
                                        <span class="text-xs title"><?php echo esc_html($settings['location_name']); ?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Search Form -->
                            <div class="h-[30px] w800:h-[35px] mx-[5px] flex-1 hidden w800:block max-w-[420px]">
                                <div class="h-full w600:relative">
                                    <form role="search" method="get" action="" class="h-full m-auto bg-[#fff] rounded-lg px-[10px] flex items-center relative transition-all">
                                        <label class="hidden" for="dtv-input__search1">Dtv search</label>
                                        <div class="w-[30px] h-[30px] flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icon text-xl stroke-1 shrink-0" width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"></path>
                                            </svg>
                                        </div>
                                        <input id="dtv-input__search1" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr($settings['search_placeholder']); ?>" class="h-full text-[16px] min-w-[10px] w-full inline-block focus:outline-none p-[5px] pr-[40px] focus:placeholder:text-[#fff]" type="text" autocomplete="off" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
<?php
    }
}
