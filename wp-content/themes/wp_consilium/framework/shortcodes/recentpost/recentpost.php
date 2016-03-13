<?php
/* --------------------------------------------------------------------- */
/* Shortcode Recent Post */
/* --------------------------------------------------------------------- */
add_shortcode('cs-shortcode-recent-post', 'cs_shortcode_recent_post_render');

function cs_shortcode_recent_post_render($atts, $content = null) {
    global $post, $wp_query, $post_option;

    extract(shortcode_atts(array(
                'title' => '',
                'description' => '',
                'type' => 'masonry',
                'category' => '',
                'excerpt_length' => 100,
                'show_title' => false,
                'show_category' => false,
                'show_date' => false,
                'columns' => 3,
                'heading' => 'h3',
                'crop_image' => false,
                'width_image' => 300,
                'height_image' => 200,
                'posts_per_page' => 12,
                'read_more' => '-1',
                'orderby' => 'date',
                'order' => 'desc',
                'layout' => 'style-1',
                'el_class' => ''
                    ), $atts));

    if ($posts_per_page == '' || $posts_per_page <= $columns) {
        $posts_per_page = $columns;
    }
    $date = time() . '_' . uniqid(true);
    $cs_massonry_layout='grid-layout';
    if($layout=='style-1'){
    	wp_enqueue_script('jquery-isotope-min-js', get_template_directory_uri() . "/js/jquery.isotope.min.js",array(),"2.0.0");
    	$cs_massonry_layout = 'cs-masonry-layout';
    }

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
                    'taxonomy' => 'category',
                    'field' => 'id',
                    'terms' => $category
                )
            ),
            'orderby' => $orderby,
            'order' => $order,
            'post_type' => 'post',
            'post_status' => 'publish'
        );
    } else {
        $args = array(
            'posts_per_page' => $posts_per_page,
            'orderby' => $orderby,
            'order' => $order,
            'post_type' => 'post',
            'post_status' => 'publish'
        );
    }

    $span = "col-xs-12 col-sm-4 col-md-4 col-lg-4";
    switch ($columns) {
		case 1:
            $span = "col-xs-12 col-sm-12 col-md-12 col-lg-12";
            break;
        case 2:
            $span = "col-xs-12 col-sm-6 col-md-6 col-lg-6";
            break;
		case 3:
            $span = "col-xs-12 col-sm-4 col-md-4 col-lg-4";
            break;
        case 4:
            $span = "col-xs-12 col-sm-3 col-md-3 col-lg-3";
            break;
        default:
            $span = "col-xs-12 col-sm-4 col-md-4 col-lg-4";
    }

    $post_option['excerpt_length'] = $excerpt_length;
    $post_option['show_title'] = $show_title;
    $post_option['show_category'] = $show_category;
    $post_option['show_date'] = $show_date;
    $post_option['crop_image'] = $crop_image;
    $post_option['width_image'] = $width_image;
    $post_option['height_image'] = $height_image;
    $post_option['read_more'] = $read_more;
    $post_option['heading'] = $heading;

    $wp_query = new WP_Query($args);
    ob_start();
    ?>
    <div id="cs_recent_post_<?php echo $date ?>" class="cs-recent-post <?php echo $cs_massonry_layout .' '.$layout;?> <?php echo esc_attr($el_class); ?>" data-columns="<?php echo $columns;?>" data-type="<?php echo $type;?>">
        <?php if ($title != "" || $description != "") { ?>
            <div class="cs-header">
                <?php if ($title != "") { ?>
                    <h4 class="cs-title"><?php echo $title; ?></h4>
                <?php } ?>
                <?php if ($description != "") { ?>
                    <p class="cs-desc"><?php echo $description; ?></p>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="cs-content">
            <?php if ($wp_query->have_posts()) { ?>
                <div class="cs-recent-post <?php echo isset($output)?$output:''; ?>">
                    <?php
                    $index = 1;
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                        ?>
                        <?php if ($index == 1) { ?>
                            <div class="row-fluid">
                            <?php } ?>
                            <div class="cs-recent-post-item cs-masonry-layout-item <?php echo esc_attr($span); ?>">
                                <div class="cs-recent-post-container">
                                    <?php
                                    if($layout == 'style-1'){
                                        get_template_part('framework/templates/blog/recentpost/blog',get_post_format());
                                    } elseif ($layout == 'style-2'){
                                        get_template_part('framework/templates/blog/recentpost/blog-popular-style-2');
                                    } elseif ($layout == 'style-3'){
                                        get_template_part('framework/templates/blog/recentpost/blog-popular-style-3');
                                    }
                                     ?>
                                </div>
                            </div>
                            <?php
                            if ($index + 1 > $columns) {
                                $index = 0;
                                ?>
                            </div>
                            <?php
                        }
                        $index++;
                        ?>
                    <?php endwhile; ?>
                </div>
            <?php } else { ?>
                <span class="notfound">No post found!</span>
            <?php } ?>
        </div>
    </div>

    <?php
    wp_reset_query();
    wp_reset_postdata();
    return ob_get_clean();
}
?>