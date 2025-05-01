<?php
function get_enhanced_menu_json($location = 'main-menu')
{
    $locations = get_nav_menu_locations();
    if (!isset($locations[$location]))
        return [];

    $menu = wp_get_nav_menu_object($locations[$location]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['orderby' => 'menu_order']);

    $menu_tree = [];
    $indexed = [];

    foreach ($menu_items as $item) {
        $indexed[$item->ID] = [
            'id' => $item->ID,
            'title' => $item->title,
            'url' => $item->url,
            'parent' => $item->menu_item_parent,
            'children' => []
        ];
    }

    foreach ($indexed as &$item) {
        if ($item['parent'] && isset($indexed[$item['parent']])) {
            $indexed[$item['parent']]['children'][] = &$item;
        } else {
            $menu_tree[] = &$item;
        }
    }

    $result = [];
    foreach ($menu_tree as $item) {
        if (!empty($item['children'])) {
            $result[sanitize_title($item['title'])] = $item['children'];
        }
    }

    return $result;
}
