<?php
function render_products_collection_shortcode($atts)
{
    $args = [
        'post_type' => 'product',
        'posts_per_page' => 8,
    ];

    $loop = new WP_Query($args);

    ob_start();

    if ($loop->have_posts()):
        echo '<div class="products-collection">';
        while ($loop->have_posts()):
            $loop->the_post();
            global $product;
            ?>
            <div class="product-item">
                <h2><?php the_title(); ?></h2>
                <span><?php echo $product->get_price_html(); ?></span>
                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="button">Add to Cart</a>
            </div>
            <?php
        endwhile;
        echo '</div>';
    endif;

    wp_reset_postdata();

    return ob_get_clean();
}

add_shortcode('products-collection', 'render_products_collection_shortcode');
