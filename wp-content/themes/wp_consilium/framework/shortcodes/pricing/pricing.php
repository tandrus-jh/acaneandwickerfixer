<?php
add_shortcode('cs-pricing', 'cs_pricing_render');

function cs_pricing_render($atts, $content = null) {
	$use_pricing = 1;
	if($use_pricing == 1 || $use_pricing == true){
		global $post, $wp_query;
		extract(shortcode_atts(array(
		'title' => '',
		'heading_size'=>'',
		'title_color'=>'',
		'description' => '',
		'description_color'=>'',
		'layouts' => 'cs-pricing-table',
		'category' => '',
		'show_image'=>'',
		'columns' => 3,
		'orderby' => 'none',
		'order' => 'none',
		'el_class' => ''
				), $atts));

		$posts_per_page = 3;

		if ($columns != '') {
			$posts_per_page = $columns;
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
									'taxonomy' => 'pricing_category',
									'field' => 'id',
									'terms' => $category
							)
					),
					'orderby' => $orderby,
					'order' => $order,
					'post_type' => 'pricing',
					'post_status' => 'publish',
					'paged' => 1
			);
		} else {
			$args = array(
					'posts_per_page' => $posts_per_page,
					'orderby' => $orderby,
					'order' => $order,
					'post_type' => 'pricing',
					'post_status' => 'publish',
					'paged' => 1
			);
		}

		$width = "25%";
		switch ($columns) {
			case 2:
				$width = "50%";
				break;
			case 3:
				$width = "33.32%";
				break;
			default:
				$width = "25%";
				break;
		}
		$wp_query = new WP_Query($args);
		$date = time() . '_' . uniqid(true);

		$title_styles = array();
		if($title_color){
			$title_styles[] = 'color:'.$title_color.';';
		}
		$title_styles = cshero_build_style($title_styles);

		$desc_style = array();
		if($description_color){
			$desc_style[] = 'color:'.$description_color.';';
		}
		$desc_style = cshero_build_style($desc_style);

		ob_start();

		if ($wp_query->have_posts()) {
			?>
            <div id='cs_pricing_<?php echo esc_attr($date); ?>' class='cs-pricing <?php echo esc_attr($layouts) . ' ' . esc_attr($el_class); ?>'>
                <?php if ($title != "" || $description != "") { ?>
                    <div class="cs-header">
                        <?php if ($title != "") { ?>
                            <<?php echo $heading_size; ?> class="cs-title" <?php echo $title_styles; ?>><?php echo $title; ?></<?php echo $heading_size; ?>>
                        <?php } ?>
                        <?php if ($description != "") { ?>
                            <p class="cs-desc" <?php echo $desc_style; ?>><?php echo $description; ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="content">
                <?php
                while ($wp_query->have_posts()) {
                    $wp_query->the_post();
                    $custom = array();
                    $custom['best_value'] = $custom['is_feature'] = $custom['price'] = $custom['value'] = $custom['option_1'] = $custom['option_2'] = $custom['option_3'] = $custom['option_4'] = $custom['option_5'] = $custom['option_6'] = $custom['option_7'] = $custom['option_8'] = $custom['option_9'] = $custom['option_10'] = $custom['button_link'] = $custom['button_text'] = array();
                    $custom['best_value'][0] = '';
                    $custom['is_feature'][0] = '';
                    $custom['price'][0] = '';
                    $custom['value'][0] = '';
                    $custom['option_1'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['option_2'][0] = '';
                    $custom['button_text'][0] = '';
                    $custom['button_link'][0] = '';
                    $custom = array_merge($custom,get_post_custom($wp_query->post->ID));

                    $style = '';
                    if (has_post_thumbnail() && $show_image) {
                    	$attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
                    	$style =  " style='background-image: url(".esc_url($attachment_image[0]).");'";
                    }
                    ?>
                    <div class="cs-pricing-item<?php if($style != ''){ echo " cs-pricing-image"; } ?> <?php echo $custom['is_feature'][0] == 1 ? "cs-pricing-feature" : ""; ?>" style="float: left; width: <?php echo esc_attr($width); ?>;">
                        <div class="cs-pricing-container">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <h3 class="cs-pricing-title"><?php echo get_the_title(); ?></h3>
                                <?php if($custom['best_value'][0] != '') { ?>
                                    <div class ="cs-pricing-best-value">
                                        <span><?php echo $custom['best_value'][0]; ?></span>
                                    </div>
                                <?php } ?>
                                    <div class="cs-pricing-description">
                                        <dl class="loaded">
                                            <?php if($custom['price'][0] != '' || $custom['per_time'][0] != '') { ?>
                                            <div class="jmPrice" <?php echo $style; ?>>
                                                <?php if($custom['price'][0] != '') { ?>
                                                <div class="number"><span>$</span><?php echo $custom['price'][0] ?></div>
                                                <?php } ?>
                                                <?php if($custom['value'][0] != '') { ?>
                                                <small><?php echo $custom['value'][0] ?></small>
                                                <?php } ?>
                                            </div>
                                            <?php } ?>
                                            <?php if($custom['option_1'][0] != '') { ?>
                                            <dd class="odd"><?php echo $custom['option_1'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_2'][0] != '') { ?>
                                            <dd class="retail"><?php echo $custom['option_2'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_3'][0] != '') { ?>
                                            <dd class="odd"><?php echo $custom['option_3'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_4'][0] != '') { ?>
                                            <dd class="retail"><?php echo $custom['option_4'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_5'][0] != '') { ?>
                                            <dd class="cs-option-5"><?php echo $custom['option_5'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_6'][0] != '') { ?>
                                            <dd class="cs-option-6"><?php echo $custom['option_6'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_7'][0] != '') { ?>
                                            <dd class="cs-option-7"><?php echo $custom['option_7'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_8'][0] != '') { ?>
                                            <dd class="cs-option-8"><?php echo $custom['option_8'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_9'][0] != '') { ?>
                                            <dd class="cs-option-9"><?php echo $custom['option_9'][0] ?></dd>
                                            <?php } ?>
                                            <?php if($custom['option_10'][0] != '') { ?>
                                            <dd class="cs-option-10"><?php echo $custom['option_10'][0] ?></dd>
                                            <?php } ?>
                                        </dl>
                                    </div>
                                <div class="cs-pricing-button">
                                    <a title="<?php get_the_title() ?>" href="<?php echo esc_url($custom['button_link'][0]); ?>" rel="" class="btn btn-primary"><?php echo $custom['button_text'][0]; ?></a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
            </div>
        <?php } else { ?>
            <span class="notfound">No pricing found!</span>
            <?php
        }
        wp_reset_postdata();wp_reset_query();
        return ob_get_clean();
    }else{
        return '';
    }
}