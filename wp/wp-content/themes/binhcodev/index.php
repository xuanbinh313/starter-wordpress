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
<?php
get_footer();
?>