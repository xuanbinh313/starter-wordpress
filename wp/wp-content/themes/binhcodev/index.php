<?php
get_header();
?>
<div class="mt-[135px] w800:mt-[80px] max-w-[1200px] h-fit w-full m-auto py-[10px] px-[5px] bg-[#fff]">
    <main id="main" class="w-full bg-[#fff] rounded-lg p-0">

        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div><?php the_content(); ?></div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No posts found</p>
        <?php endif; ?>
    </main>
</div>
<script>
    document.querySelectorAll('.item[data-v-20128574]').forEach(item => {
        item.addEventListener('mouseenter', () => {
            // Thêm class "item--active"
            item.classList.add('item--active');

            // Kiểm tra đã có block chưa (để không thêm trùng)
            const parent = item.parentElement;
            const siblingContainer = parent.nextElementSibling;
            if (!siblingContainer || !siblingContainer.classList.contains('sub-menu')) {
                const newBlock = document.createElement('div');
                newBlock.className = 'shadow-1dtv sub-menu rounded-md flex flex-wrap p-[20px]';
                newBlock.textContent = item.getHTML();
                newBlock.setAttribute('data-v-20128574', ''); // Gắn attribute vào đây
                parent.parentElement.insertBefore(newBlock, parent.nextSibling);
            }
        });

        item.addEventListener('mouseleave', () => {
            // Xóa class khi rời chuột
            item.classList.remove('item--active');

            const parent = item.parentElement;
            const siblingContainer = parent.nextElementSibling;

            if (siblingContainer && siblingContainer.classList.contains('sub-menu')) {
                siblingContainer.remove();
            }
        });
    });
</script>

<?php
get_footer();
?>