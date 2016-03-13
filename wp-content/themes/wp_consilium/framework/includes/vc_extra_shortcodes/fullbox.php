<?php
vc_map ( array (
		"name" => 'Full Boxes',
		"base" => "cs-full-box",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ( "Full Box & 15 styles hover", THEMENAME ),
		"params" => array (
				array (
						"type" => "textfield",
						"heading" => __ ( 'Title', THEMENAME ),
						"param_name" => "title",
						"admin_label"=> true,
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
						"type" => "colorpicker",
						"heading" => __ ( 'Title Color', THEMENAME ),
						"param_name" => "title_color",
						"description" => ''
				),
				array (
						"type" => "textarea",
						"heading" => __ ( 'Content', THEMENAME ),
						"param_name" => 'content',
						"value" => '',
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Content Limit Work', THEMENAME ),
						"param_name" => "content_limit",
						"description" => ''
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Content Color', THEMENAME ),
						"param_name" => "content_color",
						"description" => ''
				),
				array (
						"type" => "attach_image",
						"heading" => __ ( 'Image', THEMENAME ),
						"param_name" => "image",
						"description" => ''
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Crop image', THEMENAME ),
						"param_name" => "crop_image",
						"value" => array (
								__ ( "Yes, please", THEMENAME ) => true
						),
						"description" => __ ( 'Crop or not crop image on your Full Box.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Height Image', THEMENAME ),
						"param_name" => "height_image",
						"description" => __ ( 'Enter the height of image. Default: 200', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Width Image', THEMENAME ),
						"param_name" => "width_image",
						"description" => __ ( 'Enter the width of image. Default: 300', THEMENAME )
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( "Style", THEMENAME ),
						"param_name" => "style",
						"value" => array (
								"Lily" => "lily",
								"Sadie" => "sadie",
								"Honey" => "honey",
								"Layla" => "layla",
								"Zoe" => "zoe",
								"Oscar" => "oscar",
								"Marley" => "marley",
								"Ruby" => "ruby",
								"Roxy" => "roxy",
								"Bubba" => "bubba",
								"Romeo" => "romeo",
								"Dexter" => "dexter",
								"Sarah" => "sarah",
								"Chico" => "chico",
								"Milo" => "milo"
						),
						"description" => 'Select your style.'
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
						"type" => "textfield",
						"heading" => __ ( 'Link', THEMENAME ),
						"param_name" => "link",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Custom Class', THEMENAME ),
						"param_name" => "custom_class",
						"description" => ''
				)
		)
) );