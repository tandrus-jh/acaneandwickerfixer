<?php
vc_map ( array (
		"name" => 'Drop Caps',
		"base" => "cs-dropcap",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ('Drop Caps (6 styles)',THEMENAME),
		"params" => array (
				array (
						"type" => "textfield",
						"heading" => __ ( 'Icon', THEMENAME ),
						"param_name" => "icon",
						"value" => '',
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( "Style", THEMENAME ),
						"param_name" => "style",
						"value" => array (
								"Style 1" => "style-1",
								"Style 2" => "style-2",
								"Style 3" => "style-3",
								"Style 4" => "style-4",
								"Style 5" => "style-5",
								"Style 6" => "style-6"
						),
						"description" => __('Select your style',THEMENAME)
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'First Text Content', THEMENAME ),
						"param_name" => "text",
						"value" => ''
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Color First Text', THEMENAME ),
						"param_name" => "color_first_text",
						"value" => ''
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Background Buttom', THEMENAME ),
						"param_name" => "background_buttom",
						"value" => ''
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Border Color', THEMENAME ),
						"param_name" => "border_color",
						"value" => ''
				),
				array (
						"type" => "textarea_html",
						"heading" => __ ( 'Content', THEMENAME ),
						"param_name" => "content",
						"value" => ''
				)
		)
) );