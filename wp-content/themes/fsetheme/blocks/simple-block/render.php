<div class="simple-block">
    <strong>Giờ hiện tại:</strong> <?php echo esc_html(current_time('H:i:s')); ?>
    <div>
        <p className="simple-block-editor">
            {__("Hiển thị thời gian hiện tại (frontend)", "simple-block")}
        </p>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-scrollbar"></div>
        </div>
        <script type="module">
            import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

            const swiper = new Swiper('.swiper', {
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
            });
        </script>
    </div>
</div>