<?php
add_shortcode('cs-dropcap', 'cs_dropcap_render');
function cs_dropcap_render($params, $content = '') {
	extract(shortcode_atts(array(
	'text'  => '',
	'icon'  => '',
	'color_first_text'=>'',
	'background_buttom'=>'',
	'border_color'=>'',
	'style' => 'style-1'
			), $params));
	$styles = array();

	if($color_first_text){
		$styles[] = "color: $color_first_text;";
	}
	if($background_buttom){
		$styles[] = "background: $background_buttom;";
	}
	if($border_color){
		$styles[] = "border-color: $border_color;";
	}
	$styles = cshero_build_style($styles);

	if ($icon != '') {
		$output = '<div class="cs-dropcap ' . $style . '"><p><span class="cs-icon icon"><i class="' . esc_attr ( $icon ) . '" ' . $styles . '></i></span>' . $content . '</div></p>';
	} elseif ($text != '') {
		$output = '<div class="cs-dropcap ' . $style . '"><p><span class="cs-icon text" ' . $styles . '>' . $text . '</span>' . $content . '</div></p>';
	} else {
		$output = '<div class="cs-dropcap ' . $style . '">' . $content . '</div>';
	}

	return $output;
}