<?php
require_once get_template_directory() . '/inc/menus/menu-data.php';
$menu_data = get_enhanced_menu_json('main-menu');
?>
<ul class="menu">
    <?php foreach ($menu_data as $key => $subitems): ?>
        <li class="menu-item" data-key="<?php echo esc_attr($key); ?>">
            <a href="#"><?php echo ucwords(str_replace('-', ' ', $key)); ?></a>
        </li>
    <?php endforeach; ?>
</ul>