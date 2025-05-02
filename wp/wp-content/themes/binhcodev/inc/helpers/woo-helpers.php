<?php
// functions.php trong child theme của bạn
function get_default_product_variation($variable_product)
{
    if (!$variable_product->is_type('variable'))
        return null;

    $default_attrs = $variable_product->get_default_attributes();

    foreach ($variable_product->get_children() as $child_id) {
        $variation = wc_get_product($child_id);
        $match = true;

        foreach ($default_attrs as $attr => $value) {
            if ($variation->get_attribute($attr) !== $value) {
                $match = false;
                break;
            }
        }

        if ($match)
            return $variation;
    }

    return null;
}
