<?php

$_cshero_accordion = array();

function cshero_toggles($params, $content = null) {
    global $_cshero_accordion;
    extract(shortcode_atts(array(
                'id' => count($_cshero_accordion),
                'class' => ''
                    ), $params));
    $_cshero_accordion[$id] = array();
    $scontent = do_shortcode($content);

    $output = '';
    if (trim($scontent) != '' || count($_cshero_accordion[$id]['details'])) {
        $scontent = isset($_cshero_accordion[$id]['details']) && is_array($_cshero_accordion[$id]['details']) ? implode('', $_cshero_accordion[$id]['details']) : '';
        $output .= '<div class="panel-group ' .  esc_attr($class) . '" id="oscitas-accordion-' . $id . '">' . $scontent;
        $output .= '</div>';
    }
    return $output;
}

add_shortcode('accordions', 'cshero_toggles');

function cshero_toggle($params, $content = null) {
    global $_cshero_accordion;
    extract(shortcode_atts(array(
                'title' => 'title',
                'class' => ''
                    ), $params));
    $con = do_shortcode($content);
    $index = count($_cshero_accordion) - 1;
    $id = isset($_cshero_accordion[$index]['details'])?'details-' . $index . '-' . count($_cshero_accordion[$index]['details']):'details-' . $index . '-0';
    $const = get_defined_constants();
    $_cshero_accordion[$index]['details'][] = '
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse"
                data-parent="#oscitas-accordion-'.$index.'"
                href="#'.$id.'">
                '. esc_attr($title).'
                </a>
              </h4>
            </div>
            <div id="'.$id.'" class="panel-collapse collapse '. esc_attr($class).'">
              <div class="panel-body">'.$con.'</div>
            </div>
        </div>';
}

add_shortcode('accordion', 'cshero_toggle');