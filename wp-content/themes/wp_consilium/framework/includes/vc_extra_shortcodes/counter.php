<?php
vc_map ( array (
		"name" => 'Counter',
		"base" => "cs-counter",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ( "Zero Counter & Random Counter", THEMENAME ),
		"params" => array (
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Type", THEMENAME ),
						"param_name" => "type",
						"value" => array (
								"Zero Counter" => "zero",
								"Random Counter" => "random"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Box", THEMENAME ),
						"param_name" => "box",
						"value" => array (
								"Yes" => "yes",
								"No" => "no"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Position", THEMENAME ),
						"param_name" => "position",
						"value" => array (
								"Left" => "left",
								"Right" => "right",
								"Center" => "center"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Digit', THEMENAME ),
						"param_name" => "digit",
						"value" => '',
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Font size (px)', THEMENAME ),
						"param_name" => "font_size",
						"value" => '',
						"description" => ''
				),
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Font weight", THEMENAME ),
						"param_name" => "font_weight",
						"value" => array (
								"Default" => "",
								"Thin 100" => "100",
								"Extra-Light 200" => "200",
								"Light 300" => "300",
								"Regular 400" => "400",
								"Medium 500" => "500",
								"Semi-Bold 600" => "600",
								"Bold 700" => "700",
								"Extra-Bold 800" => "800",
								"Ultra-Bold 900" => "900"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "colorpicker",
						"class" => "",
						"heading" => __ ( "Font color", THEMENAME ),
						"param_name" => "font_color",
						"value" => "",
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Text', THEMENAME ),
						"param_name" => "text",
						"value" => '',
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Text Size (px)', THEMENAME ),
						"param_name" => "text_size",
						"value" => '',
						"description" => ''
				),
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Text Font Weight", THEMENAME ),
						"param_name" => "text_font_weight",
						"value" => array (
								"Default" => "",
								"Thin 100" => "100",
								"Extra-Light 200" => "200",
								"Light 300" => "300",
								"Regular 400" => "400",
								"Medium 500" => "500",
								"Semi-Bold 600" => "600",
								"Bold 700" => "700",
								"Extra-Bold 800" => "800",
								"Ultra-Bold 900" => "900"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Text Transform", THEMENAME ),
						"param_name" => "text_transform",
						"value" => array (
								"Default" => "",
								"None" => "none",
								"Capitalize" => "capitalize",
								"Uppercase" => "uppercase",
								"Lowercase" => "lowercase"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "colorpicker",
						"class" => "",
						"heading" => __ ( "Text color", THEMENAME ),
						"param_name" => "text_color",
						"value" => "",
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Separator", THEMENAME ),
						"param_name" => "separator",
						"value" => array (
								"Yes" => "yes",
								"No" => "no"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "colorpicker",
						"class" => "",
						"heading" => __ ( "Separator color", THEMENAME ),
						"param_name" => "separator_color",
						"value" => "",
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Separator Border Style", THEMENAME ),
						"param_name" => "separator_border_style",
						"value" => array (
								"" => "",
								"Dashed" => "dashed",
								"Solid" => "solid"
						),
						"description" => __ ( "", THEMENAME )
				)
		)
) );