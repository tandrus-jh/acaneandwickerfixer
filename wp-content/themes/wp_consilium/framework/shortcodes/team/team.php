<?php
add_shortcode('cs-team', 'cs_carousel_teams_render');
function cs_carousel_teams_render($atts, $content = null) {
        global $post, $wp_query,$team_options;
        extract(shortcode_atts(array(
                    'title' => '',
                    'description' => '',
                    'category' => '',
                    'auto_scroll' => false,
                    'show_nav' => false,
                    'show_link' => false,
                    'show_title' => false,
                    'show_category' => false,
                    'show_description' => false,
                    'show_socials' => false,
                    'read_more' => '',
                    'excerpt_length' => 100,
                    'crop_image' => false,
                    'width_image' => 200,
                    'height_image' => 200,
                    'width_item' => 150,
                    'margin_item' => 20,
                    'heading_size' => 'h3',
                    'speed' => 500,
                    'rows' => 1,
                    'posts_per_page' => 12,
                    'orderby' => 'none',
                    'order' => 'none',
                    'layout' => 'style-3',
                    'el_class' => ''
                        ), $atts));
        if (isset($category) && $category != '') {
            $cats = explode(',', $category);
            $category = array();
            foreach ((array) $cats as $cat) :
                $category[] = trim($cat);
            endforeach;
            $args = array(
                'posts_per_page' => $posts_per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'team_category',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'orderby' => $orderby,
                'order' => $order,
                'post_type' => 'team',
                'post_status' => 'publish'
            );
        } else {
            $args = array(
                'posts_per_page' => $posts_per_page,
                'orderby' => $orderby,
                'order' => $order,
                'post_type' => 'team',
                'post_status' => 'publish'
            );
        }
        $date = time() . '_' . uniqid(true);
        $team_options = array(
            'title' => $title,
            'description' => $description,
            'category' => $category,
            'auto_scroll' => $auto_scroll,
            'show_nav' => $show_nav,
            'show_link' => $show_link,
            'show_title' => $show_title,
            'show_category' => $show_category,
            'show_description' => $show_description,
            'heading_size' => $heading_size,
            'show_socials' => $show_socials,
            'read_more' => $read_more,
            'excerpt_length' => $excerpt_length,
            'crop_image' => $crop_image,
            'width_image' => $width_image,
            'height_image' => $height_image,
            'width_item' => $width_item,
            'margin_item' => $margin_item,
            'speed' => $speed,
            'rows' => $rows,
            'posts_per_page' => $posts_per_page,
            'orderby' => $orderby,
            'order' => $order,
            'layout' => $layout,
            'el_class' => $el_class,
            'date' => $date
        );
        $wp_query = new WP_Query($args);    
        ob_start();
        wp_register_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', 'jquery', '1.0', TRUE);
        wp_register_script('jm-bxslider', get_template_directory_uri() . '/js/jquery.jm-bxslider.js', 'jquery', '1.0', TRUE);
        wp_enqueue_script('bxslider');
        wp_enqueue_script('jm-bxslider');
        $cl_show = '';
        if ($title != "" || $description != "") {
            $cl_show .= 'show-header';
        }
        if ($show_nav == true || $show_nav == 1) {
            $cl_show .= ' show-nav';
        }
        ?>
        <div  id="cs_team<?php echo esc_attr($date); ?>" class="cs-team-<?php echo $layout;?> cs-team cs-carousel cs-carousel-team <?php echo esc_attr($cl_show) . ' ' . esc_attr($el_class); ?>">
            <?php
            get_template_part('framework/templates/team/team-'.$layout);
            ?>
        </div>
        <?php
        wp_reset_postdata();
        return ob_get_clean();
    
}
?>