<?php

function cshero_alert($atts, $content = null) {
    extract(shortcode_atts(array(
                'type' => '',
                'close' => 'false',
                'class' => ''
                    ), $atts));
    $type = ($close == 'true' ?  esc_attr($type) . ' alert-dismissable' :  esc_attr($type));


    $result = '<div class = "alert ' .  esc_attr($type) . ' ' .  esc_attr($class) . '">';
    if ($close == 'true') {
        $result .= '<button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;
    </button>';
    }
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

add_shortcode('alert', 'cshero_alert');



