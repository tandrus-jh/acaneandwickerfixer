<?php
vc_map ( array (
		"name" => 'Interactive Banner',
		"base" => "cs-interactive-banner",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __('Interactive Banner', THEMENAME),
		"params" => array (
				array (
						"type" => "textfield",
						"heading" => __ ( 'Title', THEMENAME ),
						"param_name" => "title",
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
						"description" => __('Select your heading size for title.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Icons', THEMENAME ),
						"param_name" => "icon_title",
						"description" => __('You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart', THEMENAME )
				),
				array (
						"type" => "textarea",
						"heading" => __ ( 'Short Description', THEMENAME ),
						"param_name" => 'short_description',
						"value" => '',
						"description" => ''
				),
				array (
						"type" => "textarea",
						"heading" => __ ( 'Full Description', THEMENAME ),
						"param_name" => 'full_description',
						"value" => '',
						"description" => ''
				),
				array (
						"type" => "attach_image",
						"heading" => __ ( 'Image', THEMENAME ),
						"param_name" => "image",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'overlay', THEMENAME ),
						"param_name" => "overlay",
						"description" => '',
						"value" => '0.8'
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Overlay Hover', THEMENAME ),
						"param_name" => "overlay_hover",
						"description" => '',
						"value" => '0.8'
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Crop image', THEMENAME ),
						"param_name" => "crop_image",
						"value" => array (
								__ ( "Yes, please", THEMENAME ) => true
						),
						"description" => __ ( 'Crop or not crop image on your Post.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Width image', THEMENAME ),
						"param_name" => "width_image",
						"description" => __ ( 'Enter the width of image. Default: 300.', THEMENAME )
				),

				array (
						"type" => "textfield",
						"heading" => __ ( 'Height image', THEMENAME ),
						"param_name" => "height_image",
						"description" => __ ( 'Enter the height of image. Default: 200.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Readmore Text', THEMENAME ),
						"param_name" => "show_more",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Link show more', THEMENAME ),
						"param_name" => "link_show_more",
						"description" => __('Fill URL if you want to show read more link.', THEMENAME )
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( "Style", THEMENAME ),
						"param_name" => "style",
						"value" => array (
								"Style 1" => "style1",
								"Style 2" => "style2",
								"Style 3" => "style3",
								"Style 4" => "style4",
								"Style 5" => "style5",
								"Style 6" => "style6"
						),
						"description" => __('Select your style of interactive banner.', THEMENAME )
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( "animate type", THEMENAME ),
						"param_name" => "interactive_animate_type",
						"value" => array (
								"None" => "none",
								"Scale up" => "scale-up",
								"Fade in" => "fade-in",
								"Right to left" => "right-to-left",
								"Left to right" => "left-to-right",
								"Top to bottom" => "top-to-bottom",
								"Bottom to top" => "bottom-to-top"
						),
						"description" => __('Select your animate type of icon.', THEMENAME )
				),

				array (
						"type" => "textfield",
						"heading" => __ ( 'Custom Class', THEMENAME ),
						"param_name" => "custom_class",
						"description" => ''
				)
		)
) );