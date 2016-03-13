<?php

$cs_tabs = array();
function cshero_tabs($params, $content = null) {
    global $cs_tabs;
    extract(shortcode_atts(array(
                'id' => count($cs_tabs),
                'class' => ''
                    ), $params));
    $cs_tabs[$id] = array();
    do_shortcode($content);
    $scontent = '<ul class="nav nav-tabs" id="' . $id . '">' . implode('', $cs_tabs[$id]['tabs']) . '</ul><div
    class="tab-content">' . implode('', $cs_tabs[$id]['panes']) . '</div>';
    if (trim($scontent) != "") {
        $output = '<div class="' .  esc_attr($class) . '">' . $scontent;
        $output .= '</div>';

        return $output;
    } else {
        return "";
    }
}
add_shortcode('tabs', 'cshero_tabs');

function cshero_tab($params, $content = null) {
    global $cs_tabs;
    extract(shortcode_atts(array(
                'title' => 'title',
                'active' => '',
                    ), $params));

    $index = count($cs_tabs) - 1;
    if (!isset($cs_tabs[$index]['tabs'])) {
        $cs_tabs[$index]['tabs'] = array();
    }
    $pane_id = 'pane-' . $index . '-' .  count($cs_tabs[$index]['tabs']);
    $cs_tabs[$index]['tabs'][] = '<li class="' .  esc_attr($active). '"><a class="" href="#' . $pane_id . '" data-toggle="tab">' .  esc_attr($title)
            . '</a></li>';
    $cs_tabs[$index]['panes'][] = '<div class="tab-pane ' .  esc_attr($active) . '" id="'
            . $pane_id . '">'
            . do_shortcode
                    (trim($content)) . '</div>';
}
add_shortcode('tab', 'cshero_tab');