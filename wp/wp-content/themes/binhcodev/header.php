<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Điện Thoại Vui - Sửa Điện Thoại, Laptop &amp; Bán Điện Thoại Cũ</title>

    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-vue.CpjE5erv.css"
        crossorigin=""> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/Header.De5ibjrP.css"
        crossorigin="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/Icon.q1ZgNOwO.css"
        crossorigin="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/MenuTree.Ab5BPcsM.css"
        crossorigin="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/BtnScrollToTop.BFCbEkz-.css"
        crossorigin="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.D_dqvR0y.css"
        crossorigin="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body <?php body_class(); ?>>
    <h1><?php bloginfo('name'); ?></h1>
    <div class="w-full">
        <div id="default-layout" class="w-full dtv-page">
            <header class="header transparent has-transparent" style="display: none;">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <?php if (function_exists('the_custom_logo') && has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <nav>
                    <?php
                    $menu_items = wp_get_nav_menu_items('primary');
                    if ($menu_items) {
                        // Build tree
                        $menu_tree = [];
                        foreach ($menu_items as $item) {
                            $menu_tree[$item->menu_item_parent][] = $item;
                        }

                        // Hàm đệ quy để in menu
                        function render_menu($parent_id, $menu_tree, $is_root = false)
                        {
                            if (!empty($menu_tree[$parent_id])) {
                                echo $is_root ? '<ul class="main-menu">' : '<ul>';
                                foreach ($menu_tree[$parent_id] as $item) {
                                    // Kiểm tra nếu item này có con
                                    $has_children = !empty($menu_tree[$item->ID]);
                                    $classes = empty($item->classes) ? [] : (array) $item->classes;
                                    if ($has_children) {
                                        $classes[] = ' has-sublist';
                                    }
                                    $class_string = implode(' ', $classes);
                                    echo '<li class="' . esc_attr($class_string) . '">';
                                    echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                                    // Đệ quy in con
                                    if ($has_children) {
                                        render_menu($item->ID, $menu_tree);
                                    }
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }
                        }

                        // GỌI render_menu và báo đây là root (cấp đầu tiên)
                        render_menu(0, $menu_tree, true);
                    }
                    ?>
                </nav>
            </header>
            <header class="header header-transition fixed top-0 left-0 w-screen bg-[#fff] z-[1000]"><!---->
                <div class="banner-header w-full h-[45px] bg-[#fff]" data-v-19929ce7="">
                    <div class="w-full h-full mx-auto max-w-[1200px]" data-v-19929ce7="">
                        <div class="swiper swiper-initialized swiper-horizontal w-full h-full swiper-backface-hidden"
                            data-v-19929ce7=""><!--[--><!--]-->
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <!--[--><!--]--><!--[-->
                                <div class="swiper-slide !h-full !flex items-center justify-center swiper-slide-active"
                                    data-v-19929ce7="" style="width: 400px;"><!--[--><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/fast.png"
                                        loading="lazy" alt="pin header banner" style="" height="30"
                                        data-v-19929ce7=""><!--]--><!----></div>
                                <div class="swiper-slide !h-full !flex items-center justify-center swiper-slide-next"
                                    data-v-19929ce7="" style="width: 400px;"><!--[--><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png"
                                        loading="lazy" alt="pin header banner" style="" height="30"
                                        data-v-19929ce7=""><!--]--><!----></div>
                                <div class="swiper-slide !h-full !flex items-center justify-center" data-v-19929ce7=""
                                    style="width: 400px;"><!--[--><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/technical-skills.png"
                                        loading="lazy" alt="pin header banner" style="" height="30"
                                        data-v-19929ce7=""><!--]--><!----></div><!--]--><!--[--><!--]-->
                            </div><!----><!----><!----><!--[-->
                            <div class="swiper-button-prev swiper-button-nav w800:invisible visible swiper-button-disabled swiper-button-lock"
                                data-v-19929ce7=""><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    class="icon text-xl" data-v-19929ce7="" style="" width="1em" height="1em"
                                    viewBox="0 0 24 24" data-v-dc707951="">
                                    <path fill="currentColor" d="M17.77 3.77L16 2L6 12l10 10l1.77-1.77L9.54 12z"></path>
                                </svg></div>
                            <div class="swiper-button-next swiper-button-nav w800:invisible visible swiper-button-disabled swiper-button-lock"
                                data-v-19929ce7=""><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    class="icon text-xl" data-v-19929ce7="" style="" width="1em" height="1em"
                                    viewBox="0 0 24 24" data-v-dc707951="">
                                    <path fill="currentColor" d="M6.23 20.23L8 22l10-10L8 2L6.23 3.77L14.46 12z"></path>
                                </svg></div><!--]-->
                        </div>
                    </div>
                </div>
                <div class="w-full h-fit">
                    <div class="w-full bg-dtv">
                        <div
                            class="max-w-[1200px] w-full h-[90px] w800:h-[65px] py-[5px] w800:py-0 m-auto subpixel-antialiased flex flex-col">
                            <nav
                                class="w-full flex-1 w800:h-full px-[10px] w800:px-[5px] flex justify-between items-center relative">
                                <!-- Header logo -->
                                <?php if (function_exists('the_custom_logo') && has_custom_logo()): ?>
                                    <?php the_custom_logo(); ?>
                                <?php else: ?>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"
                                        rel="home">
                                        <?php bloginfo('name'); ?>
                                    </a>
                                <?php endif; ?>
                                <div class="flex-1 h-full flex items-center justify-end w800:justify-around">
                                    <div
                                        class="btn-opacity hidden w800:flex shrink-0 w-fit h-[40px] mr-[5px] bg-[#ee374c] rounded-lg items-center px-[5px] py-[3px] ease-in-out duration-200 select-none cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                            class="icon text-[#fff] text-2xl mr-[4px]" style="" width="1em" height="1em"
                                            viewBox="0 0 36 36" data-v-dc707951="">
                                            <path fill="currentColor" d="M2 8h2v2H2z"
                                                class="clr-i-outline clr-i-outline-path-1"></path>
                                            <path fill="currentColor" d="M7 10h24a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2"
                                                class="clr-i-outline clr-i-outline-path-2"></path>
                                            <path fill="currentColor" d="M2 14h2v2H2z"
                                                class="clr-i-outline clr-i-outline-path-3"></path>
                                            <path fill="currentColor" d="M31 14H7a1 1 0 0 0 0 2h24a1 1 0 0 0 0-2"
                                                class="clr-i-outline clr-i-outline-path-4"></path>
                                            <path fill="currentColor" d="M2 20h2v2H2z"
                                                class="clr-i-outline clr-i-outline-path-5"></path>
                                            <path fill="currentColor" d="M31 20H7a1 1 0 0 0 0 2h24a1 1 0 0 0 0-2"
                                                class="clr-i-outline clr-i-outline-path-6"></path>
                                            <path fill="currentColor" d="M2 26h2v2H2z"
                                                class="clr-i-outline clr-i-outline-path-7"></path>
                                            <path fill="currentColor" d="M31 26H7a1 1 0 0 0 0 2h24a1 1 0 0 0 0-2"
                                                class="clr-i-outline clr-i-outline-path-8"></path>
                                            <path fill="none" d="M0 0h36v36H0z"></path>
                                        </svg>
                                        <div class="text-[#fff] h-full flex flex-col justify-center"><span
                                                class="text-xs">
                                                Danh mục </span></div>
                                    </div>
                                    <div class="relative h-[35px] w800:h-[40px] w-fit mr-[5px] w500:mr-[10px] w800:mr-0"
                                        data-v-5b530ecc="">
                                        <div class="btn-opacity text-[#fff] bg-[#ee374c] stroke-[#fff] shrink-0 w-fit h-full  rounded-lg flex items-center pr-[5px] select-none cursor-pointer"
                                            data-v-5b530ecc=""><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                class="icon text-[#fff] text-lg w800:text-xl mx-[2px] w800:mr-[5px]"
                                                data-v-5b530ecc="" style="" width="1em" height="1em"
                                                viewBox="0 0 100 100" data-v-dc707951="">
                                                <path fill="currentColor"
                                                    d="M50.001 0C33.65 0 20.25 13.36 20.25 29.666c0 6.318 2.018 12.19 5.433 17.016L46.37 82.445c2.897 3.785 4.823 3.066 7.232-.2l22.818-38.83c.46-.834.822-1.722 1.137-2.629a29.3 29.3 0 0 0 2.192-11.12C79.75 13.36 66.354 0 50.001 0m0 13.9c8.806 0 15.808 6.986 15.808 15.766S58.807 45.43 50.001 45.43c-8.805 0-15.81-6.982-15.81-15.763S41.196 13.901 50 13.901">
                                                </path>
                                                <path fill="currentColor"
                                                    d="m68.913 48.908l-.048.126l.042-.115zM34.006 69.057C19.88 71.053 10 75.828 10 82.857C10 92.325 26.508 100 50 100s40-7.675 40-17.143c0-7.029-9.879-11.804-24.004-13.8l-1.957 3.332C74.685 73.866 82 76.97 82 80.572c0 5.05-14.327 9.143-32 9.143s-32-4.093-32-9.143c-.001-3.59 7.266-6.691 17.945-8.174z"
                                                    color="currentColor"></path>
                                            </svg>
                                            <div class="h-full flex flex-col justify-center" data-v-5b530ecc="">
                                                <div class="h-[14px] flex" data-v-5b530ecc=""><span
                                                        class="text-[11px] inline-block" data-v-5b530ecc="">Xem
                                                        tại</span><svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                        role="img" class="icon text-sm" data-v-5b530ecc="" style=""
                                                        width="1em" height="1em" viewBox="0 0 24 24" data-v-dc707951="">
                                                        <path fill="currentColor" d="m12 15l-5-5h10z"></path>
                                                    </svg></div><span class="text-xs title" data-v-5b530ecc="">Hồ Chí
                                                    Minh</span>
                                            </div>
                                        </div><!---->
                                    </div>
                                    <div class="h-[30px] w800:h-[35px] mx-[5px] flex-1 hidden w800:block max-w-[420px]"
                                        data-v-5877818c="">
                                        <div class="h-full w600:relative" data-v-5877818c="">
                                            <div class="h-full m-auto bg-[#fff] rounded-lg px-[10px] flex items-center relative transition-all"
                                                data-v-5877818c=""><label class="hidden" for="dtv-input__search1"
                                                    data-v-5877818c="">Dtv search</label>
                                                <div class="w-[30px] h-[30px] flex items-center justify-center"
                                                    data-v-5877818c=""><svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                        role="img" class="icon text-xl stroke-1 shrink-0"
                                                        data-v-5877818c="" style="" width="1em" height="1em"
                                                        viewBox="0 0 24 24" data-v-dc707951="">
                                                        <path fill="currentColor"
                                                            d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14">
                                                        </path>
                                                    </svg></div><input id="dtv-input__search1" value=""
                                                    placeholder="Bạn cần tìm gì?"
                                                    class="h-full text-[16px] min-w-[10px] w-full inline-block focus:outline-none p-[5px] pr-[40px] focus:placeholder:text-[#fff]"
                                                    type="text" autocomplete="off"
                                                    data-v-5877818c=""><!----><!----><!---->
                                            </div>
                                            <div style="display:none;"
                                                class="absolute left-0 bottom-0 w-full translate-y-full overflow-hidden px-[5px] w600:px-0"
                                                data-v-5877818c="">
                                                <div class="w-full bg-[#fff] max-h-[600px] overflow-y-auto rounded-lg w600:rounded-t-none overflow-hidden"
                                                    data-v-5877818c="">
                                                    <div class="w-full p-[5px]" data-v-5877818c=""><a
                                                            href="https://dienthoaivui.com.vn/uu-dai-hoc-sinh-sinh-vien"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/6137876315eead8e73476d48d58ff6ed.png"
                                                                loading="lazy" alt="product" style="" width="720"
                                                                class="object-contain shrink-0 rounded"
                                                                data-v-5877818c=""></a></div><!---->
                                                    <div class="w-full p-[5px]" data-v-5877818c="">
                                                        <div class="w-full px-[5px] p-[5px] bg-[#f3f3f3]"
                                                            data-v-5877818c=""><span
                                                                class="font-semibold text-xs w600:text-sm"
                                                                data-v-5877818c=""> Xu hướng tìm kiếm : </span></div>
                                                        <div class="grid grid-cols-2 p-[5px]" data-v-5877818c="">
                                                            <!--[--><a
                                                                href="https://dienthoaivui.com.vn/the-san-pham/pin-iphone-dung-luong-cao-chinh-hang-pisen"
                                                                class="flex items-center px-[6px] py-[8px]"
                                                                data-v-5877818c=""><img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/1a3904abf31d14f2540d4a7cc15d73d9.png"
                                                                    loading="lazy" alt="product" style="" width="40"
                                                                    height="40"
                                                                    class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                    data-v-5877818c="">
                                                                <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                    data-v-5877818c="">Pin chính hãng Pisen</div>
                                                            </a><a
                                                                href="https://dienthoaivui.com.vn/phu-kien/dong-ho-thong-minh"
                                                                class="flex items-center px-[6px] py-[8px]"
                                                                data-v-5877818c=""><img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/ace0c0de22505c05cbb15ff752af46f5.png"
                                                                    loading="lazy" alt="product" style="" width="40"
                                                                    height="40"
                                                                    class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                    data-v-5877818c="">
                                                                <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                    data-v-5877818c="">Đồng hồ thông minh</div>
                                                            </a><a
                                                                href="https://dienthoaivui.com.vn/thay-man-hinh/thay-man-hinh-dien-thoai-iphone/man-hinh-gen-a"
                                                                class="flex items-center px-[6px] py-[8px]"
                                                                data-v-5877818c=""><img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/fdfe6d377dd151f26788f938082ff661.jpg"
                                                                    loading="lazy" alt="product" style="" width="40"
                                                                    height="40"
                                                                    class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                    data-v-5877818c="">
                                                                <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                    data-v-5877818c="">Thay màn hình Gen A</div>
                                                            </a><a href="https://dienthoaivui.com.vn/iphone-x-series-cu"
                                                                class="flex items-center px-[6px] py-[8px]"
                                                                data-v-5877818c=""><img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/14f93abb99dfaaaf032843eb8578bf45.png"
                                                                    loading="lazy" alt="product" style="" width="40"
                                                                    height="40"
                                                                    class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                    data-v-5877818c="">
                                                                <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                    data-v-5877818c="">iPhone X Series Cũ</div>
                                                            </a><a
                                                                href="https://dienthoaivui.com.vn/thay-man-hinh-samsung-galaxy-note-20-ultra"
                                                                class="flex items-center px-[6px] py-[8px]"
                                                                data-v-5877818c=""><img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/77cda568eaeb12193bf22bb3d5d2888f.png"
                                                                    loading="lazy" alt="product" style="" width="40"
                                                                    height="40"
                                                                    class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                    data-v-5877818c="">
                                                                <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                    data-v-5877818c="">Màn Gen A Samsung Note 20 Ultra
                                                                </div>
                                                            </a><a href="https://dienthoaivui.com.vn/the-san-pham/vmas"
                                                                class="flex items-center px-[6px] py-[8px]"
                                                                data-v-5877818c=""><img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/3f7858b0197b91ce35b9732f17928544.png"
                                                                    loading="lazy" alt="product" style="" width="40"
                                                                    height="40"
                                                                    class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                    data-v-5877818c="">
                                                                <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                    data-v-5877818c="">Pin chính hãng Vmas</div>
                                                            </a><a
                                                                href="https://dienthoaivui.com.vn/thay-ep-kinh-iphone-12-pro-max"
                                                                class="flex items-center px-[6px] py-[8px]"
                                                                data-v-5877818c=""><img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/00813c1134df9f8109af1b99864b92b8.jpg"
                                                                    loading="lazy" alt="product" style="" width="40"
                                                                    height="40"
                                                                    class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                    data-v-5877818c="">
                                                                <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                    data-v-5877818c="">Ép kính thay cho iPhone 12 Pro
                                                                    Max
                                                                </div>
                                                            </a><a
                                                                href="https://dienthoaivui.com.vn/sua-chua-laptop/thay-o-cung-laptop"
                                                                class="flex items-center px-[6px] py-[8px]"
                                                                data-v-5877818c=""><img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/8c5439e67cb0a8af8e3468d1d8f87cbe.png"
                                                                    loading="lazy" alt="product" style="" width="40"
                                                                    height="40"
                                                                    class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                    data-v-5877818c="">
                                                                <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                    data-v-5877818c="">Thay SSD Giá Rẻ</div>
                                                            </a><!--]-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!---->
                                        </div><!---->
                                    </div>
                                    <div
                                        class="text-[#fff] relative shrink-0 w-[60px] w500:w-fit h-[35px] w800:h-[40px] bg-[#ee374c] w600:bg-[#fafafa00] hover:bg-[#e73348] rounded-lg flex items-center px-[5px] py-[3px]  select-none cursor-pointer">
                                        <svg class="mr-[5px]" width="30" height="25" viewBox="0 0 30 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <rect width="29.0541" height="25" fill="url(#pattern0)"></rect>
                                            <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                    height="1">
                                                    <use xlink:href="#image0_70_3"
                                                        transform="matrix(0.0168719 0 0 0.0196078 -0.00615595 0)"></use>
                                                </pattern>
                                                <image id="image0_70_3" width="60" height="51"
                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAzCAYAAADLqmunAAAACXBIWXMAAAsSAAALEgHS3X78AAADOklEQVRogdWawY7TMBCGf1bc6UpIHAlPQLkj0SM39sADtBJ39hHKE7D7Bt03aCTEle4dQXtEQqI9c6ArHsBo2HHrdGwnce3U+SSr0iSNPfHE84+TB0qpAYBPAGYAfsLPEsDWe0bmkMO/ATxuOMwNgGGfnT4D8ENY3TwFcOk82gPI4ZcArgG8oBn3tJLd6bXDFNLC6GAE4AsfmvAz3zvaOAxetJ4DWPGz3DvOWg74in/JadWjtgYwbhvSGlqhHwlrP5i0nWFzlvtIETLDJFT+CGs/KENmmEL6Rlj7wTxkhsEr9HdhzZ/zh4FDpPR0C+CVOFKl5HO74oIziA0ayzbUYbDw8Dl8x6mgS929MMSR7VhQWjJZs752seFzumLoSZnPaCzHOky6+qOw5sdOGYas0iYzDt3c2en+Yx2m53MurPmxG+OxIU0UAH4Jaz5seIz/OXaGwYtSKax7bjw1dqx2zs+pjUoEHpOWTEhfvxHWPSNh6Y5K3R4jpDV1KeoUVMIZkUJaMxWW0yMW1JgO55iiFoeGmA4js1qZbr6Y4ZjPMGpS1MoWYhG4dMhJyg5jYSWHI7eZslMk6Iva1NqbUhe282PPMA62c01SzDDtvrwX1nsoN4tKLYXD4MXCVzqmpuTaWBB70dKcepPeGUmpZhgnFiLWcEbCGcYJZ/nW5SwSO/xVWLrBqwViFQ823rHtL4BvluOxWXNUCXVlkuoZNgXIh5x0dqqQNhVOVq9VUztcdrxrWUsMhwccsmvj9alOR5/F2fEYsI5eGv3qPTb3hoNNb7ZopFe3QsVWmSbQz0Ol1Fr0VIU0vfivMLRoI9GFm5hOFw1uskY4bbtg01Z3hw+JVS0txJX9jM3/hz7D4wDZGCM1FQFFSeWro1Dh4V4U3LyOsHv5VljqqbxNDHW4EJZ6njjq5C4YaQWWUkvnxK6YCHXYq1cdrCK8ZZjYL13L7qV8qMPOAttDDIk5D9gKrnyPEuqw/uShKXeRHN4GbAVXz7fkuaZtoJRaejPgPVtWRjGVVpN+ifHhf20Xa+v0XHSzZ5nAWd2uRG/Vm5x0m5Y+J6BdQp1nKeRpYUv9spzSo+6XigkqYHS/cpsHwD9VBHiStIHxHQAAAABJRU5ErkJggg==">
                                                </image>
                                            </defs>
                                        </svg><!---->
                                        <div class="h-full flex flex-col justify-center"><span
                                                class="text-[10px] w500:text-[11px] w600:text-xs font-semibold"> Giỏ
                                                hàng
                                            </span></div>
                                    </div><a href="https://dienthoaivui.com.vn/dat-lich"
                                        class="hidden w800:flex shrink-0 w-fit h-[40px] hover:bg-[#e73348] rounded-lg items-center px-[5px] py-[3px] select-none cursor-pointer"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                            class="icon text-[#fff] shrink-0 text-xl w500:text-2xl mr-[5px]" style=""
                                            width="1em" height="1em" viewBox="0 0 448 512" data-v-dc707951="">
                                            <path fill="currentColor"
                                                d="M128 0c17.7 0 32 14.3 32 32v32h128V32c0-17.7 14.3-32 32-32s32 14.3 32 32v32h48c26.5 0 48 21.5 48 48v48H0v-48c0-26.5 21.5-48 48-48h48V32c0-17.7 14.3-32 32-32M0 192h448v272c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16m128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16m144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16m144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16">
                                            </path>
                                        </svg>
                                        <div class="h-full flex flex-col justify-center"><span
                                                class="text-[10px] w500:text-[11px] w600:text-xs text-[#fff] font-semibold">
                                                Đặt lịch </span></div>
                                    </a>
                                    <div class="relative">
                                        <div
                                            class="hidden w800:flex shrink-0 w-fit h-[40px] hover:bg-[#e73348] rounded-lg items-center px-[5px] py-[3px] select-none cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                class="icon text-[#fff] shrink-0 text-xl w500:text-2xl mr-[5px]"
                                                style="" width="1em" height="1em" viewBox="0 0 16 16"
                                                data-v-dc707951="">
                                                <g fill="currentColor">
                                                    <path
                                                        d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z">
                                                    </path>
                                                    <path
                                                        d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5">
                                                    </path>
                                                </g>
                                            </svg>
                                            <div class="h-full flex items-center justify-center"><span
                                                    class="text-[10px] w500:text-[11px] w600:text-xs text-[#fff] font-semibold">
                                                    Liên hệ </span><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" class="icon text-[#fff] shrink-0 text-xl" style=""
                                                    width="1em" height="1em" viewBox="0 0 24 24" data-v-dc707951="">
                                                    <path fill="currentColor" d="m7 10l5 5l5-5z"></path>
                                                </svg></div>
                                        </div><!---->
                                    </div>
                                    <div class="button-login hidden w800:flex justify-center min-w-[100px]"
                                        data-v-51fbafef=""><button
                                            class="hidden w800:flex items-center justify-center shrink-0 w-full h-[40px] hover:bg-[#e73348] bg-[#ee374c] rounded-lg px-[5px] py-[3px] select-none cursor-pointer"
                                            data-v-51fbafef=""><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                class="icon text-[#fff] shrink-0 text-xl w500:text-2xl mr-[5px]"
                                                data-v-51fbafef="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                                data-v-dc707951="">
                                                <path fill="currentColor"
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m0 4c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6m0 14c-2.03 0-4.43-.82-6.14-2.88a9.95 9.95 0 0 1 12.28 0C16.43 19.18 14.03 20 12 20">
                                                </path>
                                            </svg>
                                            <div class="h-full flex flex-col justify-center" data-v-51fbafef=""><span
                                                    class="text-[10px] w500:text-[11px] w600:text-xs text-[#fff] font-semibold"
                                                    data-v-51fbafef="">Đăng nhập</span></div>
                                        </button></div>
                                </div>
                            </nav>
                            <div class="w800:hidden w-full flex-1 px-[5px] flex items-center">
                                <div class="h-[30px] w800:h-[35px] mx-[5px] w-full" data-v-5877818c="">
                                    <div class="h-full w600:relative" data-v-5877818c="">
                                        <div class="h-full m-auto bg-[#fff] rounded-lg px-[10px] flex items-center relative transition-all"
                                            data-v-5877818c=""><label class="hidden" for="dtv-input__search2"
                                                data-v-5877818c="">Dtv search</label>
                                            <div class="w-[30px] h-[30px] flex items-center justify-center"
                                                data-v-5877818c=""><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" class="icon text-xl stroke-1 shrink-0" data-v-5877818c=""
                                                    style="" width="1em" height="1em" viewBox="0 0 24 24"
                                                    data-v-dc707951="">
                                                    <path fill="currentColor"
                                                        d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14">
                                                    </path>
                                                </svg></div><input id="dtv-input__search2" value=""
                                                placeholder="Bạn cần tìm gì?"
                                                class="h-full text-[16px] min-w-[10px] w-full inline-block focus:outline-none p-[5px] pr-[40px] focus:placeholder:text-[#fff]"
                                                type="text" autocomplete="off" data-v-5877818c=""><!----><!----><!---->
                                        </div>
                                        <div style="display:none;"
                                            class="absolute left-0 bottom-0 w-full translate-y-full overflow-hidden px-[5px] w600:px-0"
                                            data-v-5877818c="">
                                            <div class="w-full bg-[#fff] max-h-[600px] overflow-y-auto rounded-lg w600:rounded-t-none overflow-hidden"
                                                data-v-5877818c="">
                                                <div class="w-full p-[5px]" data-v-5877818c=""><a
                                                        href="https://dienthoaivui.com.vn/uu-dai-hoc-sinh-sinh-vien"
                                                        data-v-5877818c=""><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/6137876315eead8e73476d48d58ff6ed.png"
                                                            loading="lazy" alt="product" style="" width="720"
                                                            class="object-contain shrink-0 rounded"
                                                            data-v-5877818c=""></a>
                                                </div><!---->
                                                <div class="w-full p-[5px]" data-v-5877818c="">
                                                    <div class="w-full px-[5px] p-[5px] bg-[#f3f3f3]"
                                                        data-v-5877818c="">
                                                        <span class="font-semibold text-xs w600:text-sm"
                                                            data-v-5877818c="">
                                                            Xu hướng tìm kiếm : </span>
                                                    </div>
                                                    <div class="grid grid-cols-2 p-[5px]" data-v-5877818c=""><!--[--><a
                                                            href="https://dienthoaivui.com.vn/the-san-pham/pin-iphone-dung-luong-cao-chinh-hang-pisen"
                                                            class="flex items-center px-[6px] py-[8px]"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/1a3904abf31d14f2540d4a7cc15d73d9.png"
                                                                loading="lazy" alt="product" style="" width="40"
                                                                height="40"
                                                                class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                data-v-5877818c="">
                                                            <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                data-v-5877818c="">Pin chính hãng Pisen</div>
                                                        </a><a
                                                            href="https://dienthoaivui.com.vn/phu-kien/dong-ho-thong-minh"
                                                            class="flex items-center px-[6px] py-[8px]"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/ace0c0de22505c05cbb15ff752af46f5.png"
                                                                loading="lazy" alt="product" style="" width="40"
                                                                height="40"
                                                                class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                data-v-5877818c="">
                                                            <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                data-v-5877818c="">Đồng hồ thông minh</div>
                                                        </a><a
                                                            href="https://dienthoaivui.com.vn/thay-man-hinh/thay-man-hinh-dien-thoai-iphone/man-hinh-gen-a"
                                                            class="flex items-center px-[6px] py-[8px]"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/fdfe6d377dd151f26788f938082ff661.jpg"
                                                                loading="lazy" alt="product" style="" width="40"
                                                                height="40"
                                                                class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                data-v-5877818c="">
                                                            <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                data-v-5877818c="">Thay màn hình Gen A</div>
                                                        </a><a href="https://dienthoaivui.com.vn/iphone-x-series-cu"
                                                            class="flex items-center px-[6px] py-[8px]"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/14f93abb99dfaaaf032843eb8578bf45.png"
                                                                loading="lazy" alt="product" style="" width="40"
                                                                height="40"
                                                                class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                data-v-5877818c="">
                                                            <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                data-v-5877818c="">iPhone X Series Cũ</div>
                                                        </a><a
                                                            href="https://dienthoaivui.com.vn/thay-man-hinh-samsung-galaxy-note-20-ultra"
                                                            class="flex items-center px-[6px] py-[8px]"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/77cda568eaeb12193bf22bb3d5d2888f.png"
                                                                loading="lazy" alt="product" style="" width="40"
                                                                height="40"
                                                                class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                data-v-5877818c="">
                                                            <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                data-v-5877818c="">Màn Gen A Samsung Note 20 Ultra</div>
                                                        </a><a href="https://dienthoaivui.com.vn/the-san-pham/vmas"
                                                            class="flex items-center px-[6px] py-[8px]"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/3f7858b0197b91ce35b9732f17928544.png"
                                                                loading="lazy" alt="product" style="" width="40"
                                                                height="40"
                                                                class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                data-v-5877818c="">
                                                            <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                data-v-5877818c="">Pin chính hãng Vmas</div>
                                                        </a><a
                                                            href="https://dienthoaivui.com.vn/thay-ep-kinh-iphone-12-pro-max"
                                                            class="flex items-center px-[6px] py-[8px]"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/00813c1134df9f8109af1b99864b92b8.jpg"
                                                                loading="lazy" alt="product" style="" width="40"
                                                                height="40"
                                                                class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                data-v-5877818c="">
                                                            <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                data-v-5877818c="">Ép kính thay cho iPhone 12 Pro Max
                                                            </div>
                                                        </a><a
                                                            href="https://dienthoaivui.com.vn/sua-chua-laptop/thay-o-cung-laptop"
                                                            class="flex items-center px-[6px] py-[8px]"
                                                            data-v-5877818c=""><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/8c5439e67cb0a8af8e3468d1d8f87cbe.png"
                                                                loading="lazy" alt="product" style="" width="40"
                                                                height="40"
                                                                class="w-[40px] h-[40px] object-cover shrink-0 rounded"
                                                                data-v-5877818c="">
                                                            <div class="ml-2 text-xs w600:text-sm font-medium name-product"
                                                                data-v-5877818c="">Thay SSD Giá Rẻ</div>
                                                        </a><!--]--></div>
                                                </div>
                                            </div>
                                        </div><!---->
                                    </div><!---->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-[1200px] h-0 w-full m-auto relative">
                    <div style="display:none;" class="absolute w-fit h-fit left-[5px] w1200:left-[0] top-[10px]">
                        <div class="bg-[#fff] w-[200px] h-[368px] shrink-0 rounded-md shadow-3dtv border-[1px] border-[#ddd] p-[5px] flex-col mr-[10px] hidden w800:flex wrapper"
                            data-v-20128574="">
                            <nav class="w-full flex flex-col justify-between flex-1" data-v-20128574=""><!--[-->
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/sua-dien-thoai-1.png"
                                        loading="lazy" alt="Sửa điện thoại" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/dich-vu/sua-chua-dien-thoai" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Sửa điện
                                        thoại</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/laptop-1.png"
                                        loading="lazy" alt="Sửa Chữa laptop" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/sua-chua-laptop" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Sửa Chữa
                                        laptop</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/mac-1.png"
                                        loading="lazy" alt="Sửa MacBook" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574="">
                                    <div class="text-xs w600:text-[12px] font-semibold alternative_name"
                                        data-v-20128574="">
                                        <p><a href="https://dienthoaivui.com.vn/sua-chua-macbook">Sửa MacBook</a>, <a
                                                href="https://dienthoaivui.com.vn/sua-chua-imac">iMac</a></p>
                                    </div><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/may-cu-1.png"
                                        loading="lazy" alt="Máy cũ giá rẻ" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/may-cu" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Máy cũ giá
                                        rẻ</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/phu-kien-1.png"
                                        loading="lazy" alt="Phụ kiện" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/phu-kien" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Phụ
                                        kiện</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/may-tinh-bang-1.png"
                                        loading="lazy" alt="Sửa máy tính bảng" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/sua-may-tinh-bang" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Sửa máy tính
                                        bảng</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/linh-kien-laptop.png"
                                        loading="lazy" alt="Linh kiện Laptop" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/linh-kien-laptop" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Linh kiện
                                        Laptop</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/sua-airpods.png"
                                        loading="lazy" alt="Sửa AirPods" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/sua-chua-homepod-airpods" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Sửa
                                        AirPods</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/dong-ho-1.png"
                                        loading="lazy" alt="Sửa Apple Watch" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/dich-vu/sua-chua-apple-watch" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Sửa Apple
                                        Watch</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thu-cu-doi-moi.png"
                                        loading="lazy" alt="Thu cũ lên đời" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/thu-cu-doi-moi" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Thu cũ lên
                                        đời</a><!----></div>
                                <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                                    data-v-20128574=""><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/tin-cong-nghe.png"
                                        loading="lazy" alt="Tin công nghệ" style="" width="40" height="40"
                                        class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover" data-v-20128574=""><a
                                        href="https://dienthoaivui.com.vn/tin-tuc" target="_self"
                                        class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">Tin công
                                        nghệ</a><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                                        data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24"
                                        data-v-dc707951="">
                                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z">
                                        </path>
                                    </svg></div><!--]-->
                            </nav><!---->
                        </div>
                    </div>
                </div><!---->
            </header>
            <script type="module">
                import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
                var swiperTitle = new Swiper(".title-swiper", {
                    loop: true,
                    spaceBetween: 10,
                    slidesPerView: 4,
                    freeMode: true,
                    watchSlidesProgress: true,
                });
                const swiper = new Swiper(
                    '.banner-swiper', {
                    // Optional parameters
                    direction: 'horizontal',
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    thumbs: {
                        swiper: swiperTitle,
                    },
                }
                )
            </script>