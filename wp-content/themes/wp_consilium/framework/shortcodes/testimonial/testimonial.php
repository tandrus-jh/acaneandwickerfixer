<?php
/* --------------------------------------------------------------------- */
/* Shortcode Testimonial */
/* --------------------------------------------------------------------- */
add_shortcode('cs-testimonial', 'cshero_testimonial_render');

function cshero_testimonial_render($atts, $content = null) {
        global $post, $wp_query, $testimonial_options;
        extract(shortcode_atts(array(
                    'title' => '',
                    'description' => '',
                    'show_title' => true,
                    'margin_item' => '20',
                    'width_item' => '200',
                    'speed' => '500',
                    'show_description' => true,
                    'show_socials' => true,
                    'category' => '',
                    'auto_scroll' => 'false',
                    'show_category' => false,
                    'show_nav' => false,
                    'read_more' => '',
                    'excerpt_length' => 300,
                    'crop_image' => false,
                    'width_image' => 300,
                    'height_image' => 300,
                    'posts_per_page' => 12,
                    'orderby' => 'none',
                    'order' => 'none',
                    'el_class' => '',
                    'layout' => ''
                        ), $atts));
        $date = time() . '_' . uniqid(true);
        $testimonial_options = array(
            'title' => $title,
            'description' => $description,
            'show_title' => $show_title,
            'margin_item' => $margin_item,
            'width_item' => $width_item,
            'speed' => $speed,
            'show_description' => $show_description,
            'show_socials' => $show_socials,
            'category' => $category,
            'show_category' => $show_category,
            'read_more' => $read_more,
            'excerpt_length' => $excerpt_length,
            'crop_image' => $crop_image,
            'width_image' => $width_image,
            'show_nav' => $show_nav,
            'height_image' => $height_image,
            'posts_per_page' => $posts_per_page,
            'orderby' => $orderby,
            'order' => $order,
            'el_class' => $el_class,
            'layout' => $layout,
            'date' => $date
        );
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
                        'taxonomy' => 'testimonial_category',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'orderby' => $orderby,
                'order' => $order,
                'post_type' => 'testimonial',
                'post_status' => 'publish'
            );
        } else {
            $args = array(
                'posts_per_page' => $posts_per_page,
                'orderby' => $orderby,
                'order' => $order,
                'post_type' => 'testimonial',
                'post_status' => 'publish'
            );
        }

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
        ?>
        <div id="cs_testimonial<?php echo esc_attr($date); ?>" class="cs-testimonial-<?php echo $layout;?> cs-testimonial clearfix <?php echo esc_attr($cl_show) . ' ' . esc_attr($el_class); ?>">
            <?php
            get_template_part('framework/templates/testimonial/testimonial-'.$layout);
            ?>
        </div>
        <?php
        wp_reset_postdata();
        return ob_get_clean();
}

?>