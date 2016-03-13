<?php
/*
 * BUTTONS
 */
function cshero_button($params, $content = null) {
    extract(shortcode_atts(array(
                'title' => '',
                'link' => '',
                'type' => 'link',
                'style' => '',
                'align' => '',
                'target' => '',
                'icon' => '',
                'class' => '',
        'iconcolor'=>''
                    ), $params));
    $out = '';
    if($icon!=''){
        if($iconcolor!=''){
            $iconcolor='style="color:'. esc_attr($iconcolor).';"';
        }
        if($align=='right'){
            $value=$title.' <i class="'. esc_attr($icon).'" '. esc_attr($iconcolor).'></i>';
        } else{
            $value='<i class="'. esc_attr($icon).'" '. esc_attr($iconcolor).'></i> '. esc_attr($title);
        }
    }else{
        $value= esc_attr($title);
    }
    $target = ' target="'.($target != 'false' ? '_blank':'_self').'"';
    if ($type == 'link') {
        $out = '<a class="btn ' .  esc_attr($style) . ' ' .  esc_attr($class) .'" href="' .  esc_url($link) . '" ' . ( esc_attr($target)) . '>' .  $value . '</a>';
    } elseif ($type == 'button') {
        $out = '<button class="btn ' .  esc_attr($style) . ' ' .  esc_attr($class) .'" >' .  $value . '</button>';
    }
    return $out;
}
add_shortcode('button', 'cshero_button');