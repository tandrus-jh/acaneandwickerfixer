<?php

function cshero_iconhead($params, $content = null) {
    extract(shortcode_atts(array(
                'class' => '',
                'style' => '',
                'type' => 'h1',
        'color'=>''
                    ), $params));
    $out = '';
    if($color!=''){
        $color='style="color:'.esc_attr($color).';"';
    }
    if ($style != '') {
        $style = ' <span class=" ' . esc_attr($style) . '" '.$color.'></span> ';
    }

    $out = '<' . esc_attr($type) . ' class="' . esc_attr($class) . '" >' . $style . do_shortcode($content) . '</' . esc_attr($type) . '>';

    return $out;
}

add_shortcode('iconheading', 'cshero_iconhead');