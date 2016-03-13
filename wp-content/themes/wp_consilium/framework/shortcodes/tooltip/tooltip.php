<?php

function cshero_tooltip($params, $content = 'Tooltip') {
    extract(shortcode_atts(array(
                'type' => '',
                'link' => '',
                'tooltip' => '',
                'style' => '',
                'class' => ''
                    ), $params));
    $out = '';
    if ($type == 'link') {
        $out = '<a  href="' . esc_url($link) . '" data-placement="' . esc_attr($style) . '" title="' . esc_attr($tooltip) . '"  class="osc_tooltip ' . esc_attr($class) .'">' . do_shortcode($content) . '</a>';
    } elseif ($type == 'button') {
        $out = '<button type="button"  data-toggle="tooltip" data-placement="' . esc_attr($style) . '" title="' . esc_attr($tooltip) . '" class="btn osc_tooltip ' . esc_attr($class)  . '">' . do_shortcode($content) . '</button>';
    }
    return $out;
}
add_shortcode('tooltip', 'cshero_tooltip');