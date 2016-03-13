<?php
/*-----------------------------POST TYPE------------------------------*/
/**
 * Post Type Pricing
 */
require get_template_directory().'/framework/views/posttype/pricing.php';
/**
* Post Type Team
*/
require get_template_directory().'/framework/views/posttype/team.php';
/**
* Post Type Header
*/
require get_template_directory().'/framework/views/posttype/header.php';
/**
* Post Type Our Client
*/
require get_template_directory().'/framework/views/posttype/my_client.php';
/**
* Post Type Portfolio
*/
require get_template_directory().'/framework/views/posttype/portfolio.php';
/**
* Post Type Testimonials
*/
require get_template_directory().'/framework/views/posttype/testimonial.php';
/*-------------------------------LIB--------------------------------*/
/**
* Lib resize images
*/
require get_template_directory().'/framework/includes/resize.php';
/**
 *
 */
require get_template_directory().'/framework/includes/post_favorite.php';
/*------------------------------PLUGIN----------------------------*/
/**
 * Social Sharing
 */
require get_template_directory().'/framework/plugins/socialsharing/socialsharing.php';
/*---------------------------------POST-------------------------------*/
/**
 * multiple-blog
 */
require get_template_directory().'/framework/templates/multiple-blog.php';
/*---------------------------------VC-------------------------------*/
/**
 * Vc extra shorcodes
 */
if (function_exists("vc_map")){
	require get_template_directory().'/framework/includes/vc_extra_shorcodes.php';
}
/**
* Vc extra Fields
*/
if (function_exists("vc_add_shortcode_param")){
	require get_template_directory().'/framework/includes/vc_extra_fields.php';
}
/**
* Vc extra params
*/
if (function_exists("vc_add_param")){
	require get_template_directory().'/framework/includes/vc_extra_params.php';
}
/*------------------------------Extra Fields----------------------------*/
/**
 * Metaboxes
 */
require get_template_directory().'/framework/metaboxes.php';
/**
 * Category Extra Fields
 */
require get_template_directory().'/framework/views/extrafields/category.php';
/*--------------------------------Mega Menu------------------------------*/
require get_template_directory().'/framework/megamenu/mega-menu.php';
/*------------------------------Load Shortcodes--------------------------*/
require get_template_directory() . '/framework/shortcodes/shortcodes.php' ;
/*------------------------------Load Shortcodes--------------------------*/
require get_template_directory() . '/framework/tinymce/button.php' ;
/*-------------------------------Load Widgets----------------------------*/
get_template_part('framework/widgets');