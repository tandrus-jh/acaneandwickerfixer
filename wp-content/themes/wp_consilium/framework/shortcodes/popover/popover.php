<?php

function cshero_popover($params, $content = 'Popover') {
    extract(shortcode_atts(array(
        'trigger' => '',
        'title' => '',
        'pop_content' => '',
        'style' => '',
        'size' => '',
        'type' => '',
        'class' => ''
    ), $params));
    $out = '';
    $out = '<button class="cs_popover btn ' .  esc_attr($size) . ' ' .  esc_attr($type) . ' ' .  esc_attr($class) . '" data-content="' .  esc_attr($pop_content) . '" data-placement="' .  esc_attr($style) . '" data-toggle="popover" data-trigger="' .  esc_attr($trigger) . '" data-container="body" type="button" data-title="' .  esc_attr($title) . '"> ' . do_shortcode($content) . ' </button>';
    return $out;
}

add_shortcode('popover', 'cshero_popover');