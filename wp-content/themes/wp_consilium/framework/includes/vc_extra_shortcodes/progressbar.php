<?php
vc_map ( array (
		"name" => "Progress Bar",
		"base" => "cs-progressbar",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __('Progress (Horizontal & Vertical)',THEMENAME),
		"params" => array (
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Title", THEMENAME ),
						"param_name" => "title",
						"description" => ""
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( "Heading size", THEMENAME ),
						"param_name" => "heading_size",
						"value" => array (
								"Heading 1" => "h1",
								"Heading 2" => "h2",
								"Heading 3" => "h3",
								"Heading 4" => "h4",
								"Heading 5" => "h5",
								"Heading 6" => "h6"
						),
						"description" => __('Select your heading size for title.',THEMENAME)
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Title Color', THEMENAME ),
						"param_name" => "title_color",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Description", THEMENAME ),
						"param_name" => "desc",
						"description" => ""
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Description Color', THEMENAME ),
						"param_name" => "desc_color",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Value", THEMENAME ),
						"param_name" => "value",
						'admin_label'=>true,
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Label value", THEMENAME ),
						"param_name" => "label_value",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Icon", THEMENAME ),
						"param_name" => "icon",
						"description" => ""
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Color', THEMENAME ),
						"param_name" => "color",
						"description" => ""
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( 'Show Title', THEMENAME ),
						"param_name" => "show_title",
						"value" => array (
								"Show" => true,
								"Hide" => false
						),
						"description" => ''
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Vertical', THEMENAME ),
						"param_name" => "vertical",
						"value" => array (
								"Yes" => "false"
						),
						"description" => ''
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Striped', THEMENAME ),
						"param_name" => "striped",
						"value" => array (
								"Yes" => "false"
						),
						"description" => ''
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Animated', THEMENAME ),
						"param_name" => "animated",
						"value" => array (
								"Yes" => "true"
						),
						"description" => __('Animate for Stripe',THEMENAME)
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Right', THEMENAME ),
						"param_name" => "right",
						"value" => array (
								"Yes" => "true"
						),
						"description" => ''
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Show Value', THEMENAME ),
						"param_name" => "show_value",
						"value" => array (
								"Yes" => "true"
						),
						"description" => ''
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Width", THEMENAME ),
						"param_name" => "width",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Height", THEMENAME ),
						"param_name" => "height",
						"description" => ""
				)
		)
) );