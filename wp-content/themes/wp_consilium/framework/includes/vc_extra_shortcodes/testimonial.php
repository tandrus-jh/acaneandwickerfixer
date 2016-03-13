<?php
vc_map ( array (
		"name" => 'Testimonial',
		"base" => "cs-testimonial",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ( 'Testimonial', THEMENAME ),
		"params" => array (
				array (
						"type" => "pro_taxonomy",
						"taxonomy" => "testimonial_category",
						"heading" => __ ( "Categories", THEMENAME ),
						"param_name" => "category",
						"description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Title', THEMENAME ),
						"param_name" => "title",
						"description" => __ ( 'Enter the Title', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Description', THEMENAME ),
						"param_name" => "description",
						"description" => __ ( 'Enter the description', THEMENAME )
				),
				array (
						"type" => "textfield",
						"class" => "",
						"heading" => __ ( "Items Limit", THEMENAME ),
						"param_name" => "posts_per_page",
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Item width', THEMENAME ),
						"param_name" => "width_item",
						"description" => __ ( '', THEMENAME )
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
						"heading" => __ ( 'Show title', THEMENAME ),
						"param_name" => "show_title",
						"value" => array (
								__ ( "Yes, please", "js_composer" ) => "true"
						),
						"description" => __ ( 'Show or hide title on your Portfolio.', THEMENAME )
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
						"type" => "textfield",
						"heading" => __ ( 'Excerpt Length', THEMENAME ),
						"param_name" => "excerpt_length",
						'value' => '300',
						"description" => __ ( 'The length of the excerpt, number of words to display. Set to "-1" for no excerpt.', THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Read More Text', THEMENAME ),
						"param_name" => "read_more",
						"value" => 'Read More',
						"description" => __ ( 'Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
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
						"class" => "",
						"heading" => __ ( "Layout", THEMENAME ),
						"param_name" => "layout",
						"value" => array (
								"Style 1" => "style-1",
								"Style 2" => "style-2",
								"Style 3" => "style-3",
								"Style 4" => "style-4",
								"Style 5 - Agency" => "style-5"
						),
						"description" => __ ( "", THEMENAME )
				),
				array (
						"type" => "textfield",
						"heading" => __ ( 'Custom Class', THEMENAME ),
						"param_name" => "el_class",
						"description" => '',
						"admin_label" => true
				)
		)
) );