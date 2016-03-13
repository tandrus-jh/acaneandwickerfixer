<?php
vc_map ( array (
		"name" => 'Team',
		"base" => "cs-team",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ( 'Team carousel', THEMENAME ),
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
						"taxonomy" => "team_category",
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
						"type" => "textfield",
						"heading" => __ ( 'Read more', THEMENAME ),
						"param_name" => "read_more",
						'value' => '',
						"description" => __ ( '', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Excerpt length', THEMENAME ),
						"param_name" => "excerpt_length",
						'value' => '300',
						"description" => __ ( '', THEMENAME )
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Show title', THEMENAME ),
						"param_name" => "show_title",
						"value" => array (
								__ ( "Yes, please", "js_composer" ) => "true"
						),
						"description" => __ ( 'Show or hide title on your Portfolio.', THEMENAME )
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
						"type" => "checkbox",
						"heading" => __ ( 'Show category', THEMENAME ),
						"param_name" => "show_category",
						"value" => array (
								__ ( "Yes, please", "js_composer" ) => "true"
						),
						"description" => __ ( 'Show or hide category on your Team.', THEMENAME )
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Show description', THEMENAME ),
						"param_name" => "show_description",
						"value" => array (
								__ ( "Yes, please", "js_composer" ) => "true"
						),
						"description" => __ ( 'Show or hide description on your Portfolio.', THEMENAME )
				),
				array (
						"type" => "checkbox",
						"heading" => __ ( 'Show socials', THEMENAME ),
						"param_name" => "show_socials",
						"value" => array (
								__ ( "Yes, please", "js_composer" ) => "true"
						),
						"description" => __ ( 'Show or hide socials on your Team.', THEMENAME )
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
						"type" => "dropdown",
						"heading" => __ ( 'Layout', THEMENAME ),
						"param_name" => "layout",
						"value" => Array (
								"Layout 0" => "style-0",
								"Layout 1" => "style-1",
								"Layout 2" => "style-2",
								"Layout 3" => "style-3",
						),
						"description" => __ ( '.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( "Extra class name", THEMENAME ),
						"param_name" => "el_class",
						"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", THEMENAME )
				)
		)
) );