<?php
// Cover Boxes
vc_map ( array (
		"name" => "Cover Boxes",
		"base" => "cs-cover-boxes",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ( "Three Box", THEMENAME ),
		"params" => array (
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Active element", THEMENAME ),
						"param_name" => "active_element",
						"value" => ""
				),
				array (
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Title tag", THEMENAME ),
						"param_name" => "title_tag",
						"value" => array (
								"h1" => "h1",
								"h2" => "h2",
								"h3" => "h3",
								"h4" => "h4",
								"h5" => "h5",
								"h6" => "h6"
						),
						"description" => __ ( "Choose with heading tag to display for titles", THEMENAME )
				),
				array (
						"type" => "attach_image",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Image 1", THEMENAME ),
						"param_name" => "image1"
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Title 1", THEMENAME ),
						"param_name" => "title1",
						"value" => ""
				),
				array (
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Title Color 1", THEMENAME ),
						"param_name" => "title_color1",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Text 1", THEMENAME ),
						"param_name" => "text1",
						"value" => ""
				),
				array (
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Text Color 1", THEMENAME ),
						"param_name" => "text_color1",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Link 1", THEMENAME ),
						"param_name" => "link1",
						"value" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Link label 1", THEMENAME ),
						"param_name" => "link_label1",
						"value" => ""
				),
				array (
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Target 1", THEMENAME ),
						"param_name" => "target1",
						"value" => array (
								"Self" => "_self",
								"Blank" => "_blank",
								"Parent" => "_parent",
								"Top" => "_top"
						),
						"description" => ""
				),
				array (
						"type" => "attach_image",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Image 2", THEMENAME ),
						"param_name" => "image2"
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Title 2", THEMENAME ),
						"param_name" => "title2",
						"value" => ""
				),
				array (
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Title Color 2", THEMENAME ),
						"param_name" => "title_color2",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Text 2", THEMENAME ),
						"param_name" => "text2",
						"value" => ""
				),
				array (
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Text Color 2", THEMENAME ),
						"param_name" => "text_color2",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Link 2", THEMENAME ),
						"param_name" => "link2",
						"value" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Link label 2", THEMENAME ),
						"param_name" => "link_label2",
						"value" => ""
				),
				array (
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Target 2", THEMENAME ),
						"param_name" => "target2",
						"value" => array (
								"Self" => "_self",
								"Blank" => "_blank",
								"Parent" => "_parent",
								"Top" => "_top"
						),
						"description" => ""
				),
				array (
						"type" => "attach_image",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Image 3", THEMENAME ),
						"param_name" => "image3"
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Title 3", THEMENAME ),
						"param_name" => "title3",
						"value" => ""
				),
				array (
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Title Color 3", THEMENAME ),
						"param_name" => "title_color3",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Text 3", THEMENAME ),
						"param_name" => "text3",
						"value" => ""
				),
				array (
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Text Color 3", THEMENAME ),
						"param_name" => "text_color3",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Link 3", THEMENAME ),
						"param_name" => "link3",
						"value" => ""
				),
				array (
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Link label 3", THEMENAME ),
						"param_name" => "link_label3",
						"value" => ""
				),
				array (
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Target 3", THEMENAME ),
						"param_name" => "target3",
						"value" => array (
								"Self" => "_self",
								"Blank" => "_blank",
								"Parent" => "_parent",
								"Top" => "_top"
						),
						"description" => ""
				),
				array (
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => __ ( "Read More Button Style", THEMENAME ),
						"param_name" => "read_more_button_style",
						"value" => array (
								"Default" => "",
								"No" => "no",
								"Yes" => "yes"
						),
						"description" => ""
				)
		)
) );