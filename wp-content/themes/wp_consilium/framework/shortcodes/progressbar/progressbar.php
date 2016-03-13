<?php
add_shortcode ( 'cs-progressbar', 'cs_progressbar_render' );
add_action('wp_enqueue_scripts', 'cs_progressbar_css');
$progressbar_callback = 0;
function cs_progressbar_render($params, $content = null) {
	global $smof_data,$progressbar_callback;
	extract ( shortcode_atts ( array (
			'title' => '',
			'heading_size'=>'h3',
			'title_color'=>'',
			'show_title' =>'',
			'desc' => '',
			'desc_color'=>'',
			'value' => '50',
			'label_value'=>'',
			'icon' => '',
			'show_value' => '',
			'color' => '',
			'vertical' =>false,
			'striped' => '',
			'animated' => '',
			'stacked' => '',
			'right' => '',
			'height'=> '',
			'width' => '',
			'class' => '',
			'label' => ''
	), $params ) );

	wp_enqueue_script('prettify', get_template_directory_uri() . "/framework/shortcodes/progressbar/prettify.min.js",array(),"0.7.0");
	wp_enqueue_script('bootstrap-progressbar', get_template_directory_uri() . "/framework/shortcodes/progressbar/bootstrap-progressbar.min.js",array(),"0.7.0");
	wp_enqueue_script('waypoints',get_template_directory_uri().'/js/waypoints.min.js');

	wp_enqueue_script('cs-progressbar', get_template_directory_uri() . "/framework/shortcodes/progressbar/cs-progressbar.js",array(),"1.0.0");

	/* Title color */
	$title_style = array();
	if($title_color){
		$title_style[] = "color:$title_color;";
	}
	$title_style = cshero_build_style($title_style);

	/* Desc color */
	$desc_style = array();
	if($desc_color){
		$desc_style[] = "color:$desc_color;";
	}
	$desc_style = cshero_build_style($desc_style);

	/* defualt color */
	if(!$color){
		$color = $smof_data['primary_color'];
	}
	/* defualt width & height*/
	if($vertical){
		if(!$height){
			$height = '350px';
		}
		if(!$width){
			$width = '70px';
		}
	}

	$style = 'style="';
	if($height){
		$style .="min-height:$height;";
	}
	if($width){
		$style .="width:$width;";
	}
	$style .= '"';

	ob_start();
	?>
	<div id="cs-progress-<?php echo $progressbar_callback; ?>" class="cs-progress-item">
		<?php if($show_title): ?>
			<?php if(!$vertical): ?>
				<div class="cs-progress-title">
					<<?php echo $heading_size; ?>  class="title" <?php echo $title_style; ?>><i class="<?php echo $icon; ?>"></i> <?php echo $title; ?></<?php echo $heading_size; ?>>
				</div>
				<?php else : ?>
				<div class="cs-progress-title vertical">
					<<?php echo $heading_size; ?> class="title"><?php echo $title; ?></<?php echo $heading_size; ?>>
					<span class="<?php echo $icon; ?>"></span>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<div class="progress<?php if($vertical){ echo ' vertical bottom'; } ?><?php if($striped == true){ echo ' progress-striped'; if($animated){ echo ' active'; } } ?><?php if($right){ echo " pright"; } ?>" <?php echo $style; ?>>
	    	<div id="cs-progress-item-<?php echo $progressbar_callback; ?>" class="progress-bar" role="progressbar" aria-valuetransitiongoal="<?php echo $value; ?>" style="background-color: <?php echo $color; ?>;">
	    	<?php
	    	if($show_value){
	    	 	echo $value.$label_value;
	    	}
	     	?>
	    	</div>
		</div>
		<?php if(!$vertical && $desc): ?>
		<div class="cs-progress-desc">
			<span <?php echo $desc_style; ?>><em><?php echo esc_attr($desc); ?></em></span>
		</div>
		<?php endif; ?>
	</div>
	<?php
	$progressbar_callback++;
	return ob_get_clean();
}
function cs_progressbar_css(){
    wp_register_style('prettify', get_template_directory_uri() . "/framework/shortcodes/progressbar/prettify.min.css",array(),"0.7.0");
    wp_register_style('bootstrap-progressbar', get_template_directory_uri() . "/framework/shortcodes/progressbar/bootstrap-progressbar.min.css",array(),"0.7.0");
    wp_enqueue_style('prettify');
    wp_enqueue_style('bootstrap-progressbar');
}