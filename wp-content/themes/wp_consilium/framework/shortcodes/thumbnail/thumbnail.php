<?php

function cshero_oscitasthumbnail($params, $content = 'Label') {
    extract(shortcode_atts(array(
                'src' => '',
                'class' => '',
                'link' => '',
                'border'=>''
                    ), $params));
    $out = '';
	if ($border != '') {
		$borderClass = 'img-thumbnail';
	} else {
		$borderClass = 'img-responsive';
	}


	//$out = ' <div class="img-thumbnail ' . $class . '">';
	if ($link != '') {
		$out .='<a href="' . esc_url($link) . '">';
	}
	$out .= '<img src="' . esc_url($src) . '" class="' . esc_attr($borderClass) . '">';
	if ($link != '') {
		$out .='</a>';
	}
    return $out;
}

add_shortcode('thumbnail', 'cshero_oscitasthumbnail');