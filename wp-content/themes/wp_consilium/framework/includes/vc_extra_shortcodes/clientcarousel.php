<?php
vc_map ( array (
		"name" => 'Carousel Client',
		"base" => "cs-carousel-clients",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ( 'Carousel Client', THEMENAME ),
		"params" => array (
				array (
						"type" => "textfield",
						"heading" => __ ( 'Title', THEMENAME ),
						"param_name" => "title",
						"description" => __ ( '', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Description', THEMENAME ),
						"param_name" => "description",
						"description" => __ ( '', THEMENAME )
				),
				array (
						"type" => "pro_taxonomy",
						"taxonomy" => "clientscategory",
						"heading" => __ ( 'Category', THEMENAME ),
						"param_name" => "category",
						"description" => 'The category ID\'s to pull posts from. Can be entered as a comma separated list.',
						"admin_label" => true
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Auto scroll', THEMENAME ),
						"param_name" => "auto_scroll",
						"value" => array (
								__ ( "Yes, please", THEMENAME ) => true
						),
						"description" => __ ( 'Auto scroll.', THEMENAME )
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Show navigation', THEMENAME ),
						"param_name" => "show_nav",
						"value" => array (
								__ ( "Yes, please", THEMENAME ) => true
						),
						"description" => __ ( 'Show or hide navigation on your carousel client.', THEMENAME )
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Show Link', THEMENAME ),
						"param_name" => "show_link",
						"value" => array (
								__ ( "Yes, please", THEMENAME ) => true
						),
						"description" => __ ( 'Show or hide link to post on your carousel client.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Width item', THEMENAME ),
						"param_name" => "width_item",
						"description" => __ ( 'Enter the width of item. Default: 150.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Margin item', THEMENAME ),
						"param_name" => "margin_item",
						"description" => __ ( 'Enter the margin of item. Default: 20.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Speed', THEMENAME ),
						"param_name" => "speed",
						"description" => __ ( 'Enter the speed of carousel. Default: 500.', THEMENAME )
				),
				array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Rows", THEMENAME ),
						"param_name" => "rows",
						"value" => array (
								"1 row" => "1",
								"2 rows" => "2",
								"3 rows" => "3",
								"4 rows" => "4"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Number of posts to show per page', THEMENAME ),
						"param_name" => "posts_per_page",
						'value' => '12',
						"description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', THEMENAME )
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
						"heading" => __ ( "Extra class name", THEMENAME ),
						"param_name" => "el_class",
						"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", THEMENAME )
				)
		)
) );