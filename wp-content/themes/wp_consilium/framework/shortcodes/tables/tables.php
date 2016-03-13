<?php

function cshero_os_table($params, $content = null) {
    extract(shortcode_atts(array(
                'width' => '100%',
                'style' => '',
                'responsive' => 'false',
                'class' => ''
                    ), $params));
    $content = str_replace("]<br />", ']', $content);
    $out = '<table width="' .  esc_attr($width) . '" class="table ' .  esc_attr($style) . ' '. esc_attr($class).'">' . do_shortcode($content) . '</table>';
    $out = strtolower($responsive) == 'true' ? '<div class="table-responsive">' . $out . '</div>' : $out;
    return $out;
}

add_shortcode('table', 'cshero_os_table');

function cshero_os_table_head($params, $content = null) {
    $out = '<thead><tr>' . do_shortcode($content) . '</tr></thead>';
    return $out;
}

add_shortcode('table_head', 'cshero_os_table_head');

function cshero_os_table_body($params, $content = null) {
    $out = '<tbody>' . do_shortcode($content) . '</tbody>';
    return $out;
}

add_shortcode('table_body', 'cshero_os_table_body');

function cshero_os_table_row($params, $content = null) {
    $out = '<tr>';
    $out .= do_shortcode($content);
    $out .= '</tr>';
    return $out;
}

add_shortcode('table_row', 'cshero_os_table_row');

function cshero_os_row_column($params, $content = null) {
    $out = '<td>';
    $out .= do_shortcode($content);
    $out .= '</td>';
    return $out;
}

add_shortcode('row_column', 'cshero_os_row_column');

function cshero_os_th_column($params, $content = null) {
    $out = '<th>';
    $out .= do_shortcode($content);
    $out .= '</th>';
    return $out;
}

add_shortcode('th_column', 'cshero_os_th_column');