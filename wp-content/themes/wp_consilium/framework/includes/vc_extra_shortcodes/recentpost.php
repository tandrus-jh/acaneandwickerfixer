<?php
/* --------------------------------------------------------------------- */
/* Shortcode Recent Post */
/* --------------------------------------------------------------------- */
vc_map(array(
    "name" => 'Recent Posts',
    "base" => "cs-shortcode-recent-post",
    "icon" => "cs_icon_for_vc",
    "category" => __('CS Hero',THEMENAME),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __('Title', THEMENAME),
            "param_name" => "title",
            "description" => __('',THEMENAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Description', THEMENAME),
            "param_name" => "description",
            "description" => __('',THEMENAME)
        ),
        array(
            "type" => "pro_taxonomy",
            "taxonomy" => "category",
            "heading" => __("Categories",THEMENAME),
            "param_name" => "category",
            "description" => __("Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.",THEMENAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Show Title', THEMENAME),
            "param_name" => "show_title",
            "value" => array(__("Yes, please", "js_composer") => true),
            "description" => __('Show or hide the post title.',THEMENAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Heading', THEMENAME),
            "param_name" => "heading",
            "value" => 'h2',
            "description" => __('Heading tag of title.',THEMENAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Show Category', THEMENAME),
            "param_name" => "show_category",
            "value" => array(__("Yes, please", "js_composer") => true),
            "description" => __('Show or hide the post category.',THEMENAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Show Date', THEMENAME),
            "param_name" => "show_date",
            "value" => array(__("Yes, please", "js_composer") => true),
            "description" => __('Show or hide the post date.',THEMENAME)
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Type",THEMENAME),
            "param_name" => "type",
            "value" => array(
                "Masonry" => "masonry",
                "Grid" => "grid"
            ),
            "description" => __("",THEMENAME)
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Columns",THEMENAME),
            "param_name" => "columns",
            "value" => array(
                "1 columns" => "1",
                "2 columns" => "2",
                "3 columns" => "3",
                "4 columns" => "4"
            ),
            "description" => __("",THEMENAME)
        ),
        array(
            "type" => "checkbox",
            "heading" => __('Crop image', THEMENAME),
            "param_name" => "crop_image",
            "value" => array(__("Yes, please", THEMENAME) => true),
            "description" => __('Crop or not crop image on your Post.', THEMENAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Width image', THEMENAME),
            "param_name" => "width_image",
            "description" => __('Enter the width of image. Default: 300.',THEMENAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Height image', THEMENAME),
            "param_name" => "height_image",
            "description" => __('Enter the height of image. Default: 200.',THEMENAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Excerpt Length', THEMENAME),
            "param_name" => "excerpt_length",
            "value" => '100',
            "description" => __('The length of the excerpt, number of words to display. Set to "-1" for no excerpt.',THEMENAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Read More', THEMENAME),
            "param_name" => "read_more",
            'value' => '-1',
            "description" => __('Optional link after post excerpts. Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __('Number of posts to show per page', THEMENAME),
            "param_name" => "posts_per_page",
            'value' => '',
            "description" => __('The number of posts to display on each page. Set to "-1" for display all posts on the page.', THEMENAME)
        ),
        array(
            "type" => "dropdown",
            "heading" => __('Order by', THEMENAME),
            "param_name" => "orderby",
            "value" => array( "Title" => "title","Popular"=>"comment_count", "Date" => "date", "ID" => "ID"),
            "description" => __('',THEMENAME)
        ),
        array(
            "type" => "dropdown",
            "heading" => __('Order', THEMENAME),
            "param_name" => "order",
            "value" => array("ASC" => "asc", "DESC" => "desc"),
            "description" => __('Order ("Asc", "Desc").')
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Layout",THEMENAME),
            "param_name" => "layout",
            "value" => array(
                "Layout 1" => "style-1",
                "Layout 2" => "style-2",
                "Layout 3" => "style-3"
            ),
            "description" => __("",THEMENAME)
        ),
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "js_composer"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
    )
));
?>