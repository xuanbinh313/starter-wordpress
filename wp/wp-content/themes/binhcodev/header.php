<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <h1><?php bloginfo('name'); ?></h1>
    <div class="wrapper">
        <header class="header transparent has-transparent">
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