<?php
add_shortcode('cs-shop-carousel', 'cs_shop_carousel_render');

function cs_shop_carousel_render($atts) {
        extract(shortcode_atts(array(
        'title' => '',
        'description' => '',
        'style' => 'style1',
        'category' => '',
        'width_item' => 150,
        'margin_item' => 20,
        'speed' => 500,
        'rows' => 1,
        'auto_scroll' => 'false',
        'show_nav' => false,
        'show_title' => false,
        'show_category' => false,
        'show_price' => false,
        'show_add_to_cart' => false,
        'posts_per_page' => -1,
        'orderby' => 'none',
        'order' => 'none'
                ), $atts));
        $args = array();
        if (isset($category) && $category != '') {
            $cats = explode(',', $category);
            $category = array();
            foreach ((array) $cats as $cat) :
            $category[] = trim($cat);
            endforeach;
            $args = array(
                    'posts_per_page' => $posts_per_page,
                    'post_type' => 'product',
                    'tax_query' => array(
                            array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'id',
                                    'terms' => $category
                            )
                    ),
                    'orderby' => $orderby,
                    'order' => $order,
                    'post_status' => 'publish'
            );
        }
        else{
            $args = array(
                    'posts_per_page' => $posts_per_page,
                    'post_type' => 'product',
                    'orderby' => $orderby,
                    'order' => $order,
                    'post_status' => 'publish'
            );
        }

        $products = new WP_Query($args);

        ob_start();
        $date = time() . '_' . uniqid(true);

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

        if ($products->have_posts()) :
        ob_start();
        ?>
            <div id="cs_carousel_product<?php echo esc_attr($date); ?>" class="cs-carousel cs-carousel-product <?php echo esc_attr($cl_show . ' ' . $style); ?> cs-shopcarousel-style-1-shop">
                <?php if ($title != "" || $description != "") { ?>
                <div class="cs-header">
                    <?php if ($title != "") { ?>
                        <h3 class="cs-title"><?php echo $title; ?></h3>
                    <?php } ?>
                    <?php if ($description != "") { ?>
                        <p class="cs-desc"><?php echo $description; ?></p>
                    <?php } ?>
                </div>
                <?php } ?>
                <div class="cs-content center">
                    <div class="cs-carousel-product-list">
                        <div id="cs_carousel_product_<?php echo esc_attr($date); ?>" data-moveslides="1" data-auto="<?php echo esc_attr($auto_scroll); ?>" data-prevselector="#cs_carousel_product<?php echo esc_attr($date); ?> .prev" data-nextselector="#cs_carousel_product<?php echo esc_attr($date); ?> .next"  data-touchenabled="1" data-controls="true" data-pager="false" data-pause="4000" data-infiniteloop="true" data-adaptiveheight="true" data-speed="<?php echo esc_attr($speed); ?>" data-autohover="true" data-slidemargin="<?php echo esc_attr($margin_item); ?>" data-maxslides="4" data-minslides="1" data-slidewidth="<?php echo esc_attr($width_item);?>" data-slideselector="" data-easing="swing" data-usecss="" data-resize="1" class="slider jm-bxslider">
                            <?php
                                $counter = 0;
                                while ($products->have_posts()) : $products->the_post();
                                $counter++;
                                ?>
                                <?php
                                global $product;

                                // Ensure visibility
                                if (!$product || !$product->is_visible())
                                    return;

                                // Extra post classes
                                $classes = array();

                                $classes[] = 'cs-carousel-item-wrap';
                                if($rows == 1){
                                    echo '<div class="cs-carousel-item-full">';
                                }else{
                                    if($counter % $rows == 1){
                                        echo '<div class="cs-carousel-item-full">';
                                    }
                                }

                                ?>
                                <div <?php post_class($classes); ?> <?php if(!$counter % $rows == 0) echo 'style="margin-bottom:'.$margin_item.'px;"'; ?>>
                                    <div class="cs-carousel-item">
                                    <?php do_action('woocommerce_before_shop_loop_item'); ?>
                                    <div class="woo-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            do_action('woocommerce_before_shop_loop_item_title');
                                            ?>
                                        </a>
                                    </div>
                                    <div class="woo-category">
                                        <?php if ($show_category == true || $show_category == 1): ?>
                                            <?php
                                            $postid = get_the_ID();
                                            $categories = get_the_term_list($postid, 'product_cat', '', ', ', '');
                                            ?>
                                            <span><?php print_r($categories); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    </div>
                                    <div class="woo-title-price">
                                        <div class="woo-title">
                                            <?php if ($show_title == true || $show_title == 1): ?>
                                                <?php the_title(); ?>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($show_price == true || $show_price == 1): ?>
                                            <div class="woo-price">
                                                <?php
                                                do_action('woocommerce_after_shop_loop_item_title');
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="woo-view-detail">
                                            <a class="btn view-detail" rel="" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span>View Detail</span></a>
                                        </div>
                                        <?php if ($show_add_to_cart == true || $show_add_to_cart == 1): ?>
                                        <div class="woo-add-to-cart">
                                            <?php do_action( 'woocommerce_after_shop_loop_item' );   ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php
                            if($rows == 1){
                                echo '</div>';
                            }else{
                                if($counter % $rows == 0){
                                    echo '</div>';
                                }
                            }
                            endwhile; // end of the loop.
                            ?>
                        </div>
                    </div>

                    <?php if ($show_nav == true || $show_nav == 1) { ?>
                    <div class="cs-nav">
                        <ul>
                            <li class="prev"></li>
                            <li class="next"></li>
                        </ul>
                    </div>
                    <?php } ?>

                </div>
            </div>
        <?php endif; ?>
        <?php
        wp_reset_postdata();
        return '<div class="woocommerce">' . ob_get_clean() . '</div>';
}