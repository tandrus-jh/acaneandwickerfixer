<?php
add_shortcode('cs-event-carousel', 'cs_shortcode_event_carousel');
global $types;
function cs_shortcode_event_carousel($atts, $content = null) {
    global $post, $wp_query, $wpdb, $types;

    extract(shortcode_atts(array(
    'title' => '',
    'heading_size' =>'h3',
    'title_color' =>'',
    'subtitle' => '',
    'subtitle_heading_size'=>'h4',
    'description' => '',
    'category' => '',
    'styles'=> 1,
    'type' => 0,
    'crop_image' => false,
    'width_image' => 300,
    'height_image' => 200,
    'width_item' => 150,
    'margin_item' => 20,
    'auto_scroll' => false,
    'show_nav' => false,
    'same_height' => false,
    'show_title' => false,
    'show_date' => false,
    'show_description' => false,
    'excerpt_length' => 100,
    'read_more' => '',
    'rows' => 1,
    'posts_per_page' => 12,
    'orderby' => 'event_start_date',
    'order' => 'DESC',
    'el_class' => ''
        ), $atts));
        $types = $type;
        add_filter('posts_join','events_posts_join');
        add_filter('posts_fields', 'events_select_fields');
        add_filter('posts_where' , 'event_posts_where' );
        if (isset($category) && $category != '') {
            $cats = explode(',', $category);
            $category = array();
            foreach ((array) $cats as $cat) :
            $category[] = trim($cat);
            endforeach;
            $args = array(
                'posts_per_page' => $posts_per_page,
                'post_type' => 'event',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'event-categories',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'orderby' => $orderby,
                'order' => $order,
                'post_status' => 'publish'
            );
        }

        $wp_query = new WP_Query($args);

        $date = time() . '_' . uniqid(true);

        wp_register_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', 'jquery', '1.0', TRUE);
        wp_register_script('jm-bxslider', get_template_directory_uri() . '/js/jquery.jm-bxslider.js', 'jquery', '1.0', TRUE);

    	wp_enqueue_script('bxslider');
    	wp_enqueue_script('jm-bxslider');

        ob_start();

        $cl_show = '';
        if ($title != "" || $description != "") {
            $cl_show .= 'show-header';
        }
        if ($show_nav == true || $show_nav == 1) {
            $cl_show .= ' show-nav';
        }
        require get_template_directory()."/framework/shortcodes/eventscarousel/styles/style-1.php";
        wp_reset_postdata();wp_reset_query();
        remove_filter('posts_join','events_posts_join');
        remove_filter('posts_fields', 'events_select_fields');
        remove_filter('posts_where' , 'event_posts_where' );
        return ob_get_clean();
}
/*
 * Join Table Event
 */
function events_posts_join ($join) {
    global $wpdb;
    $posts_stats_table = $wpdb->prefix . "em_events";
    $posts_stats_view_join = "LEFT JOIN $posts_stats_table ON $wpdb->posts.ID = $posts_stats_table.post_id ";
    $join .= $posts_stats_view_join;
    return $join;
}
/*
 * Select Event.*
 */
function events_select_fields($fields){
    global $wpdb;
    $fields .= ", " . $wpdb->prefix . "em_events.*";
    return $fields;
}
/*
 *
 */
function event_posts_where( $where ) {
    global $wpdb,$types;
    switch ($types){
        case "0":
            $where .= "AND {$wpdb->prefix}em_events.event_end_date >= NOW()";
            break;
        case "1":
            $where .= "AND {$wpdb->prefix}em_events.event_start_date > NOW()";
            break;
        case "2":
            $where .= "AND {$wpdb->prefix}em_events.event_start_date <= NOW() AND {$wpdb->prefix}em_events.event_end_date >= NOW()";
            break;
        default:
            break;
    }

    return  $where;
}