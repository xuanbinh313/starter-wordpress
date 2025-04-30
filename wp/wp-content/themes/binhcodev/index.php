<?php
get_header();
?>

<main id="main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <div><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No posts found</p>
    <?php endif; ?>
</main>

<?php
get_footer();
?>