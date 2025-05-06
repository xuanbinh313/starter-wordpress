<section class="w-full">
    <div class="w-full flex select-none">
        <div class="bg-[#fff] w-[200px] h-[368px] shrink-0 rounded-md shadow-3dtv border-[1px] border-[#ddd] p-[5px] flex-col mr-[10px] hidden w800:flex wrapper shrink-0"
            data-v-20128574="">
            <?php
            $menu_items = wp_get_nav_menu_items('primary');
            echo '<script>';
            echo 'window.menu_items = ' . json_encode($menu_items) . ';';
            echo '</script>';
            if ($menu_items) {
                echo '<nav class="w-full flex flex-col justify-between flex-1" data-v-20128574="">';
                foreach ($menu_items as $item) {
                    if ($item->menu_item_parent != 0) {
                        continue; // Chỉ lấy cấp 0
                    }

                    // Lấy ID danh mục sản phẩm từ object ID
                    if ($item->object === 'product_cat') {
                        $term_id = $item->object_id;
                        $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
                        $image_url = wp_get_attachment_url($thumbnail_id);
                    } else {
                        $image_url = get_template_directory_uri() . '/assets/images/default.png'; // fallback
                    }

            ?>
                    <div class="w-full py-[3px] flex-1 flex items-center rounded-md relative overflow-hidden item"
                        data-id="<?php echo esc_attr($item->ID) ?>" data-v-20128574="">
                        <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" loading="lazy" alt="<?php echo esc_attr($item->title); ?>"
                                width="40" height="40" class="h-[25px] w-[25px] mx-[10px] shrink-0 object-cover">
                        <?php endif; ?>
                        <a href="<?php echo esc_url($item->url); ?>" target="_self"
                            class="text-xs w600:text-[12px] font-semibold" data-v-20128574="">
                            <?php echo esc_html($item->title); ?>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                            role="img"
                            class="icon item-arrow__right absolute right-0 top-1/2 stroke-[#fff0] text-[#cbcbcb] shrink-0 text-xl mx-[10px]"
                            data-v-20128574="" style="" width="1em" height="1em" viewBox="0 0 24 24" data-v-dc707951="">
                            <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z"></path>
                        </svg>
                    </div>
            <?php
                }
                echo '</nav>';
            }
            ?>
        </div>
        <div class="slider-home w-full w800:shadow-3dtv w800:border-[1px] border-[#ddd] rounded-md relative overflow-hidden w800:bg-[#fff]"
            data-v-452d8909="">
            <div class="w-full h-fit relative mb-[24px] w800:mb-[0px]" data-v-452d8909="">
                <div class="banner-swiper w-full h-fit w800:h-[298px] shadow-3dtv w800:shadow-none rounded-md w800:rounded-none overflow-hidden swiper-initialized swiper-horizontal swiper-backface-hidden"
                    data-v-452d8909="">
                    <div class="swiper-wrapper" data-v-452d8909=""
                        style="transition-duration: 300ms; transform: translate3d(-3570px, 0px, 0px);">
                        <div class="swiper-slide" data-v-452d8909="" data-swiper-slide-index="7"
                            style="width: 704px; margin-right: 10px;">
                            <a
                                class="w-full h-full flex items-center slide-banner_8"
                                href="https://dienthoaivui.com.vn/sua-chua-macbook/thay-man-hinh-macbook"
                                data-v-452d8909=""><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/f36dc00edb0ba09081fbcb6c3a3faa8c.jpg"
                                    loading="lazy" alt="THAY MÀN MACBOOK<br>Từ 1.5 Triệu" style="" width="690"
                                    height="300" class="w-full rounded-md w800:rounded-none" data-v-452d8909="">
                            </a>
                        </div><!--[-->
                        <div class="swiper-slide" data-v-452d8909="" data-swiper-slide-index="0"
                            style="width: 704px; margin-right: 10px;"><a
                                class="w-full h-full flex items-center slide-banner_1"
                                href="https://dienthoaivui.com.vn/thay-pin-tai-nghe-airpods" data-v-452d8909=""><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/f878195b519b16f9a2496d66c27c517d.jpg"
                                    loading="eager" alt="THAY PIN AIRPODS<br>Chỉ từ 350K" style="" width="690"
                                    height="300" class="w-full rounded-md w800:rounded-none" data-v-452d8909=""></a>
                        </div>
                        <div class="swiper-slide" data-v-452d8909="" data-swiper-slide-index="1"
                            style="width: 704px; margin-right: 10px;"><a
                                class="w-full h-full flex items-center slide-banner_2"
                                href="https://dienthoaivui.com.vn/thay-man-hinh/thay-man-hinh-dien-thoai-xiaomi?product_hang_linh_kien_dien_thoai=1928"
                                data-v-452d8909=""><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/1e5a1aa3ca6707d13920c09090c8ae9a.jpg"
                                    loading="lazy" alt="MÀN XIAOMI GENA<br>Chỉ từ 550k" style="" width="690"
                                    height="300" class="w-full rounded-md w800:rounded-none" data-v-452d8909=""></a>
                        </div>
                        <div class="swiper-slide" data-v-452d8909="" data-swiper-slide-index="2"
                            style="width: 704px; margin-right: 10px;"><a
                                class="w-full h-full flex items-center slide-banner_3"
                                href="https://dienthoaivui.com.vn/may-cu/dien-thoai-cu" data-v-452d8909=""><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/3d1bb455f33bc1359ebe989851655286.jpg"
                                    loading="lazy" alt="ĐIỆN THOẠI CŨ<br>Trả góp 0%" style="" width="690" height="300"
                                    class="w-full rounded-md w800:rounded-none" data-v-452d8909=""></a></div>
                        <div class="swiper-slide swiper-slide-prev" data-v-452d8909="" data-swiper-slide-index="3"
                            style="width: 704px; margin-right: 10px;"><a
                                class="w-full h-full flex items-center slide-banner_4"
                                href="https://dienthoaivui.com.vn/phu-kien/chuot-ban-phim/newmen"
                                data-v-452d8909=""><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/7798dc9b99ae78f78707419435d39b15.png"
                                    loading="lazy" alt="PHỤ KIỆN NEWMEN<br>Chỉ từ 65k" style="" width="690" height="300"
                                    class="w-full rounded-md w800:rounded-none" data-v-452d8909=""></a>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-v-452d8909="" data-swiper-slide-index="4"
                            style="width: 704px; margin-right: 10px;"><a
                                class="w-full h-full flex items-center slide-banner_5"
                                href="https://dienthoaivui.com.vn/thay-main/thay-main-dien-thoai-samsung"
                                data-v-452d8909=""><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/fede8b997237cbd09763c115decb75e1.jpg"
                                    loading="lazy" alt="SỬA LỖI ÂM THANH<br>Từ 500K" style="" width="690" height="300"
                                    class="w-full rounded-md w800:rounded-none" data-v-452d8909=""></a>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-v-452d8909="" data-swiper-slide-index="5"
                            style="width: 704px; margin-right: 10px;"><a
                                class="w-full h-full flex items-center slide-banner_6"
                                href="https://dienthoaivui.com.vn/thay-ep-kinh?product_hang_linh_kien_dien_thoai=2479"
                                data-v-452d8909=""><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/0ecb5e13ae1c2155db93f19c0a140d21.jpg"
                                    loading="lazy" alt="ÉP KÍNH ĐIỆN THOẠI<br>Chỉ từ 400k" style="" width="690"
                                    height="300" class="w-full rounded-md w800:rounded-none" data-v-452d8909=""></a>
                        </div>
                        <div class="swiper-slide" data-v-452d8909="" data-swiper-slide-index="6"
                            style="width: 704px; margin-right: 10px;"><a
                                class="w-full h-full flex items-center slide-banner_7"
                                href="https://dienthoaivui.com.vn/sua-laptop-dell?loai_hinh_sua_chua=381"
                                data-v-452d8909=""><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/359606873fac096b62c78c4c415ed42e.jpg"
                                    loading="lazy" alt="THAY PIN LAPTOP DELL<br>Chỉ từ 450k" style="" width="690"
                                    height="300" class="w-full rounded-md w800:rounded-none" data-v-452d8909=""></a>
                        </div><!--]-->
                    </div>
                    <div class="swiper-button-prev swiper-button-nav shadow-1dtv invisible w800:visible"
                        data-v-452d8909=""><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="icon text-2xl" data-v-452d8909="" style="" width="1em" height="1em"
                            viewBox="0 0 24 24" data-v-dc707951="">
                            <path fill="currentColor" d="M17.77 3.77L16 2L6 12l10 10l1.77-1.77L9.54 12z"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-nav shadow-1dtv invisible w800:visible"
                        data-v-452d8909=""><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="icon text-2xl" data-v-452d8909="" style="" width="1em" height="1em"
                            viewBox="0 0 24 24" data-v-dc707951="">
                            <path fill="currentColor" d="M6.23 20.23L8 22l10-10L8 2L6.23 3.77L14.46 12z"></path>
                        </svg>
                    </div>
                </div>
                <div class="swiper-pagination w800:hidden swiper-pagination-bullets swiper-pagination-horizontal"
                    data-v-452d8909=""><span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet"></span>
                </div>
                <div class="title-swiper h-[68px] hidden w800:block swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden swiper-thumbs"
                    data-v-452d8909="">
                    <div class="swiper-wrapper" data-v-452d8909=""
                        style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;"><!--[-->
                        <div class="swiper-slide title-slide swiper-slide-visible swiper-slide-active"
                            data-v-452d8909="" style="width: 156.444px;">
                            <div class="h-full max-w-1/2 flex justify-center items-center" data-v-452d8909="">
                                <div id="render-html" class="w-full text-xs text-center font-thin" data-v-452d8909="">
                                    THAY PIN AIRPODS<br>Chỉ từ 350K</div>
                            </div>
                        </div>
                        <div class="swiper-slide title-slide swiper-slide-visible swiper-slide-next" data-v-452d8909=""
                            style="width: 156.444px;">
                            <div class="h-full max-w-1/2 flex justify-center items-center" data-v-452d8909="">
                                <div id="render-html" class="w-full text-xs text-center font-thin" data-v-452d8909="">
                                    MÀN XIAOMI GENA<br>Chỉ từ 550k</div>
                            </div>
                        </div>
                        <div class="swiper-slide title-slide swiper-slide-visible" data-v-452d8909=""
                            style="width: 156.444px;">
                            <div class="h-full max-w-1/2 flex justify-center items-center" data-v-452d8909="">
                                <div id="render-html" class="w-full text-xs text-center font-thin" data-v-452d8909="">
                                    ĐIỆN THOẠI CŨ<br>Trả góp 0%</div>
                            </div>
                        </div>
                        <div class="swiper-slide title-slide swiper-slide-visible" data-v-452d8909=""
                            style="width: 156.444px;">
                            <div class="h-full max-w-1/2 flex justify-center items-center" data-v-452d8909="">
                                <div id="render-html" class="w-full text-xs text-center font-thin" data-v-452d8909="">
                                    PHỤ KIỆN NEWMEN<br>Chỉ từ 65k</div>
                            </div>
                        </div>
                        <div class="swiper-slide title-slide swiper-slide-visible title--active" data-v-452d8909=""
                            style="width: 156.444px;">
                            <div class="h-full max-w-1/2 flex justify-center items-center" data-v-452d8909="">
                                <div id="render-html" class="w-full text-xs text-center font-thin" data-v-452d8909="">
                                    SỬA LỖI ÂM THANH<br>Từ 500K</div>
                            </div>
                        </div>
                        <div class="swiper-slide title-slide" data-v-452d8909="" style="width: 156.444px;">
                            <div class="h-full max-w-1/2 flex justify-center items-center" data-v-452d8909="">
                                <div id="render-html" class="w-full text-xs text-center font-thin" data-v-452d8909="">ÉP
                                    KÍNH ĐIỆN THOẠI<br>Chỉ từ 400k</div>
                            </div>
                        </div>
                        <div class="swiper-slide title-slide" data-v-452d8909="" style="width: 156.444px;">
                            <div class="h-full max-w-1/2 flex justify-center items-center" data-v-452d8909="">
                                <div id="render-html" class="w-full text-xs text-center font-thin" data-v-452d8909="">
                                    THAY PIN LAPTOP DELL<br>Chỉ từ 450k</div>
                            </div>
                        </div>
                        <div class="swiper-slide title-slide" data-v-452d8909="" style="width: 156.444px;">
                            <div class="h-full max-w-1/2 flex justify-center items-center" data-v-452d8909="">
                                <div id="render-html" class="w-full text-xs text-center font-thin" data-v-452d8909="">
                                    THAY MÀN MACBOOK<br>Từ 1.5 Triệu</div>
                            </div>
                        </div><!--]-->
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[264px] ml-[10px] flex-col hidden w1024:flex gap-[10px] shrink-0"><!--[-->
            <a href="https://dienthoaivui.com.vn/phu-kien/cu-cap-sac/bwoo"
                class="block w-full rounded-md shadow-3dtv border-[1px] border-[#ddd] overflow-hidden  right-banner_1"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/0b819a51d3ab8a1d7496a9e1e0c51474.jpg"
                    loading="lazy" alt="CỦ CÁP CHÍNH HÃNG<br>Chỉ từ 25K" style="" width="690" height="300"
                    class="w-full object-contain"></a><a
                href="https://dienthoaivui.com.vn/phu-kien/pin-sac-du-phong/sac-du-phong-pisen"
                class="block w-full rounded-md shadow-3dtv border-[1px] border-[#ddd] overflow-hidden  right-banner_2"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/6f14a59f1a86017c181a53ea69013a9e.jpg"
                    loading="lazy" alt="PIN DỰ PHÒNG PISEN<br>Chỉ từ 300K" style="" width="690" height="300"
                    class="w-full object-contain"></a><a href="https://dienthoaivui.com.vn/phu-kien/cu-cap-sac/pisen"
                class="block w-full rounded-md shadow-3dtv border-[1px] border-[#ddd] overflow-hidden  right-banner_3"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/88aa2ddb07dc88f07baab8f0ed1269ff.jpg"
                    loading="lazy" alt="CỦ CÁP SẠC PISEN<br>Từ 300" style="" width="690" height="300"
                    class="w-full object-contain"></a><!--]-->
        </div>
    </div>
    <div class="w-full pt-[5px]">
        <div class="w-full h-fit rounded-md shadow-3dtv border-[1px] border-[#ddd] overflow-hidden w600:mt-[10px]">
            <a class="hidden aspect-[16/1] w800:block bottom-banner"
                href="https://dienthoaivui.com.vn/uu-dai-hoc-sinh-sinh-vien"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/6379f1d9a2d15d2a68e16d5bdf66bd84.png"
                    loading="lazy" alt="bottom banner" style="" width="1200" height="75"
                    class="w-full h-full object-cover"></a><a class="block aspect-[16/3] w800:hidden bottom-banner"
                href="https://dienthoaivui.com.vn/uu-dai-hoc-sinh-sinh-vien"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/1d843a15189e2f420e25ef36af35eafa.png"
                    loading="lazy" alt="bottom banner" style="" width="600" height="112"
                    class="w-full h-full object-cover"></a>
        </div>
    </div>
</section>