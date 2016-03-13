<?php
/* --------------------------------------------------------------------- */
/* Shortcode Carousel Client */
/* --------------------------------------------------------------------- */
$cs_shortcodes['cs-carousel-clients'] = array(
    'fields' => array(
        'title' =>  array(
                "type" => "text",
                "title" => __ ( 'Title', THEMENAME ),
                "param_name" => "title",
                "description" => __ ( '', THEMENAME )
            ),
        'description' => array(
                "type" => "text",
                "title" => __ ( 'Description', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'category' => array(
                "type" => "pro_taxonomy",
                "taxonomy" => "clientscategory",
                "title" => __ ( 'Category', THEMENAME ),
                "description" => 'The category ID\'s to pull posts from. Can be entered as a comma separated list.',
                "admin_label" => true
        ),
        'auto_scroll' => array(
                "type" => "checkbox",
                "title" => __ ( 'Auto scroll', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Auto scroll.', THEMENAME )
        ),
        'show_nav' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show navigation', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide navigation on your carousel client.', THEMENAME )
        ),
        'show_link' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show Link', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => false
                ),
                "description" => __ ( 'Show or hide link to post on your carousel client.', THEMENAME )
        ),
        'width_item' => array(
                "type" => "text",
                "title" => __ ( 'Width item', THEMENAME ),
                "description" => __ ( 'Enter the width of item. Default: 150.', THEMENAME )
        ),
        'margin_item' => array(
                "type" => "text",
                "title" => __ ( 'Margin item', THEMENAME ),
                "description" => __ ( 'Enter the margin of item. Default: 20.', THEMENAME )
        ),
        'speed' => array(
                "type" => "text",
                "title" => __ ( 'Speed', THEMENAME ),
                "description" => __ ( 'Enter the speed of carousel. Default: 500.', THEMENAME )
        ),
        'rows' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Rows", THEMENAME ),
                "values" => array(
                        "1 row" => "1",
                        "2 rows" => "2",
                        "3 rows" => "3",
                        "4 rows" => "4"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'posts_per_page' => array(
                "type" => "text",
                "title" => __ ( 'Number of posts to show per page', THEMENAME ),
                'value' => '12',
                "description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', THEMENAME )
        ),
        'orderby' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order by', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "Title" => "title",
                        "Date" => "date",
                        "ID" => "ID"
                ),
                "description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
        ),
        'order' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "ASC" => "ASC",
                        "DESC" => "DESC"
                ),
                "description" => __ ( 'Order ("None", "Asc", "Desc").', THEMENAME )
        ),
        'el_class' => array(
                "type" => "text",
                "title" => __ ( "Extra class name", THEMENAME ),
                "description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", THEMENAME )
        )
    ),
    'title' => 'Carousel Client'
);
$cs_shortcodes['cs-counter'] = array(
    'fields' => array(
        'type' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Type", THEMENAME ),
                "values" => array(
                        "Zero Counter" => "zero",
                        "Random Counter" => "random"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'box' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Box", THEMENAME ),
                "values" => array(
                        "Yes" => "yes",
                        "No" => "no"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'position' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Position", THEMENAME ),
                "values" => array(
                        "Left" => "left",
                        "Right" => "right",
                        "Center" => "center"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'digit' => array(
                "type" => "text",
                "title" => __ ( 'Digit', THEMENAME ),
                "values" => '700',
                "description" => ''
        ),
        'font_size' => array(
                "type" => "text",
                "title" => __ ( 'Font size (px)', THEMENAME ),
                "values" => '',
                "description" => ''
        ),
        'font_weight' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Font weight", THEMENAME ),
                "values" => array(
                        "Default" => "",
                        "Thin 100" => "100",
                        "Extra-Light 200" => "200",
                        "Light 300" => "300",
                        "Regular 400" => "400",
                        "Medium 500" => "500",
                        "Semi-Bold 600" => "600",
                        "Bold 700" => "700",
                        "Extra-Bold 800" => "800",
                        "Ultra-Bold 900" => "900"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'font_color' => array(
                "type" => "colorpicker",
                "title" => __ ( "Font color", THEMENAME ),
                "description" => __ ( "", THEMENAME )
        ),
        'text' => array(
                "type" => "text",
                "title" => __ ( 'Text', THEMENAME ),
                "values" => '',
                "description" => ''
        ),
        'text_size' => array(
                "type" => "text",
                "title" => __ ( 'Text Size (px)', THEMENAME ),
                "values" => '',
                "description" => ''
        ),
        'text_font_weight' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Text Font Weight", THEMENAME ),
                "values" => array(
                        "Default" => "",
                        "Thin 100" => "100",
                        "Extra-Light 200" => "200",
                        "Light 300" => "300",
                        "Regular 400" => "400",
                        "Medium 500" => "500",
                        "Semi-Bold 600" => "600",
                        "Bold 700" => "700",
                        "Extra-Bold 800" => "800",
                        "Ultra-Bold 900" => "900"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'text_transform' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __( "Text Transform", THEMENAME ),
                "values" => array(
                        "Default" => "",
                        "None" => "none",
                        "Capitalize" => "capitalize",
                        "Uppercase" => "uppercase",
                        "Lowercase" => "lowercase"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'text_color' => array(
                "type" => "colorpicker",
                "title" => __ ( "Text color", THEMENAME ),
                "description" => __ ( "", THEMENAME )
        ),
        'separator' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Separator", THEMENAME ),
                "values" => array(
                        "Yes" => "yes",
                        "No" => "no"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'separator_color' => array(
                "type" => "colorpicker",
                "title" => __ ( "Separator color", THEMENAME ),
                "description" => __ ( "", THEMENAME )
        ),
        'separator_border_style' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Separator Border Style", THEMENAME ),
                "values" => array(
                        "Dashed" => "dashed",
                        "Solid" => "solid"
                ),
                "description" => __ ( "", THEMENAME )
        )
        ),
    'title'  => 'Counter'
    );
$cs_shortcodes['cs-cover-boxes'] = array(
    'fields'=> array(
        'active_element' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Active element",
                "values" => ""
        ),
        'title_tag' => array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "title" => "Title tag",
                "values" => array(
                        "h1" => "h1",
                        "h2" => "h2",
                        "h3" => "h3",
                        "h4" => "h4",
                        "h5" => "h5",
                        "h6" => "h6"
                ),
                "description" => "Choose with title tag to display for titles"
        ),
        'image1' => array(
                "type" => "image",
                "title" => "Image 1"
        ),
        'title1' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Title 1",
                "values" => ""
        ),
        'title_color1' => array(
                "type" => "colorpicker",
                "title" => "Title Color 1"
        ),
        'text1' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Text 1",
                "values" => ""
        ),
        'text_color1' => array(
                "type" => "colorpicker",
                "title" => "Text Color 1"
        ),
        'link1' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Link 1",
                "values" => ""
        ),
        'link_label1' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Link label 1",
                "values" => ""
        ),
        'target1'=> array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "title" => "Target 1",
                "values" => array(
                        "Self" => "_self",
                        "Blank" => "_blank",
                        "Parent" => "_parent",
                        "Top" => "_top"
                ),
                "description" => ""
        ),
        'image2' => array(
                "type" => "image",
                "title" => "Image 2"
        ),
        'title2' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Title 2",
                "values" => ""
        ),
        'title_color2' => array(
                "type" => "colorpicker",
                "title" => "Title Color 2",
                "description" => ""
        ),
        'text2' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Text 2",
                "values" => ""
        ),
        'text_color2' => array(
                "type" => "colorpicker",
                "title" => "Text Color 2"
        ),
        'link2' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Link 2",
                "values" => ""
        ),
        'link_label2' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Link label 2",
                "values" => ""
        ),
        'target2'=> array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "title" => "Target 2",
                "values" => array(
                        "Self" => "_self",
                        "Blank" => "_blank",
                        "Parent" => "_parent",
                        "Top" => "_top"
                ),
                "description" => ""
        ),
        'image3'=>array(
                "type" => "image",
                "title" => "Image 3"
        ),
        'title3' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Title 3",
                "values" => ""
        ),
        'title_color3'=> array(
                "type" => "colorpicker",
                "title" => "Title Color 3"
        ),
        'text3'=> array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Text 3",
                "values" => ""
        ),
        'text_color3'=> array(
                "type" => "colorpicker",
                "title" => "Text Color 3"
        ),
        'link3' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Link 3",
                "values" => ""
        ),
        'link_label3' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => "Link label 3",
                "values" => ""
        ),
        'target3' => array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "title" => "Target 3",
                "values" => array(
                        "Self" => "_self",
                        "Blank" => "_blank",
                        "Parent" => "_parent",
                        "Top" => "_top"
                ),
                "description" => ""
        ),
        'read_more_button_style' => array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "title" => "Read More Button Style",
                "values" => array(
                        "Default" => "",
                        "No" => "no",
                        "Yes" => "yes"
                ),
                "description" => ""
        )
        ),
    'title' => 'Cover Boxes'
    );
$cs_shortcodes['cs-dropcap'] = array(
    'fields' => array(
        'boxed' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Boxed', THEMENAME ),
                    "values" => array(
                            "Yes" => "true"
                    ),
                    "description" => ''
            ),
            'icon'=> array(
                    "type" => "textfield",
                    "title" => __ ( 'Icon', THEMENAME ),
                    "values" => '',
                    "description" => ''
            ),
            'style' => array(
                    "type" => "dropdown",
                    "title" => __ ( "Style", THEMENAME ),
                    "values" => array(
                            "Style 1" => "style-1",
                            "Style 2" => "style-2",
                            "Style 3" => "style-3",
                            "Style 4" => "style-4",
                            "Style 5" => "style-5",
                            "Style 6" => "style-6"
                    ),
                    "description" => 'Select your style'
            ),
            'text' => array(
                    "type" => "textfield",
                    "title" => __ ( 'First Text Content', THEMENAME ),
                    "values" => '',
                    "description" => ''
            )
        ),
    'title' => 'Drop Caps',
    'content' => array(
            "title" => __ ( 'Content', THEMENAME )
    )
    );
$cs_shortcodes['cs-fancy-box'] = array(
    'fields' => array(
        'icon_title' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Icons', THEMENAME ),
                    "description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
                    "admin_label" => true
            ),
            'icon_size' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Size Icons', THEMENAME ),
                    "description" => 'in px,%....',
                    "admin_label" => true
            ),
            'icon_color' => array(
                    "type" => "colorpicker",
                    "title" => __ ( 'Icons Color', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'border_color' => array(
                    "type" => "colorpicker",
                    "title" => __ ( 'Border Color', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'border_width' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Border Width', THEMENAME ),
                    "description" => 'px,em,...',
                    "admin_label" => true
            ),
            'border_style' => array(
                    "type" => "dropdown",
                    "title" => __ ( "Border Style", THEMENAME ),
                    "values" => array(
                            "None" => "",
                            "Solid" => "solid",
                            "Dotted" => "dotted",
                            "Dashed" => "dashed",
                            "Double" => "double"
                    ),
                    "description" => 'Select your style of border.'
            ),
            'icon_width' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Icons Width', THEMENAME ),
                    "description" => 'px,em,...',
                    "admin_label" => true
            ),
            'icon_heigth' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Icons Height', THEMENAME ),
                    "description" => 'px,em,...',
                    "admin_label" => true
            ),
            'icon_style' => array(
                    "type" => "dropdown",
                    "title" => __ ( "Icon style", THEMENAME ),
                    "values" => array(
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
            'icon_animate_type' => array(
                    "type" => "dropdown",
                    "title" => __ ( "Icon animate type", THEMENAME ),
                    "values" => array(
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
            'show_icon_link' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Show icon link', THEMENAME ),
                    "values" => array(
                            __ ( "Yes, please", THEMENAME ) => true
                    ),
                    "description" => __ ( 'Show or hide icon link.', THEMENAME )
            ),
            'image' => array(
                    "type" => "attach_image",
                    "title" => __ ( 'Image', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'title' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Title', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'uppercase' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Lowercase Title', THEMENAME ),
                    "values" => array(
                            __ ( "Yes, please", THEMENAME ) => true
                    ),
                    "description" => __ ( '', THEMENAME )
            ),
            'title_color' => array(
                    "type" => "colorpicker",
                    "title" => __ ( 'Title Color', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'title_margin' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Title Margin', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'title_size' => array(
                    "type" => "dropdown",
                    "title" => __ ( "title size", THEMENAME ),
                    "values" => array(
                            "Heading 1" => "h1",
                            "Heading 2" => "h2",
                            "Heading 3" => "h3",
                            "Heading 4" => "h4",
                            "Heading 5" => "h5",
                            "Heading 6" => "h6"
                    ),
                    "description" => 'Select your title size for title.'
            ),
            'content_color' => array(
                    "type" => "colorpicker",
                    "title" => __ ( 'Content Color', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'read_more' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Read More', THEMENAME ),
                    'values' => '',
                    "description" => __ ( 'Optional link after post excerpts. Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
            ),
            'read_more_margin' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Read Margin', THEMENAME ),
                    'values' => '',
                    "description" => ''
            ),
            'read_btn' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Read Button', THEMENAME ),
                    "values" => array(
                            __ ( "Yes", THEMENAME ) => true
                    ),
                    "description" => ''
            ),
            'link_show_more' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Link show more', THEMENAME ),
                    "description" => 'Fill URL if you want to show read more link.',
                    "admin_label" => true
            ),
            'custom_class' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Custom Class', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            )
        ),
    'title' => 'Fancy Icon Boxes',
    'content' => array(
            "title" => __ ( 'Content', THEMENAME )
    )
    );
$cs_shortcodes['cs-full-box'] = array(
    'fields'=>array(
        'title' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Title', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'heading_size' => array(
                    "type" => "dropdown",
                    "title" => __ ( "Heading size", THEMENAME ),
                    "values" => array(
                            "Heading 1" => "h1",
                            "Heading 2" => "h2",
                            "Heading 3" => "h3",
                            "Heading 4" => "h4",
                            "Heading 5" => "h5",
                            "Heading 6" => "h6"
                    ),
                    "description" => 'Select your heading size for title.'
            ),
            'image' => array(
                    "type" => "attach_image",
                    "title" => __ ( 'Image', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'style' => array(
                    "type" => "dropdown",
                    "title" => __ ( "Style", THEMENAME ),
                    "values" => array(
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
            'icon_animate_type' => array(
                    "type" => "dropdown",
                    "title" => __ ( "Icon animate type", THEMENAME ),
                    "values" => array(
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
            'link' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Link', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            ),
            'width' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Width', THEMENAME ),
                    "values" => "100%",
                    "description" => '',
                    "admin_label" => true
            ),
            'height' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Height', THEMENAME ),
                    "values" => "302px",
                    "description" => '',
                    "admin_label" => true
            ),
            'custom_class' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Custom Class', THEMENAME ),
                    "description" => '',
                    "admin_label" => true
            )
        ),
    'title'=>'Full Boxes',
    'content' => array(
            "title" => __( 'Content', THEMENAME ),
    )
    );
$cs_shortcodes['cs-interactive-banner'] = array(
    'fields' =>  array(
        'title' => array(
                        "type" => "textfield",
                        "title" => __ ( 'Title', THEMENAME ),
                        "description" => '',
                        "admin_label" => true
                ),
                'heading_size' => array(
                        "type" => "dropdown",
                        "title" => __ ( "Heading size", THEMENAME ),
                        "values" => array(
                                "Heading 1" => "h1",
                                "Heading 2" => "h2",
                                "Heading 3" => "h3",
                                "Heading 4" => "h4",
                                "Heading 5" => "h5",
                                "Heading 6" => "h6"
                        ),
                        "description" => 'Select your heading size for title.'
                ),
                'icon_title' => array(
                        "type" => "textfield",
                        "title" => __ ( 'Icons', THEMENAME ),
                        "description" => 'You can find icon class at here: <a target="_blank" href="http://fontawesome.io/icons/">"http://fontawesome.io/icons/</a>. For example, fa fa-heart',
                        "admin_label" => true
                ),
                'short_description' => array(
                        "type" => "textarea",
                        "title" => __ ( 'Short Description', THEMENAME ),
                        "values" => '',
                        "description" => '',
                        "admin_label" => true
                ),
                'full_description' => array(
                        "type" => "textarea",
                        "title" => __ ( 'Full Description', THEMENAME ),
                        "values" => '',
                        "description" => '',
                        "admin_label" => true
                ),
                'image' => array(
                        "type" => "attach_image",
                        "title" => __ ( 'Image', THEMENAME ),
                        "description" => '',
                        "admin_label" => true
                ),
                'overlay' => array(
                        "type" => "textfield",
                        "title" => __ ( 'overlay', THEMENAME ),
                        "description" => '',
                        "values" => '0.8',
                        "admin_label" => true
                ),
                'overlay_hover' => array(
                        "type" => "textfield",
                        "title" => __ ( 'Overlay Hover', THEMENAME ),
                        "description" => '',
                        "values" => '0.8',
                        "admin_label" => true
                ),
                'crop_image' => array(
                        "type" => "checkbox",
                        "title" => __ ( 'Crop image', THEMENAME ),
                        "values" => array(
                                __ ( "Yes, please", THEMENAME ) => true
                        ),
                        "description" => __ ( 'Crop or not crop image on your Post.', THEMENAME )
                ),
                'width_image' => array(
                        "type" => "textfield",
                        "title" => __ ( 'Width image', THEMENAME ),
                        "description" => __ ( 'Enter the width of image. Default: 300.', THEMENAME )
                ),

                'height_image' => array(
                        "type" => "textfield",
                        "title" => __ ( 'Height image', THEMENAME ),
                        "description" => __ ( 'Enter the height of image. Default: 200.', THEMENAME )
                ),
                'show_more' => array(
                        "type" => "textfield",
                        "title" => __ ( 'Readmore Text', THEMENAME ),
                        "description" => '',
                        "admin_label" => true
                ),
                'link_show_more' => array(
                        "type" => "textfield",
                        "title" => __ ( 'Link show more', THEMENAME ),
                        "description" => 'Fill URL if you want to show read more link.',
                        "admin_label" => true
                ),
                'style' => array(
                        "type" => "dropdown",
                        "title" => __ ( "Style", THEMENAME ),
                        "values" => array(
                                "Style 1" => "style1",
                                "Style 2" => "style2",
                                "Style 3" => "style3",
                                "Style 4" => "style4",
                                "Style 5" => "style5",
                                "Style 6" => "style6"
                        ),
                        "description" => 'Select your style of interactive banner.'
                ),
                'interactive_animate_type'=> array(
                        "type" => "dropdown",
                        "title" => __ ( "animate type", THEMENAME ),
                        "values" => array(
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

                'custom_class' => array(
                        "type" => "textfield",
                        "title" => __ ( 'Custom Class', THEMENAME ),
                        "description" => '',
                        "admin_label" => true
                )
        ),
    'title' => 'Interactive Banner'
    );
$cs_shortcodes['cs-latest-twitter'] = array(
    'fields' => array(
        'twittertitle' => array(
                "type" => "textfield",
                "values" => "",
                "title" => __ ( 'Title', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'consumerkey' => array(
                "type" => "textfield",
                "values" => "2Jd4h7mTLRi7XHlWMpX4w",
                "title" => __ ( 'Consumer key', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'consumersecret' => array(
                "type" => "textfield",
                "values" => "M3n1cMi3HPSmpKUJNgdPFmzjlDkXIDRTf1oHZIkM",
                "title" => __ ( 'Consumer secret', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'accesstoken' => array(
                "type" => "textfield",
                "values" => "1406608410-6TbCsgWzjqWD2aagTslnPd4ShxbWP9ZoFyXbiEN",
                "title" => __ ( 'Access token', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'accesstokensecret' => array(
                "type" => "textfield",
                "values" => "bnd86DE8Rm8A93MlwnylOGlWc8dvmQHrjzQT8BaI",
                "title" => __ ( 'Accesstoken secret', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'cachetime' => array(
                "type" => "textfield",
                "values" => "0.002",
                "title" => __ ( 'Cache time(hours)', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'username' => array(
                "type" => "textfield",
                "values" => "realjoomlaman",
                "title" => __ ( 'Username', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'tweetstoshow' => array(
                "type" => "select",
                "values" => array(
                        "1",
                        "2",
                        "3",
                        "4",
                        "5",
                        "6",
                        "7",
                        "8",
                        "9",
                        "10"
                ),
                "title" => __ ( 'Tweets to show', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'showavatar' => array(
                "type" => "select",
                "values" => array(
                        "Yes",
                        "No"
                ),
                "title" => __ ( 'Show avatar', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'excludereplies' => array(
                "type" => "select",
                "values" => array(
                        "true",
                        "false"
                ),
                "title" => __ ( 'Exclude replies', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'transition' => array(
                "type" => "dropdown",
                "values" => array(
                        "vertical" => "vertical",
                        "horizontal" => "horizontal"
                ),
                "title" => __ ( 'Type of transition', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'extra_class' => array(
                "type" => "textfield",
                "values" => "",
                "title" => __ ( 'Extra class', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'auto'=> array(
                "type" => "dropdown",
                "values" => array(
                        "true",
                        "false"
                ),
                "title" => __ ( 'Auto Slide', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'pause'=> array(
                "type" => "dropdown",
                "values" => array(
                        "Yes" => "1",
                        "No" => "0"
                ),
                "title" => __ ( 'Pause on Hover', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'touch'=> array(
                "type" => "select",
                "values" => array(
                        "true",
                        "false"
                ),
                "title" => __ ( 'Touch Enable', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'tweetscroll' => array(
                "type" => "textfield",
                "values" => '4000',
                "title" => __ ( 'Tweet Scroll', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'timeout' => array(
                "type" => "textfield",
                "values" => '4000',
                "title" => __ ( 'Time Out', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        ),
        'showcontrol' => array(
                "type" => "dropdown",
                "values" => array(
                        "Yes" => "true",
                        "No" => "false"
                ),
                "title" => __ ( 'Show control', THEMENAME ),
                "description" => __ ( '', THEMENAME ),
                "admin_label" => true
        )
        ),
    'title' => 'Latest Twitter'
    );
$cs_shortcodes['cs-piechart'] = array(
    'fields' => array(
        'title' => array(
                "type" => "textfield",
                "class" => "",
                "title" => __ ( "Title", THEMENAME ),
                "description" => ""
        ),
        'title_tag' => array(
                "type" => "dropdown",
                "title" => __ ( 'Title Tag', THEMENAME ),
                "values" => array(
                        "H1" => "h1",
                        "H2" => "h2",
                        "H3" => "h3",
                        "H4" => "h4",
                        "H5" => "h5",
                        "H6" => "h6"
                ),
                "description" => ""
        ),
        'description' => array(
                "type" => "textfield",
                "class" => "",
                "title" => __ ( "Description", THEMENAME ),
                "description" => ""
        ),
        'type' => array(
                "type" => "dropdown",
                "title" => __ ( 'Type', THEMENAME ),
                "values" => array(
                        "Doughnut" => "Doughnut",
                        "Pie" => "Pie"
                ),
                "description" => ""
        ),
        'inner_cutout' => array(
                "type" => "textfield",
                "class" => "",
                "title" => __ ( "Inner Cutout", THEMENAME ),
                "values" => 0,
                "description" => __ ( "Number 0->99 - The percentage of the chart that we cut out of the middle (This is 0 for Pie charts)", THEMENAME )
        ),
        'style' => array(
                "type" => "dropdown",
                "title" => __ ( 'Style', THEMENAME ),
                "values" => array(
                        "Style 1" => "1",
                        "Style 2" => "2",
                        "Style 3" => "3",
                        "Style 4" => "4",
                        "Style 5" => "5",
                        "Style 6" => "6"
                ),
                "description" => ""
        ),
        'width' => array(
                "type" => "textfield",
                "class" => "",
                "title" => __ ( "Width (px,%...)", THEMENAME ),
                "description" => ""
        ),
        'height' => array(
                "type" => "textfield",
                "class" => "",
                "title" => __ ( "Height (px,%...)", THEMENAME ),
                "description" => ""
        ),
        'values' => array(
                "type" => "text",
                "class" => "",
                "title" => __ ( "Values", THEMENAME ),
                "values" => "{'value':'30','color':'#DDD','highlight':'#FFF','label':'Demo'}",
                "description" => ""
        )
        ),
    'title' => 'Pie Chart'
    );
$cs_shortcodes['cs-portfolio'] = array(
    'fields' => array(
        'category' => array(
                "type" => "pro_taxonomy",
                "taxonomy" => "portfolio_category",
                "title" => __ ( "Categories", THEMENAME ),
                "description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME )
        ),
        'type' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Appearance", THEMENAME ),
                "values" => array(
                        "Grid" => "grid",
                        "Masonry" => "masonry"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'columns' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Columns", THEMENAME ),
                "values" => array(
                        "1 column" => "1",
                        "2 columns" => "2",
                        "3 columns" => "3",
                        "4 columns" => "4"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'crop_image' => array(
                "type" => "checkbox",
                "title" => __ ( 'Crop image', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Crop or not crop image on your Portfolio.', THEMENAME )
        ),
        'width_image' => array(
                "type" => "textfield",
                "title" => __ ( 'Width image', THEMENAME ),
                "description" => __ ( 'Enter the width of image. Default: 300.', THEMENAME )
        ),
        'height_image' => array(
                "type" => "textfield",
                "title" => __ ( 'Height image', THEMENAME ),
                "description" => __ ( 'Enter the height of image. Default: 200.', THEMENAME )
        ),
        'layout' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Layout", THEMENAME ),
                "values" => array(
                        "Layout 1" => "style-1"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'style' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Style", THEMENAME ),
                "values" => array(
                        "Style 1" => "style1",
                        "Style 2" => "style2",
                        "Style 3" => "style3"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'filter' => array(
                "type" => "checkbox",
                "title" => __ ( 'Filter', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Would you like your portfolio items to be filter?', THEMENAME )
        ),
        'show_title' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show title', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide title on your Portfolio.', THEMENAME )
        ),
        'show_category' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show category', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide category on your Portfolio.', THEMENAME )
        ),
        'show_description' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show description', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide description on your Portfolio.', THEMENAME )
        ),
        'posts_per_page' => array(
                "type" => "textfield",
                "title" => __ ( 'Number of posts to show per page', THEMENAME ),
                'value' => '12',
                "description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', THEMENAME )
        ),
        'max_posts_per_page' => array(
                "type" => "textfield",
                "title" => __ ( 'Max of posts to show per page', THEMENAME ),
                "param_name" => "max_posts_per_page",
                'value' => '',
                "description" => __ ( 'The number of posts load more on each page. Set to "-1" for display all posts on the page or empty not load more.', THEMENAME )
        ),
        'excerpt_length' => array(
                "type" => "textfield",
                "title" => __ ( 'Excerpt Length', THEMENAME ),
                'value' => '100',
                "description" => __ ( 'The length of the excerpt, number of words to display. Set to "-1" for no excerpt.', THEMENAME )
        ),
        'enlarge' => array(
                "type" => "textfield",
                "title" => __ ( 'Show Enlarge', THEMENAME ),
                "values" => 'Enlarge',
                "description" => __ ( 'Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
        ),
        'read_more' => array(
                "type" => "textfield",
                "title" => __ ( 'Show Read More', THEMENAME ),
                "values" => 'Read More',
                "description" => __ ( 'Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
        ),
        'view_online' => array(
                "type" => "textfield",
                "title" => __ ( 'Show View Online', THEMENAME ),
                "values" => 'View Online',
                "description" => __ ( 'Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
        ),
        'orderby' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order by', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "Title" => "title",
                        "Date" => "date",
                        "ID" => "ID"
                ),
                "description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
        ),
        'order' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "ASC" => "ASC",
                        "DESC" => "DESC"
                ),
                "description" => __ ( 'Order ("None", "Asc", "Desc").', THEMENAME )
        )
        ),
    'title' => 'Portfolio'
    );
$cs_shortcodes['cs-portfolio-carousel'] = array(
    'fields' => array(
        'title' => array(
                "type" => "textfield",
                "title" => __ ( 'Title', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'subtitle' => array(
                "type" => "textfield",
                "title" => __ ( 'Sub Title', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'description' => array(
                "type" => "textfield",
                "title" => __ ( 'Description', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'category' => array(
                "type" => "pro_taxonomy",
                "taxonomy" => "portfolio_category",
                "title" => __ ( "Categories", THEMENAME ),
                "description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME, THEMENAME )
        ),
        'styles' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Styles", THEMENAME ),
                "values" => array(
                        "Style 1" => "style-1",
                        "Style 2" => "style-2",
                        "Style 3" => "style-3",
                        "Style 4" => "style-4",
                        "Style 5" => "style-5"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'crop_image' => array(
                "type" => "checkbox",
                "title" => __ ( 'Crop image', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Crop or not crop image on your Post.', THEMENAME )
        ),
        'width_image' => array(
                "type" => "textfield",
                "title" => __ ( 'Width image', THEMENAME ),
                "description" => __ ( 'Enter the width of image. Default: 300.', THEMENAME )
        ),
        'height_image' => array(
                "type" => "textfield",
                "title" => __ ( 'Height image', THEMENAME ),
                "description" => __ ( 'Enter the height of image. Default: 200.', THEMENAME )
        ),
        'width_item' => array(
                "type" => "textfield",
                "title" => __ ( 'Width item', THEMENAME ),
                "description" => __ ( 'Enter the width of item. Default: 150.', THEMENAME )
        ),
        'margin_item' => array(
                "type" => "textfield",
                "title" => __ ( 'Margin item', THEMENAME ),
                "description" => __ ( 'Enter the margin of item. Default: 20.', THEMENAME )
        ),
        'rows' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Rows", THEMENAME ),
                "values" => array(
                        "1 row" => "1",
                        "2 rows" => "2",
                        "3 rows" => "3",
                        "4 rows" => "4"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'auto_scroll' => array(
                "type" => "checkbox",
                "title" => __ ( 'Auto scroll', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Auto scroll.', THEMENAME )
        ),
        'same_height' => array(
                "type" => "checkbox",
                "title" => __ ( 'Same height', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Same height.', THEMENAME )
        ),
        'show_nav' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show navigation', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide navigation on your carousel post.', THEMENAME )
        ),
        'show_title' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show title', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide title on your post.', THEMENAME )
        ),
        'show_date' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show date', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide date of your post.', THEMENAME )
        ),
        'show_description' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show description', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide description of your post.', THEMENAME )
        ),
        'excerpt_length' => array(
                "type" => "textfield",
                "title" => __ ( 'Excerpt Length', THEMENAME ),
                "values" => '',
                "description" => __ ( 'The length of the excerpt, number of words to display. Set to "-1" for no excerpt. Default: 100.', THEMENAME )
        ),
        'read_more' => array(
                "type" => "textfield",
                "title" => __ ( 'Read More', THEMENAME ),
                "values" => '',
                "description" => __ ( 'Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
        ),
        'posts_per_page' => array(
                "type" => "textfield",
                "title" => __ ( 'Number of posts to show per page', THEMENAME ),
                'value' => '12',
                "description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', THEMENAME )
        ),
        'orderby' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order by', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "Title" => "title",
                        "Date" => "date",
                        "ID" => "ID"
                ),
                "description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
        ),
        'order' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "ASC" => "ASC",
                        "DESC" => "DESC"
                ),
                "description" => __ ( 'Order ("None", "Asc", "Desc").', THEMENAME )
        ),
        'el_class' => array(
                "type" => "textfield",
                "title" => __ ( "Extra class name", "js_composer" ),
                "description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer" )
        )       
        ),
    'title' => 'Portfolio Carousel'
    );
$cs_shortcodes['ww-shortcode-carousel-post'] = array(
    'fields' => array(
        'title' => array(
                "type" => "textfield",
                "title" => __ ( 'Title', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'subtitle' => array(
                "type" => "textfield",
                "title" => __ ( 'Sub Title', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'description' => array(
                "type" => "textfield",
                "title" => __ ( 'Description', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'category' => array(
                "type" => "pro_taxonomy",
                "taxonomy" => "category",
                "title" => __ ( "Categories", THEMENAME ),
                "description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME, THEMENAME )
        ),
        'styles' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Styles", THEMENAME ),
                "values" => array(
                        "Default 1 Consilium" => "style-1-consilium",
                        "Default 2 Consilium" => "style-2-consilium",
                        "Style 1" => "style-1",
                        "Style 1 Shop" => "style-1-shop",
                        "Style 2 Shop"=>'style-2-shop',
                        "Style 1 Retro" => "style-1-retro"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'crop_image' => array(
                "type" => "checkbox",
                "title" => __ ( 'Crop image', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Crop or not crop image on your Post.', THEMENAME )
        ),
        'width_image' => array(
                "type" => "textfield",
                "title" => __ ( 'Width image', THEMENAME ),
                "description" => __ ( 'Enter the width of image. Default: 300.', THEMENAME )
        ),
        'height_image' => array(
                "type" => "textfield",
                "title" => __ ( 'Height image', THEMENAME ),
                "description" => __ ( 'Enter the height of image. Default: 200.', THEMENAME )
        ),
        'width_item' => array(
                "type" => "textfield",
                "title" => __ ( 'Width item', THEMENAME ),
                "description" => __ ( 'Enter the width of item. Default: 150.', THEMENAME )
        ),
        'margin_item' => array(
                "type" => "textfield",
                "title" => __ ( 'Margin item', THEMENAME ),
                "description" => __ ( 'Enter the margin of item. Default: 20.', THEMENAME )
        ),
        'rows' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Rows", THEMENAME ),
                "values" => array(
                        "1 row" => "1",
                        "2 rows" => "2",
                        "3 rows" => "3",
                        "4 rows" => "4"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'auto_scroll' => array(
                "type" => "checkbox",
                "title" => __ ( 'Auto scroll', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Auto scroll.', THEMENAME )
        ),
        'same_height' => array(
                "type" => "checkbox",
                "title" => __ ( 'Same height', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Same height.', THEMENAME )
        ),
        'show_nav' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show navigation', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide navigation on your carousel post.', THEMENAME )
        ),
        'show_title' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show title', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide title on your post.', THEMENAME )
        ),
        'show_date' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show date', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide date of your post.', THEMENAME )
        ),
        'show_description' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show description', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", THEMENAME ) => true
                ),
                "description" => __ ( 'Show or hide description of your post.', THEMENAME )
        ),
        'excerpt_length' => array(
                "type" => "textfield",
                "title" => __ ( 'Excerpt Length', THEMENAME ),
                "values" => '',
                "description" => __ ( 'The length of the excerpt, number of words to display. Set to "-1" for no excerpt. Default: 100.', THEMENAME )
        ),
        'read_more' => array(
                "type" => "textfield",
                "title" => __ ( 'Read More', THEMENAME ),
                "values" => '',
                "description" => __ ( 'Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
        ),
        'posts_per_page' => array(
                "type" => "textfield",
                "title" => __ ( 'Number of posts to show per page', THEMENAME ),
                'value' => '12',
                "description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', THEMENAME )
        ),
        'orderby' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order by', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "Title" => "title",
                        "Date" => "date",
                        "ID" => "ID"
                ),
                "description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
        ),
        'order' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "ASC" => "ASC",
                        "DESC" => "DESC"
                ),
                "description" => __ ( 'Order ("None", "Asc", "Desc").', THEMENAME )
        ),
        'el_class' => array(
                "type" => "textfield",
                "title" => __ ( "Extra class name", "js_composer" ),
                "description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer" )
        )
        ),
    'title' => 'Post Carousel'
    );
$cs_shortcodes['cs-pricing'] = array(
    'fields' => array(
        'title' => array(
                "type" => "textfield",
                "title" => __ ( 'Title', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'description' => array(
                "type" => "textfield",
                "title" => __ ( 'Description', THEMENAME ),
                "description" => __ ( '', THEMENAME )
        ),
        'show_image' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show Image', THEMENAME ),
                "values" => array(
                        __ ( "Yes", "js_composer" ) => true
                ),
                "description" => __ ( 'Show or hide featured image on your Pricing.', THEMENAME )
        ),
        'category' => array(
                "type" => "pro_taxonomy",
                "taxonomy" => "pricing_category",
                "title" => __ ( "Categories", THEMENAME ),
                "description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME )
        ),
        'columns' => array(
                "type" => "dropdown",
                "title" => __ ( 'Columns', THEMENAME ),
                "values" => array(
                        "2 Columns" => "2",
                        "3 Columns" => "3",
                        "4 Columns" => "4"
                ),
                "description" => __ ( 'How many columns would you like to display on the Pricing Overview page?', THEMENAME )
        ),
        'show_title' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show title', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => true
                ),
                "description" => __ ( 'Show or hide title on your Pricing.', THEMENAME )
        ),
        'show_description' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show description', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => true
                ),
                "description" => __ ( 'Show or hide description on your Pricing.', THEMENAME )
        ),
        'orderby' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order by', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "Title" => "title",
                        "Date" => "date",
                        "ID" => "ID"
                ),
                "description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
        ),
        'order' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "ASC" => "ASC",
                        "DESC" => "DESC"
                ),
                "description" => __ ( 'Order ("None", "Asc", "Desc").', THEMENAME )
        ),
        'el_class' => array(
                "type" => "textfield",
                "title" => __ ( 'Extra class', THEMENAME ),
                "values" => '',
                "description" => __ ( 'Enter extra class for pricing style.', THEMENAME )
        )
        ),
    'title' => 'Pricing'
    );
$cs_shortcodes['cs-progressbar'] = array(
    'fields' => array(
        'title' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => __ ( "Title", THEMENAME ),
                "description" => ""
        ),
        'desc' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => __ ( "Description", THEMENAME ),
                "description" => ""
        ),
        'value' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => __ ( "Value", THEMENAME ),
                "description" => ""
        ),
        'label_value' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => __ ( "Label value", THEMENAME ),
                "description" => ""
        ),
        'icon' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => __ ( "Icon", THEMENAME ),
                "description" => ""
        ),
        'color' => array(
                "type" => "colorpicker",
                "title" => __ ( 'Color', THEMENAME ),
                "description" => ""
        ),
        'show_title' => array(
                "type" => "dropdown",
                "title" => __ ( 'Show Title', THEMENAME ),
                "values" => array(
                        "Show" => true,
                        "Hide" => false
                ),
                "description" => ''
        ),
        'vertical' => array(
                "type" => "checkbox",
                "title" => __ ( 'Vertical', THEMENAME ),
                "values" => array(
                        "Yes" => "false"
                ),
                "description" => ''
        ),
        'striped' => array(
                "type" => "checkbox",
                "title" => __ ( 'Striped', THEMENAME ),
                "values" => array(
                        "Yes" => "false"
                ),
                "description" => ''
        ),
        'animated' => array(
                "type" => "checkbox",
                "title" => __ ( 'Animated', THEMENAME ),
                "values" => array(
                        "Yes" => "true"
                ),
                "description" => 'Animate for Stripe'
        ),
        'right' => array(
                "type" => "checkbox",
                "title" => __ ( 'Right', THEMENAME ),
                "values" => array(
                        "Yes" => "true"
                ),
                "description" => ''
        ),
        'show_value' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show Value', THEMENAME ),
                "values" => array(
                        "Yes" => "true"
                ),
                "description" => ''
        ),
        'width' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => __ ( "Width", THEMENAME ),
                "description" => ""
        ),
        'height' => array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "title" => __ ( "Height", THEMENAME ),
                "description" => ""
        )
        ),
    'title' => 'Progress Bar'
    );
if (class_exists ( 'Woocommerce' )) {
$cs_shortcodes['cs-shop-carousel'] = array(
    'fields' => array(
        'title' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Title', THEMENAME ),
                    'value' => '',
                    "description" => __ ( 'The title of carousel featured product.', THEMENAME )
            ),
            'description' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Description', THEMENAME ),
                    "description" => __ ( '', THEMENAME, THEMENAME )
            ),
            'style' => array(
                    "type" => "dropdown",
                    "class" => "",
                    "title" => __ ( "Style", THEMENAME ),
                    "values" => array(
                            "Style 1" => "style1",
                            "Style 2" => "style2"
                    ),
                    "description" => __ ( "", THEMENAME )
            ),
            'category' => array(
                    "type" => "pro_taxonomy",
                    "taxonomy" => "product_cat",
                    "title" => __ ( "Categories", THEMENAME ),
                    "description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME )
            ),
            'width_item' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Width item', THEMENAME ),
                    "description" => __ ( 'Enter the width of item. Default: 150.', THEMENAME )
            ),
            'margin_item' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Margin item', THEMENAME ),
                    "description" => __ ( 'Enter the margin of item. Default: 20.', THEMENAME )
            ),
            'speed' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Speed', THEMENAME ),
                    "description" => __ ( 'Enter the speed of carousel. Default: 500.', THEMENAME )
            ),
            'rows' => array(
                    "type" => "dropdown",
                    "class" => "",
                    "title" => __ ( "Rows", THEMENAME ),
                    "values" => array(
                            "1 row" => "1",
                            "2 rows" => "2",
                            "3 rows" => "3",
                            "4 rows" => "4"
                    ),
                    "description" => __ ( "", THEMENAME )
            ),
            'auto_scroll' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Auto scroll', THEMENAME ),
                    "values" => array(
                            __ ( "Yes, please", THEMENAME ) => true
                    ),
                    "description" => __ ( 'Auto scroll.', THEMENAME )
            ),
            'show_nav' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Show Navigation', THEMENAME ),
                    "values" => array(
                            __ ( "Yes, please", THEMENAME ) => true
                    ),
                    "description" => __ ( 'Show or hide navigation.', THEMENAME )
            ),
            'show_title' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Show title', THEMENAME ),
                    "values" => array(
                            __ ( "Yes, please", "js_composer" ) => true
                    ),
                    "description" => __ ( 'Show or hide title on your Product.', THEMENAME )
            ),
            'show_category' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Show category', THEMENAME ),
                    "values" => array(
                            __ ( "Yes, please", "js_composer" ) => true
                    ),
                    "description" => __ ( 'Show or hide category on your Product.', THEMENAME )
            ),
            'show_price' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Show price', THEMENAME ),
                    "values" => array(
                            __ ( "Yes, please", "js_composer" ) => true
                    ),
                    "description" => __ ( 'Show or hide price on your Product.', THEMENAME )
            ),
            'show_add_to_cart' => array(
                    "type" => "checkbox",
                    "title" => __ ( 'Show add to cart', THEMENAME ),
                    "values" => array(
                            __ ( "Yes, please", "js_composer" ) => true
                    ),
                    "description" => __ ( 'Show or hide add to cart on your Product.', THEMENAME )
            ),
            'posts_per_page' => array(
                    "type" => "textfield",
                    "title" => __ ( 'Number of posts to show per page', THEMENAME ),
                    'value' => '12',
                    "description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', THEMENAME )
            ),
            'orderby' => array(
                    "type" => "dropdown",
                    "title" => __ ( 'Order by', THEMENAME ),
                    "values" => array(
                            "None" => "none",
                            "Title" => "title",
                            "Date" => "date",
                            "ID" => "ID"
                    ),
                    "description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
            ),
            'order' => array(
                    "type" => "dropdown",
                    "title" => __ ( 'Order', THEMENAME ),
                    "values" => array(
                            "None" => "none",
                            "Ascending" => "asc",
                            "Descending" => "desc"
                    ),
                    "description" => __ ( 'Order ("none", "asc", "desc").', THEMENAME )
            )
        ),
    'title' => 'Shop Carousel'
    );
}
$cs_shortcodes['cs-team'] = array(
    'fields' => array(
        'category'=> array(
                "type" => "pro_taxonomy",
                "taxonomy" => "team_category",
                "title" => __ ( "Categories", THEMENAME ),
                "description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME )
        ),
        'title' => array(
                "type" => "textfield",
                "title" => __ ( 'Title', THEMENAME ),
                "description" => __ ( 'Enter the Title', THEMENAME )
        ),
        'description' => array(
                "type" => "textfield",
                "title" => __ ( 'Description', THEMENAME ),
                "description" => __ ( 'Enter the description', THEMENAME )
        ),
        'posts_per_page' => array(
                "type" => "textfield",
                "class" => "",
                "title" => __ ( "Items Limit", THEMENAME ),
                "description" => __ ( "", THEMENAME )
        ),
        'columns' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Columns", THEMENAME ),
                "values" => array(
                        "1 Column" => "col-xs-12 col-sm-12 col-md-12 col-lg-12",
                        "2 Columns" => "col-xs-12 col-sm-6 col-md-6 col-lg-6",
                        "3 Columns" => "col-xs-12 col-sm-4 col-md-4 col-lg-4",
                        "4 Columns" => "col-xs-12 col-sm-3 col-md-3 col-lg-3"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'show_title' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show title', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide title on your Portfolio.', THEMENAME )
        ),
        'show_category' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show category', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide category on your Team.', THEMENAME )
        ),
        'show_description' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show description', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide description on your Portfolio.', THEMENAME )
        ),
        'show_socials' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show socials', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide socials on your Team.', THEMENAME )
        ),
        'excerpt_length' => array(
                "type" => "textfield",
                "title" => __ ( 'Excerpt Length', THEMENAME ),
                'value' => '300',
                "description" => __ ( 'The length of the excerpt, number of words to display. Set to "-1" for no excerpt.', THEMENAME )
        ),
        'read_more' => array(
                "type" => "textfield",
                "title" => __ ( 'Read More Text', THEMENAME ),
                "values" => 'Read More',
                "description" => __ ( 'Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
        ),
        'orderby' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order by', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "Title" => "title",
                        "Date" => "date",
                        "ID" => "ID"
                ),
                "description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
        ),
        'order' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "ASC" => "ASC",
                        "DESC" => "DESC"
                ),
                "description" => __ ( 'Order ("None", "Asc", "Desc").', THEMENAME )
        ),
        'layout' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Layout", THEMENAME ),
                "values" => array(
                        "Grid Homepage" => "style-1",
                        "Carousel" => "style-2",
                        "Team List" => "style-3"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'el_class' => array(
                "type" => "textfield",
                "title" => __ ( 'Custom Class', THEMENAME ),
                "description" => '',
                "admin_label" => true
        )
        ),
    'title' => 'Team'
    );
$cs_shortcodes['icon'] = array(
    'fields' => array(
        'type' => array(
            "type" => "textfield",
            "title" => "Type Icon",
            "title" => "Please enter the class icon from http://fortawesome.github.io/Font-Awesome/icons/. Ex: fa fa-bookmark-o.",
            ),
        'color' => array(
            "type" => "colorpicker",
            "title" => "Color",
            ),
        'link' => array(
            "type" => "textfield",
            "title" => "Link",
            ),
        'fontsize' => array(
            "type" => "textfield",
            "title" => "Font Size",
            ),
        'style' => array(
            "type" => "dropdown",
            "title" => "Style",
            "values" => array("Style 1" => "style1", "Style 2" => "style2"),
            ),
        'class' => array(
            "type" => "textfield",
            "title" => "Class",
            ),
        ),
    'title' => 'Icon'
    );
$cs_shortcodes['cs-shortcode-logo'] = array(
    'fields'=>array(
        'el_class' => array(
            "type" => "textfield",
            "title" => __("Extra class name", "js_composer"),
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        ),
        'logo_align' => array(
            "type" => "dropdown",
            "title" => __("Logo align", "js_composer"),
            "values" => array("Left" => "left", "Center" => "center", "Right" => "right"),
            "description" => 'Select your logo align.'
        )
        ),
    'title' => 'Logo'
    );
$custom_menus = array();
$menus = get_terms('nav_menu', array('hide_empty' => false));
if (is_array($menus)) {
    foreach ($menus as $single_menu) {
        $custom_menus[$single_menu->name] = $single_menu->term_id;
    }
}
$cs_shortcodes['cs-shortcode-menu'] = array(
    'fields' => array(
        'title' => array(
            "type" => "textfield",
            "title" => __('Title', THEMENAME),
            "description" => __('',THEMENAME)
        ),
        'nav_menu' => array(
            "type" => "dropdown",
            "title" => __("Menu", "js_composer"),
            "values" => $custom_menus,
            "description" => __(empty($custom_menus) ? "Custom menus not found. Please visit <b>Appearance > Menus</b> page to create new menu." : "Select menu", "js_composer"),
            "admin_label" => true
        ),
        'menu_align' => array(
            "type" => "dropdown",
            "title" => __("Menu align", "js_composer"),
            "values" => array("None" => "", "Left" => "left", "Center" => "center", "Right" => "right"),
            "description" => __('Select your menu align.', THEMENAME)
        ),
        'menu_line_height' => array(
            "type" => "textfield",
            "title" => __('Line height', THEMENAME),
            "values" => '80',
            "description" => __('',THEMENAME),
        ),
        'el_class' => array(
            "type" => "textfield",
            "title" => __("Extra class name", "js_composer"),
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
    ),
    'title' => 'Menu'
    );
$cs_shortcodes['cs-testimonial'] = array(
    'fields' => array(
        'category' => array(
                "type" => "pro_taxonomy",
                "taxonomy" => "testimonial_category",
                "title" => __ ( "Categories", THEMENAME ),
                "description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", THEMENAME )
        ),
        'title' => array(
                "type" => "textfield",
                "title" => __ ( 'Title', THEMENAME ),
                "description" => __ ( 'Enter the Title', THEMENAME )
        ),
        'description' => array(
                "type" => "textfield",
                "title" => __ ( 'Description', THEMENAME ),
                "description" => __ ( 'Enter the description', THEMENAME )
        ),
        'posts_per_page' => array(
                "type" => "textfield",
                "class" => "",
                "title" => __ ( "Items Limit", THEMENAME ),
                "description" => __ ( "", THEMENAME )
        ),
        'columns' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Columns", THEMENAME ),
                "values" => array(
                        "1 Column" => "col-xs-12 col-sm-12 col-md-12 col-lg-12",
                        "2 Columns" => "col-xs-12 col-sm-6 col-md-6 col-lg-6",
                        "3 Columns" => "col-xs-12 col-sm-4 col-md-4 col-lg-4",
                        "4 Columns" => "col-xs-12 col-sm-3 col-md-3 col-lg-3"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'show_title' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show title', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide title on your Portfolio.', THEMENAME )
        ),
        'show_category' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show category', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide category on your Team.', THEMENAME )
        ),
        'show_description' => array(
                "type" => "checkbox",
                "title" => __ ( 'Show description', THEMENAME ),
                "values" => array(
                        __ ( "Yes, please", "js_composer" ) => "true"
                ),
                "description" => __ ( 'Show or hide description on your Portfolio.', THEMENAME )
        ),
        'excerpt_length' => array(
                "type" => "textfield",
                "title" => __ ( 'Excerpt Length', THEMENAME ),
                'value' => '300',
                "description" => __ ( 'The length of the excerpt, number of words to display. Set to "-1" for no excerpt.', THEMENAME )
        ),
        'read_more' => array(
                "type" => "textfield",
                "title" => __ ( 'Read More Text', THEMENAME ),
                "values" => 'Read More',
                "description" => __ ( 'Enter desired text for the link or for no link, leave blank or set to \"-1\".', THEMENAME )
        ),
        'orderby' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order by', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "Title" => "title",
                        "Date" => "date",
                        "ID" => "ID"
                ),
                "description" => __ ( 'Order by ("none", "title", "date", "ID").', THEMENAME )
        ),
        'order' => array(
                "type" => "dropdown",
                "title" => __ ( 'Order', THEMENAME ),
                "values" => array(
                        "None" => "none",
                        "ASC" => "ASC",
                        "DESC" => "DESC"
                ),
                "description" => __ ( 'Order ("None", "Asc", "Desc").', THEMENAME )
        ),
        'layout' => array(
                "type" => "dropdown",
                "class" => "",
                "title" => __ ( "Layout", THEMENAME ),
                "values" => array(
                        "Style 1" => "style-1",
                        "Style 2" => "style-2"
                ),
                "description" => __ ( "", THEMENAME )
        ),
        'el_class' => array(
                "type" => "textfield",
                "title" => __ ( 'Custom Class', THEMENAME ),
                "description" => '',
                "admin_label" => true
        )
        ),
    'title' => 'Testimonial'
    );
?>