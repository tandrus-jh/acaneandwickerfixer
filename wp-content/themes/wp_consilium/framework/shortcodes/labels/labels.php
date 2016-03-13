<?php

function cshero_labels($params, $content = 'Label') {
    extract(shortcode_atts(array(
                'type' => 'label-default',
                'class' => ''
                    ), $params));
    $out = '';
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br />\n", '', $content);
    $out = '<span class="label ' . esc_attr($type) . ' ' . esc_attr($class) .'">' . do_shortcode($content) . '</span>';
    return $out;
}

add_shortcode('label', 'cshero_labels');