<?php

function cshero_btngrp($params, $content = null) {
    extract(shortcode_atts(array(
        'style' => '',
        'class' => ''
    ), $params));
    $content = str_replace("]<br />", ']', $content);
    $content = str_replace("]<br />\n", ']', $content);
    $content = str_replace("<br />\n[", '[', $content);
    $out='';
    if ($style =='vertical') {
        $out .= '<div class="btn-group-vertical '  .  esc_attr($class) . '">' . do_shortcode($content) . '</div>';
    } elseif ($style =='justified') {
        $out .= '<div class="btn-group btn-group-justified '  .  esc_attr($class) . '">' . do_shortcode($content) . '</div>';
    }else{
        $out .= '<div class="btn-group '  .  esc_attr($class) . '">' . do_shortcode($content) . '</div>';
    }

    return $out;
}

add_shortcode('buttongroup', 'cshero_btngrp');
