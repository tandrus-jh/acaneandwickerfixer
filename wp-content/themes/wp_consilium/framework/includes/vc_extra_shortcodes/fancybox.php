<?php
vc_map ( array (
		"name" => 'Fancy Icon Boxes',
		"base" => "cs-fancy-box",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ('Icon Boxes (10 styles)',THEMENAME),
		"params" => array (
				array (
						"type" => "textfield",
						"heading" => __ ( 'Icons', THEMENAME ),
						"param_name" => "icon_title",
						"description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
						"admin_label" => true
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Size Icons', THEMENAME ),
						"param_name" => "icon_size",
						"description" => 'in px,%....'
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Icons Color', THEMENAME ),
						"param_name" => "icon_color",
						"description" => ''
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Border Color', THEMENAME ),
						"param_name" => "border_color",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Border Width', THEMENAME ),
						"param_name" => "border_width",
						"description" => 'px,em,...'
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( "Border Style", THEMENAME ),
						"param_name" => "border_style",
						"value" => array (
								"None" => "",
								"Solid" => "solid",
								"Dotted" => "dotted",
								"Dashed" => "dashed",
								"Double" => "double"
						),
						"description" => 'Select your style of border.'
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Icons Width', THEMENAME ),
						"param_name" => "icon_width",
						"description" => 'px,em,...'
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Icons Height', THEMENAME ),
						"param_name" => "icon_heigth",
						"description" => 'px,em,...'
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( "Icon style", THEMENAME ),
						"param_name" => "icon_style",
						"value" => array (
								"Fancy Icon Boxes Style 1" => "fancy-box-style-1",
								"Fancy Icon Boxes Style 2" => "fancy-box-style-2",
								"Fancy Icon Boxes Style 3" => "fancy-box-style-3",
								"Fancy Icon Boxes Style 4" => "fancy-box-style-4",
								"Fancy Icon Boxes Style 5" => "fancy-box-style-5",
								"Fancy Icon Boxes Style 6" => "fancy-box-style-6",
								"Fancy Icon Boxes Style 7" => "fancy-box-style-7",
								"Fancy Icon Boxes Style 8" => "fancy-box-style-8",
								"Fancy Icon Boxes Style 9" => "fancy-box-style-9",
								"Fancy Icon Boxes Style 10" => "fancy-box-style-10"
						),
						"description" => 'Select your style of icon.'
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( "Icon animate type", THEMENAME ),
						"param_name" => "icon_animate_type",
						"value" => array (
								"None" => "none",
								"Scale up" => "scale-up",
								"Fade in" => "fade-in",
								"Right to left" => "right-to-left",
								"Left to right" => "left-to-right",
								"Top to bottom" => "top-to-bottom",
								"Bottom to top" => "bottom-to-top"
						),
						"description" => 'Select your animate type of icon.'
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Show icon link', THEMENAME ),
						"param_name" => "show_icon_link",
						"value" => array (
								__ ( "Yes, please", THEMENAME ) => true
						),
						"description" => __ ( 'Show or hide icon link.', THEMENAME )
				),
				array (
						"type" => "attach_image",
						"heading" => __ ( 'Image', THEMENAME ),
						"param_name" => "image",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Title', THEMENAME ),
						"param_name" => "title",
						"description" => ''
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Lowercase Title', THEMENAME ),
						"param_name" => "uppercase",
						"value" => array (
								__ ( "Yes, please", THEMENAME ) => true
						),
						"description" => __ ( '', THEMENAME )
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Title Color', THEMENAME ),
						"param_name" => "title_color",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Title Margin', THEMENAME ),
						"param_name" => "title_margin",
						"description" => ''
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
						"description" => 'Select your heading size for title.'
				),
				array (
						"type" => "textarea_html",
						"heading" => __ ( 'Content', THEMENAME ),
						"param_name" => 'content',
						"value" => '',
						"description" => ''
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Content Color', THEMENAME ),
						"param_name" => "content_color",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Read More', THEMENAME ),
						"param_name" => "read_more",
						'value' => '',
						"description" => __ ( 'Optional link after post excerpts. Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Read Margin', THEMENAME ),
						"param_name" => "read_more_margin",
						'value' => '',
						"description" => ''
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Read Button', THEMENAME ),
						"param_name" => "read_btn",
						"value" => array (
								__ ( "Yes", THEMENAME ) => true
						),
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Link show more', THEMENAME ),
						"param_name" => "link_show_more",
						"description" => 'Fill URL if you want to show read more link.'
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Custom Class', THEMENAME ),
						"param_name" => "custom_class",
						"description" => ''
				)
		)
) );