<?php
add_shortcode('cs-full-box', 'cs_full_box_render');
add_action('wp_enqueue_scripts','cs_full_box_css');
function cs_full_box_render($atts, $content = null) {
	extract(shortcode_atts(array(
	'style' => 'lily',
	'animate' => '',
	'heading_size' => 'h2',
	'crop_image' => false,
	'width_image'=>'300',
	'height_image'=>'200',
	'image' => '',
	'title' => '',
	'title_color'=>'',
	'link' => '#',
	'width' => '',
	'height' => '',
	'content_color'=>'',
	'content_limit'=>'',
	'read_more' => '',
	'custom_class' => ''
			), $atts));
	ob_start();

	$styles = array();
	if($title_color){
		$styles[] = 'color:'.$title_color.';';
	}
	$styles = cshero_build_style($styles);

	$styles_content = array();
	if($content_color){
		$styles_content[] = 'color:'.$content_color.';';
	}
	$styles_content = cshero_build_style($styles_content);

	$image_url = array();
	if (!empty($image)) {
		$image_url = wp_get_attachment_image_src($image, 'full');
	}
    if($crop_image == true && $image_url[0]){
    	$image_resize = matthewruddy_image_resize( $image_url[0], $width_image, $height_image, true, false );
    	$image_url[0] = $image_resize['url'];
    }
	?>
	<div class="cs-coverBoxs-grid <?php echo esc_attr($custom_class); ?>">
		<figure class="effect-<?php echo esc_attr($style); ?>">
			<img src="<?php if(count($image_url) > 0 ){ echo esc_url($image_url[0]);} ?>" alt="" />
			<figcaption>
				<div class="cs-fullBox-main">
					<div class="cs-fullBox-position">
						<<?php echo $heading_size;?> class="cs-coverBoxs-title" <?php echo $styles; ?>>
							<?php echo esc_attr($title); ?>
						</<?php echo $heading_size;?>>
						<div class="cs-coverBoxs-icon">
							<?php if($style == 'zoe'): ?>
								<span><i class="fa fa-heart-o"></i></span>
								<span><i class="fa fa-eye"></i></span>
								<span><i class="fa fa-paperclip"></i></span>
							<?php endif; ?>
						</div>
						<p class="cs-coverBoxs-content" <?php echo $styles_content; ?>><?php if($content_limit){ echo cshero_string_limit_words($content, $content_limit); } else { echo $content;}; ?></p>
						<a class="cs-coverBoxs-readmore" href="<?php echo esc_url($link); ?>"><?php echo _e('View more',THEMENAME);?></a>
					</div>
				</div>
			</figcaption>
		</figure>
	</div>
	<?php
	return ob_get_clean();
}
function cs_full_box_css() {
    wp_enqueue_style('full-box-component', get_template_directory_uri() . "/framework/shortcodes/fullbox/component.css",array(),"1.0.0");
}