<?php
if (class_exists ( 'Woocommerce' )) {
	vc_map ( array (
			"name" => 'Shop Carousel',
			"base" => "cs-shop-carousel",
			"icon" => "cs_icon_for_vc",
			"category" => __ ( 'CS Hero', THEMENAME ),
			"description" => __ ( 'Shop Carousel', THEMENAME, THEMENAME ),
			"params" => array (
					array (
							"type" => "textfield",
							"heading" => __ ( 'Title', THEMENAME ),
							"param_name" => "title",
							'value' => '',
							"description" => __ ( 'The title of carousel featured product.', THEMENAME )
					),
					array (
							"type" => "textfield",
							"heading" => __ ( 'Description', THEMENAME ),
							"param_name" => "description",
							"description" => __ ( '', THEMENAME, THEMENAME )
					),
					array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Style", THEMENAME ),
							"param_name" => "style",
							"value" => array (
									"Style 1" => "style1",
									"Style 2" => "style2"
							),
							"description" => __ ( "", THEMENAME )
					),
					array (
							"type" => "pro_taxonomy",
							"taxonomy" => "product_cat",
							"heading" => __ ( "Categories", THEMENAME ),
							"param_name" => "category",
							"description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME )
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
							"heading" => __ ( 'Show Navigation', THEMENAME ),
							"param_name" => "show_nav",
							"value" => array (
									__ ( "Yes, please", THEMENAME ) => true
							),
							"description" => __ ( 'Show or hide navigation.', THEMENAME )
					),
					array (
							"type" => "checkbox",
							"heading" => __ ( 'Show title', THEMENAME ),
							"param_name" => "show_title",
							"value" => array (
									__ ( "Yes, please", "js_composer" ) => true
							),
							"description" => __ ( 'Show or hide title on your Product.', THEMENAME )
					),
					array (
							"type" => "checkbox",
							"heading" => __ ( 'Show category', THEMENAME ),
							"param_name" => "show_category",
							"value" => array (
									__ ( "Yes, please", "js_composer" ) => true
							),
							"description" => __ ( 'Show or hide category on your Product.', THEMENAME )
					),
					array (
							"type" => "checkbox",
							"heading" => __ ( 'Show price', THEMENAME ),
							"param_name" => "show_price",
							"value" => array (
									__ ( "Yes, please", "js_composer" ) => true
							),
							"description" => __ ( 'Show or hide price on your Product.', THEMENAME )
					),
					array (
							"type" => "checkbox",
							"heading" => __ ( 'Show add to cart', THEMENAME ),
							"param_name" => "show_add_to_cart",
							"value" => array (
									__ ( "Yes, please", "js_composer" ) => true
							),
							"description" => __ ( 'Show or hide add to cart on your Product.', THEMENAME )
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
							"value" => array (
									"None" => "none",
									"Ascending" => "asc",
									"Descending" => "desc"
							),
							"description" => __ ( 'Order ("none", "asc", "desc").', THEMENAME )
					)
			)
	) );
}