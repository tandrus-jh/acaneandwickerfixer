<?php
$callback = 0;
add_shortcode('cs-counter', 'cs_counter_render');
add_action('wp_enqueue_scripts','cs_counter_css');
function cs_counter_render($atts, $content = null) {
	global $callback;
	$args = array(
			"type"              		=> "",
			"box"               		=> "",
			"box_border_color"  		=> "",
			"position"          		=> "",
			"digit"             		=> "1000",
			"font_size"         		=> "",
			"font_weight"       		=> "",
			"font_color"        		=> "",
			"text"              		=> "",
			"text_size"         		=> "",
			"text_font_weight"  		=> "",
			"text_transform"    		=> "",
			"text_color"        		=> "",
			"separator"         		=> "",
			"separator_color"   		=> "",
			"separator_border_style"   	=> ""
	);

	extract(shortcode_atts($args, $atts));

	wp_enqueue_script('counter', get_template_directory_uri() . "/framework/shortcodes/counter/countUp.min.js");
	wp_enqueue_script('waypoints',get_template_directory_uri().'/js/waypoints.min.js');
	wp_enqueue_script('cs-counter', get_template_directory_uri() . "/framework/shortcodes/counter/cs-counter.js");

	//init variables
	$html                   = "";
	$counter_holder_classes = "";
	$counter_holder_styles  = "";
	$counter_classes        = "";
	$counter_styles         = "";
	$text_styles            = "";
	$separator_styles       = "";

	if($position != "") {
		$counter_holder_classes .= " ".$position;
	}

	if($box == "yes") {
		$counter_holder_classes .= " boxed_counter";
	}

	if($box_border_color != "") {
		$counter_holder_styles .= "border-color: ".$box_border_color.";";
	}

	if($type != "") {
		$counter_classes .= " ".$type;
	}

	if($font_color != "") {
		$counter_styles .= "color: ".$font_color.";";
	}

	if($font_size != "") {
		$counter_styles .= "font-size: ".$font_size."px;";
	}
	if($font_weight != "") {
		$counter_styles .= "font-weight: ".$font_weight.";";
	}
	if($text_size != "") {
		$text_styles .= "font-size: ".$text_size."px;";
	}
	if($text_font_weight != "") {
		$text_styles .= "font-weight: ".$text_font_weight.";";
	}
	if($text_transform != "") {
		$text_styles .= "text-transform: ".$text_transform.";";
	}

	if($text_color != "") {
		$text_styles .= "color: ".$text_color.";";
	}

	if($separator_color != "") {
		$separator_styles .= "border-color: ".$separator_color.";";
	}

	if($separator_border_style != "") {
		$separator_styles .= "border-bottom-style: ".$separator_border_style.';';
	}

	$html .= '<div class="q_counter_holder '.$counter_holder_classes.'" style="'.$counter_holder_styles.'">';
	$html .= '<span id="counter_'.$callback.'" class="counter '.$counter_classes.'" style="'.$counter_styles.'" data-type="'.$type.'" data-digit="'.$digit.'"></span>';

	if($separator == "yes") {
		$html .= '<span class="separator small" style="'.$separator_styles.'"></span>';
	}

	$html .= $content;

	if($text != "") {
		$html .= '<p class="counter_text" style="'.$text_styles.'">'.$text.'</p>';
	}

	$html .= '</div>';
	$callback++;
	return $html;
}
function cs_counter_css() {
    wp_enqueue_style('counter', get_template_directory_uri() . "/framework/shortcodes/counter/counter.css");
}