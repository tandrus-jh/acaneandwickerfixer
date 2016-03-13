<?php
add_shortcode('cs-carousel-clients', 'cs_carousel_clients_render');
function cs_carousel_clients_render($atts, $content = null) {
        global $post, $wp_query;
        extract(shortcode_atts(array(
                    'title' => '',
                    'description' => '',
                    'category' => '',
                    'auto_scroll' => 'false',
                    'show_nav' => false,
                    'show_link' => false,
                    'crop_image' => false,
                    'width_image' => 200,
                    'height_image' => 200,
                    'width_item' => 150,
                    'margin_item' => 20,
                    'speed' => 500,
                    'rows' => 1,
                    'posts_per_page' => 12,
                    'orderby' => 'none',
                    'order' => 'none',
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
                        'taxonomy' => 'clientscategory',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'orderby' => $orderby,
                'order' => $order,
                'post_type' => 'myclients',
                'post_status' => 'publish'
            );
        } else {
            $args = array(
                'posts_per_page' => $posts_per_page,
                'orderby' => $orderby,
                'order' => $order,
                'post_type' => 'myclients',
                'post_status' => 'publish'
            );
        }
        $wp_query = new WP_Query($args);
        $date = time() . '_' . uniqid(true);
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
        <div  id="cs_carousel_client<?php echo esc_attr($date); ?>" class="cs-carousel cs-carousel-client <?php echo esc_attr($cl_show) . ' ' . esc_attr($el_class); ?>">
            <?php if ($title != "" || $description != "") { ?>
                <div class="cs-header">
                    <?php if ($title != "") { ?>
                    <h3 class="cs-title"><?php echo $title; ?></h3>
                    <?php } ?>
                    <?php if ($description != "") { ?>
                        <p class="cs-decs"><?php echo $description; ?></p>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="cs-content">
                <div class="cs-carousel-list">
                    <div id="cs_carousel_client_<?php echo esc_attr($date); ?>" data-moveslides="1" data-auto="<?php echo esc_attr($auto_scroll); ?>" data-prevselector="#cs_carousel_client<?php echo esc_attr($date); ?> .prev" data-nextselector="#cs_carousel_client<?php echo $date; ?> .next" data-touchenabled="1" data-controls="true" data-pager="false" data-pause="4000" data-infiniteloop="true" data-adaptiveheight="true" data-speed="<?php echo esc_attr($speed); ?>" data-minSlides="6" data-maxSlides="6" data-autohover="true" data-slidemargin="<?php echo esc_attr($margin_item); ?>" data-slidewidth="<?php echo esc_attr($width_item);?>" data-slideselector="" data-easing="swing" data-usecss="" data-resize="1" class="slider jm-bxslider">
                       <?php
                        $counter =0;
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                        $counter++;
                        if($rows == 1){
                                echo '<div class="cs-carousel-item-wrap">';
                            }else{
                                if($counter % $rows == 1){
                                    echo '<div class="cs-carousel-item-wrap">';
                                }
                            }
                        ?>
                        <div class="cs-carousel-item" <?php if(!$counter % $rows == 0) echo 'style="margin-bottom:'.esc_attr($margin_item).'px;"'; ?>>
                           <div id="post-<?php the_ID(); ?>" <?php  post_class(); ?>>
                               <div class="cs-carousel-container">
                                    <?php
                                    $custom = get_post_custom($post->ID);
                                    $client_link = "#";
                                    if(get_post_meta($post->ID, 'cs_client_link', true)){
                                        $client_link = get_post_meta($post->ID, 'cs_client_link', true);
                                    }
                                    if (has_post_thumbnail()) {
                                        $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
                                        if($crop_image == true || $crop_image == 1){
                                            $image_resize = matthewruddy_image_resize( $attachment_image[0], $width_image, $height_image, true, false );
                                            if($show_link == 1 || $show_link == true){
                                                echo '<a href="' . esc_url($client_link) . '"><img class="attachment-featuredImageCropped" src="'. esc_attr($image_resize['url']) .'" /></a>';
                                            }else{
                                                echo '<img class="attachment-featuredImageCropped" alt="" src="'. esc_attr($image_resize['url']) .'" />';
                                            }
                                        }else{
                                            if($show_link == 1 || $show_link == true){
                                                echo '<a href="' . esc_url($client_link) . '"><img alt="" src="' . esc_attr($attachment_image[0]) . '" /></a>';
                                            }else{
                                                echo '<img alt="" src="' . esc_attr($attachment_image[0]) . '" />';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                           </div>
                        </div>
                        <?php
                        if($rows == 1){
                            echo '</div>';
                        }else{
                            if(($counter % $rows == 0)||($counter==$wp_query->post_count)){
                                echo '</div>';
                            }
                        }
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
                <?php if($show_nav == true || $show_nav == 1){ ?>
                <div class="cs-nav">
                    <ul>
                        <li class="prev"></li>
                        <li class="next"></li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
        wp_reset_postdata();
        return ob_get_clean();

}
?>