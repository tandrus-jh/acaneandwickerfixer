<?php
vc_map ( array (
		"name" => 'Pricing',
		"base" => "cs-pricing",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ( 'Pricing Table', THEMENAME ),
		"params" => array (
				array (
						"type" => "textfield",
						"heading" => __ ( 'Title', THEMENAME ),
						"param_name" => "title",
						"description" => __ ( '', THEMENAME )
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
						"type" => "textfield",
						"heading" => __ ( 'Description', THEMENAME ),
						"param_name" => "description",
						"description" => __ ( '', THEMENAME )
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Description Color', THEMENAME ),
						"param_name" => "description_color",
						"description" => ''
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Show Image', THEMENAME ),
						"param_name" => "show_image",
						"value" => array (
								__ ( "Yes", "js_composer" ) => true
						),
						"description" => __ ( 'Show or hide featured image on your Pricing.', THEMENAME )
				),
				array (
						"type" => "pro_taxonomy",
						"taxonomy" => "pricing_category",
						"heading" => __ ( "Categories", THEMENAME ),
						"param_name" => "category",
						"description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME )
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( 'Columns', THEMENAME ),
						"param_name" => "columns",
						"value" => array (
								"2 Columns" => "2",
								"3 Columns" => "3",
								"4 Columns" => "4"
						),
						"description" => __ ( 'How many columns would you like to display on the Pricing Overview page?', THEMENAME )
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( 'Order by', THEMENAME ),
						"param_name" => "orderby",
						"value" => array (
								"None" => "none",
								"Title" => "title",
								"Date" => "date",
								"ID" => "ID"
						),
						"description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( 'Order', THEMENAME ),
						"param_name" => "order",
						"value" => Array (
								"None" => "none",
								"ASC" => "ASC",
								"DESC" => "DESC"
						),
						"description" => __ ( 'Order ("None", "Asc", "Desc").', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Extra class', THEMENAME ),
						"param_name" => "el_class",
						"value" => '',
						"description" => __ ( 'Enter extra class for pricing style.', THEMENAME )
				)
		)
) );