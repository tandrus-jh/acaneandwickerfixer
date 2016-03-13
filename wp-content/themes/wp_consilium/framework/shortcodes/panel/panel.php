<?php

function cshero_panel($atts, $content = null) {
    extract(shortcode_atts(array(
                'style' => '',
                'class' => ''
                    ), $atts));
    $content = str_replace("]<br />", ']', $content);

    $content = str_replace("<br />\n[", '[', $content);
    $result = '<div class="panel ' .  esc_attr($style) . ' ' .  esc_attr($class) . '">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

add_shortcode('panel', 'cshero_panel');

function cshero_panel_footer($atts, $content = null) {
    $result = '<div class="panel-footer">';
    $result .= do_shortcode($content);
    $result .= '</div>';
    return $result;
}

add_shortcode('panel-footer', 'cshero_panel_footer');

function cshero_panel_heading($atts, $content = null) {
    $result = '<div class="panel-heading">';
    $result .= do_shortcode($content);
    $result .= '</div>';
    return $result;
}

add_shortcode('panel-header', 'cshero_panel_heading');

function cshero_panel_content($atts, $content = null) {
    $result = '<div class="panel-body">';
    $result .= do_shortcode($content);
    $result .= '</div>';
    return $result;
}

add_shortcode('panel-content', 'cshero_panel_content');