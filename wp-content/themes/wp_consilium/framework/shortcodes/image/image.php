<?php

function cshero_image($params, $content = 'Label') {
    extract(shortcode_atts(array(
                'src' => '',
                'class' => '',
                'shape' => ''
                    ), $params));
    $out = '';


    $out = '<img src="' . esc_url($src) . '" class="' . esc_attr($class) .' '. esc_attr($shape) . '">';

    return $out;
}

add_shortcode('image', 'cshero_image');