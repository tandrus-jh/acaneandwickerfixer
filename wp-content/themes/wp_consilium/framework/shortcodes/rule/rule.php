<?php


function cshero_hrrule($params, $content = null) {
    extract(shortcode_atts(array(
                'style' => '',
                'class' => '',
                'margin' => ''
                    ), $params));
    $out = '';$margin1='';
    if ($margin != '') {
        $margin1 = ' style="margin:' .  esc_attr($margin) . 'px 0"';
    }
    $out = '<hr ' . $margin1 . 'class="' .  esc_attr($class) . ' ' .  esc_attr($style) . '" />';

    return $out;
}

add_shortcode('rule', 'cshero_hrrule');

