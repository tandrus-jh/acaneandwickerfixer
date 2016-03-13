<?php

class WC_Theme_Demo_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'ww_theme_demo_widget', // Base ID
            __('CONSILIUM THEME DEMOS', THEMENAME), // Name
            array('description' => __('Theme Demo Widget', THEMENAME),) // Args
        );
    }
    
    function widget($args, $instance) {
        
        extract($args);

        $title = apply_filters('widget_title', empty($instance['title']) ? __('CONSILIUM THEME DEMOS', THEMENAME ) : $instance['title'], $instance, $this->id_base);
        
        $link_custom1 = isset($instance['link_custom1']) ? $instance['link_custom1'] : '#';
        $image_url1 = isset($instance['image_url1']) ? $instance['image_url1'] : '';
        $text1 = isset($instance['text1']) ? $instance['text1'] : '';
		
		$link_custom2 = isset($instance['link_custom2']) ? $instance['link_custom2'] : '#';
        $image_url2 = isset($instance['image_url2']) ? $instance['image_url2'] : '';
        $text2 = isset($instance['text2']) ? $instance['text2'] : '';
		
		$link_custom3 = isset($instance['link_custom3']) ? $instance['link_custom3'] : '#';
        $image_url3 = isset($instance['image_url3']) ? $instance['image_url3'] : '';
        $text3 = isset($instance['text3']) ? $instance['text3'] : '';
        
		$link_custom4 = isset($instance['link_custom4']) ? $instance['link_custom4'] : '#';
		$image_url4 = isset($instance['image_url4']) ? $instance['image_url4'] : '';
		$text4 = isset($instance['text4']) ? $instance['text4'] : '';
		
		$link_custom5 = isset($instance['link_custom5']) ? $instance['link_custom5'] : '#';
		$image_url5 = isset($instance['image_url5']) ? $instance['image_url5'] : '';
		$text5 = isset($instance['text5']) ? $instance['text5'] : '';
		
		$link_custom6 = isset($instance['link_custom6']) ? $instance['link_custom6'] : '#';
		$image_url6 = isset($instance['image_url6']) ? $instance['image_url6'] : '';
		$text6 = isset($instance['text6']) ? $instance['text6'] : '';
		
		$link_custom7 = isset($instance['link_custom7']) ? $instance['link_custom7'] : '#';
		$image_url7 = isset($instance['image_url7']) ? $instance['image_url7'] : '';
		$text7 = isset($instance['text7']) ? $instance['text7'] : '';
		
		$link_custom8 = isset($instance['link_custom8']) ? $instance['link_custom8'] : '#';
		$image_url8 = isset($instance['image_url8']) ? $instance['image_url8'] : '';
		$text8 = isset($instance['text8']) ? $instance['text8'] : '';
		
		$link_custom9 = isset($instance['link_custom9']) ? $instance['link_custom9'] : '#';
		$image_url9 = isset($instance['image_url9']) ? $instance['image_url9'] : '';
		$text9 = isset($instance['text9']) ? $instance['text9'] : '';
		
		$link_custom10 = isset($instance['link_custom10']) ? $instance['link_custom10'] : '#';
		$image_url10 = isset($instance['image_url10']) ? $instance['image_url10'] : '';
		$text10 = isset($instance['text10']) ? $instance['text10'] : '';
		
		$desc = isset($instance['desc']) ? $instance['desc'] : 'All Demo Settings And Content Can Be Imported';
        
		$extra_class = !empty($instance['extra_class']) ? $instance['extra_class'] : "";
		
        // no 'class' attribute - add one with the value of width
        if( strpos($before_widget, 'class') === false ) {
            $before_widget = str_replace('>', 'class="'. $extra_class . '"', $before_widget);
        }
        // there is 'class' attribute - append width value to it
        else {
            $before_widget = str_replace('class="', 'class="'. $extra_class . ' ', $before_widget);
        }

        echo $before_widget.'<div class="ww-widget-inner">';
			echo '<div class="ww-images-preview"><div class="ww-theme-demo">';
				echo '<div class="ww-header">';
					echo $before_title . 'Consilium <br/> THEME DEMOS <span class="ww-arrow">
										<i class="fa fa-chevron-up"></i>
										<i class="fa fa-chevron-down"></i>
										</span>' . $after_title;
				echo '</div>';
				echo '<div class="ww-preview" style="display: none;">
						<img alt="" src="">
						<p>'.$desc.'</p>
					 </div>';
				echo '<div class="ww-content">';
					echo '<ul id="ww_scroll" class="ww-list" style="display: none;">';
						if($image_url1 != ''){
						echo '<li data-image="'.esc_url($image_url1).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url1).'">
									<div class="ww-desc">
										<p>'.$text1.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom1).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   } 
					   if($image_url2 != ''){
						echo '<li data-image="'.esc_url($image_url2).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url2).'">
									<div class="ww-desc">
										<p>'.$text2.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom2).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   } 
					   if($image_url3 != ''){
						echo '<li data-image="'.esc_url($image_url3).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url3).'">
									<div class="ww-desc">
										<p>'.$text3.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom3).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   } 
					   if($image_url4 != ''){
						echo '<li data-image="'.esc_url($image_url4).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url4).'">
									<div class="ww-desc">
										<p>'.$text4.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom4).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   } 
					   if($image_url5 != ''){
						echo '<li data-image="'.esc_url($image_url5).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url5).'">
									<div class="ww-desc">
										<p>'.$text5.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom5).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   } 
					   if($image_url6 != ''){
						echo '<li data-image="'.esc_url($image_url6).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url6).'">
									<div class="ww-desc">
										<p>'.$text6.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom6).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   }
					   if($image_url7 != ''){
						echo '<li data-image="'.esc_url($image_url7).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url7).'">
									<div class="ww-desc">
										<p>'.$text7.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom7).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   }
					   if($image_url8 != ''){
						echo '<li data-image="'.esc_url($image_url8).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url8).'">
									<div class="ww-desc">
										<p>'.$text8.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom8).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   }
					   if($image_url9 != ''){
						echo '<li data-image="'.esc_url($image_url9).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url9).'">
									<div class="ww-desc">
										<p>'.$text9.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom9).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   }
					   if($image_url10 != ''){
						echo '<li data-image="'.esc_url($image_url10).'">
								<div class="ww-image">
									<img alt="" src="'.esc_url($image_url10).'">
									<div class="ww-desc">
										<p>'.$text10.'</p>
										<a class="ww-link" target="_blank" href="'.esc_url($link_custom10).'">VIEW DEMO</a>
									</div>
								</div>
							 </li>';
					   }
					echo '</ul>';
				echo '</div>';
			echo '</div></div>';
        echo '</div>'.$after_widget;
		echo '<sc'.'ript>
				jQuery( document ).ready(function() {
					
					jQuery( ".ww-arrow" ).click(function() {
						jQuery( ".ww-theme-demo .ww-list" ).slideToggle(500);
						jQuery( ".ww-images-preview" ).toggleClass("open");
					});
					jQuery( ".ww-theme-demo .ww-list li" ).mouseenter(function() {
						var data_img = jQuery( this ).attr( "data-image" );
						jQuery( ".ww-preview img" ).attr( "src", data_img );
						jQuery( ".ww-preview" ).stop(true).show(500);
					});	
					jQuery( ".ww-theme-demo .ww-list li" ).mouseleave(function() {
						jQuery( ".ww-preview" ).stop(true).hide(500);
					});	
				});
			 </script>';
		
		 wp_enqueue_style( 'theme-demo', get_template_directory_uri() . '/framework/widgets/ww_theme_demo.css' );

    }
    
    function update( $new_instance, $old_instance ) {
         $instance = $old_instance;
         $instance['title'] = strip_tags($new_instance['title']);
         
         $instance['link_custom1'] = strip_tags($new_instance['link_custom1']);
         $instance['image_url1'] = strip_tags($new_instance['image_url1']);
         $instance['text1'] = strip_tags($new_instance['text1']);
		 
		 $instance['link_custom2'] = strip_tags($new_instance['link_custom2']);
         $instance['image_url2'] = strip_tags($new_instance['image_url2']);
         $instance['text2'] = strip_tags($new_instance['text2']);
		 
		 $instance['link_custom3'] = strip_tags($new_instance['link_custom3']);
         $instance['image_url3'] = strip_tags($new_instance['image_url3']);
         $instance['text3'] = strip_tags($new_instance['text3']);
		 
		 $instance['link_custom4'] = strip_tags($new_instance['link_custom4']);
         $instance['image_url4'] = strip_tags($new_instance['image_url4']);
         $instance['text4'] = strip_tags($new_instance['text4']);
		 
		 $instance['link_custom5'] = strip_tags($new_instance['link_custom5']);
         $instance['image_url5'] = strip_tags($new_instance['image_url5']);
         $instance['text5'] = strip_tags($new_instance['text5']);
		 
		 $instance['link_custom6'] = strip_tags($new_instance['link_custom6']);
         $instance['image_url6'] = strip_tags($new_instance['image_url6']);
         $instance['text6'] = strip_tags($new_instance['text6']);
		 
		 $instance['link_custom7'] = strip_tags($new_instance['link_custom7']);
         $instance['image_url7'] = strip_tags($new_instance['image_url7']);
         $instance['text7'] = strip_tags($new_instance['text7']);
		 
		 $instance['link_custom8'] = strip_tags($new_instance['link_custom8']);
         $instance['image_url8'] = strip_tags($new_instance['image_url8']);
         $instance['text8'] = strip_tags($new_instance['text8']);
		 
		 $instance['link_custom9'] = strip_tags($new_instance['link_custom9']);
         $instance['image_url9'] = strip_tags($new_instance['image_url9']);
         $instance['text9'] = strip_tags($new_instance['text9']);
		 
		 $instance['link_custom10'] = strip_tags($new_instance['link_custom10']);
         $instance['image_url10'] = strip_tags($new_instance['image_url10']);
         $instance['text10'] = strip_tags($new_instance['text10']);
		 
         $instance['desc'] = strip_tags($new_instance['desc']);         
		 $instance['extra_class'] = $new_instance['extra_class'];
         
         return $instance;
    }
    
    function form( $instance ) {
         $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
         
         $link_custom1 = isset($instance['link_custom1']) ? esc_attr($instance['link_custom1']) : '';
         $image_url1 = isset($instance['image_url1']) ? esc_attr($instance['image_url1']) : '';
         $text1 = isset($instance['text1']) ? esc_attr($instance['text1']) : '';
         
		 $link_custom2 = isset($instance['link_custom2']) ? esc_attr($instance['link_custom2']) : '';
         $image_url2 = isset($instance['image_url2']) ? esc_attr($instance['image_url2']) : '';
         $text2 = isset($instance['text2']) ? esc_attr($instance['text2']) : '';
		 
		 $link_custom3 = isset($instance['link_custom3']) ? esc_attr($instance['link_custom3']) : '';
         $image_url3 = isset($instance['image_url3']) ? esc_attr($instance['image_url3']) : '';
         $text3 = isset($instance['text3']) ? esc_attr($instance['text3']) : '';
		 
		 $link_custom4 = isset($instance['link_custom4']) ? esc_attr($instance['link_custom4']) : '';
         $image_url4 = isset($instance['image_url4']) ? esc_attr($instance['image_url4']) : '';
         $text4 = isset($instance['text4']) ? esc_attr($instance['text4']) : '';
		 
		 $link_custom5 = isset($instance['link_custom5']) ? esc_attr($instance['link_custom5']) : '';
         $image_url5 = isset($instance['image_url5']) ? esc_attr($instance['image_url5']) : '';
         $text5 = isset($instance['text5']) ? esc_attr($instance['text5']) : '';
		 
		 $link_custom6 = isset($instance['link_custom6']) ? esc_attr($instance['link_custom6']) : '';
         $image_url6 = isset($instance['image_url6']) ? esc_attr($instance['image_url6']) : '';
         $text6 = isset($instance['text6']) ? esc_attr($instance['text6']) : '';
		 
		 $link_custom7 = isset($instance['link_custom7']) ? esc_attr($instance['link_custom7']) : '';
         $image_url7 = isset($instance['image_url7']) ? esc_attr($instance['image_url7']) : '';
         $text7 = isset($instance['text7']) ? esc_attr($instance['text7']) : '';
		 
		 $link_custom8 = isset($instance['link_custom8']) ? esc_attr($instance['link_custom8']) : '';
         $image_url8 = isset($instance['image_url8']) ? esc_attr($instance['image_url8']) : '';
         $text8 = isset($instance['text8']) ? esc_attr($instance['text8']) : '';
		 
		 $link_custom9 = isset($instance['link_custom9']) ? esc_attr($instance['link_custom9']) : '';
         $image_url9 = isset($instance['image_url9']) ? esc_attr($instance['image_url9']) : '';
         $text9 = isset($instance['text9']) ? esc_attr($instance['text9']) : '';
		 
		 $link_custom10 = isset($instance['link_custom10']) ? esc_attr($instance['link_custom10']) : '';
         $image_url10 = isset($instance['image_url10']) ? esc_attr($instance['image_url10']) : '';
         $text10 = isset($instance['text10']) ? esc_attr($instance['text10']) : '';
		 
		 $desc = isset($instance['desc']) ? esc_attr($instance['desc']) : '';         
		 $extra_class = isset($instance['extra_class']) ? esc_attr($instance['extra_class']) : '';
		 ?>
         <p><label for="<?php echo esc_url($this->get_field_id('title')); ?>"><?php _e( 'Title:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>
         
         <p><label for="<?php echo esc_url($this->get_field_id('link_custom1')); ?>"><?php _e( 'Link Custom 1:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom1') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom1') ); ?>" type="text" value="<?php echo esc_attr( $link_custom1 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url1')); ?>"><?php _e( 'Image Url 1:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url1') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url1') ); ?>" type="text" value="<?php echo esc_attr( $image_url1 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text1')); ?>"><?php _e( 'Title Text 1:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text1') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text1') ); ?>" type="text" value="<?php echo esc_attr( $text1 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom2')); ?>"><?php _e( 'Link Custom 2:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom2') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom2') ); ?>" type="text" value="<?php echo esc_attr( $link_custom2 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url2')); ?>"><?php _e( 'Image Url 2:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url2') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url2') ); ?>" type="text" value="<?php echo esc_attr( $image_url2 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text2')); ?>"><?php _e( 'Title Text 2:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text2') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text2') ); ?>" type="text" value="<?php echo esc_attr( $text2 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom3')); ?>"><?php _e( 'Link Custom 3:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom3') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom3') ); ?>" type="text" value="<?php echo esc_attr( $link_custom3 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url3')); ?>"><?php _e( 'Image Url 3:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url3') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url3') ); ?>" type="text" value="<?php echo esc_attr( $image_url3 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text3')); ?>"><?php _e( 'Title Text 3:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text3') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text3') ); ?>" type="text" value="<?php echo esc_attr( $text3 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom4')); ?>"><?php _e( 'Link Custom 4:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom4') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom4') ); ?>" type="text" value="<?php echo esc_attr( $link_custom4 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url4')); ?>"><?php _e( 'Image Url 4:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url4') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url4') ); ?>" type="text" value="<?php echo esc_attr( $image_url4 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text4')); ?>"><?php _e( 'Title Text 4:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text4') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text4') ); ?>" type="text" value="<?php echo esc_attr( $text4 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom5')); ?>"><?php _e( 'Link Custom 5:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom5') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom5') ); ?>" type="text" value="<?php echo esc_attr( $link_custom5 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url5')); ?>"><?php _e( 'Image Url 5:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url5') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url5') ); ?>" type="text" value="<?php echo esc_attr( $image_url5 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text5')); ?>"><?php _e( 'Title Text 5:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text5') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text5') ); ?>" type="text" value="<?php echo esc_attr( $text5 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom6')); ?>"><?php _e( 'Link Custom 6:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom6') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom6') ); ?>" type="text" value="<?php echo esc_attr( $link_custom6 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url6')); ?>"><?php _e( 'Image Url 6:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url6') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url6') ); ?>" type="text" value="<?php echo esc_attr( $image_url6 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text6')); ?>"><?php _e( 'Title Text 6:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text6') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text6') ); ?>" type="text" value="<?php echo esc_attr( $text6 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom7')); ?>"><?php _e( 'Link Custom 7:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom7') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom7') ); ?>" type="text" value="<?php echo esc_attr( $link_custom7 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url7')); ?>"><?php _e( 'Image Url 7:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url7') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url7') ); ?>" type="text" value="<?php echo esc_attr( $image_url7 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text7')); ?>"><?php _e( 'Title Text 7:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text7') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text7') ); ?>" type="text" value="<?php echo esc_attr( $text7 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom8')); ?>"><?php _e( 'Link Custom 8:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom8') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom8') ); ?>" type="text" value="<?php echo esc_attr( $link_custom8 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url8')); ?>"><?php _e( 'Image Url 8:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url8') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url8') ); ?>" type="text" value="<?php echo esc_attr( $image_url8 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text8')); ?>"><?php _e( 'Title Text 8:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text8') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text8') ); ?>" type="text" value="<?php echo esc_attr( $text8 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom9')); ?>"><?php _e( 'Link Custom 9:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom9') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom9') ); ?>" type="text" value="<?php echo esc_attr( $link_custom9 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url9')); ?>"><?php _e( 'Image Url 9:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url9') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url9') ); ?>" type="text" value="<?php echo esc_attr( $image_url9 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text9')); ?>"><?php _e( 'Title Text 9:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text9') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text9') ); ?>" type="text" value="<?php echo esc_attr( $text9 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('link_custom10')); ?>"><?php _e( 'Link Custom 10:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('link_custom10') ); ?>" name="<?php echo esc_attr( $this->get_field_name('link_custom10') ); ?>" type="text" value="<?php echo esc_attr( $link_custom10 ); ?>" /></p>
         <p><label for="<?php echo esc_url($this->get_field_id('image_url10')); ?>"><?php _e( 'Image Url 10:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('image_url10') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_url10') ); ?>" type="text" value="<?php echo esc_attr( $image_url10 ); ?>" /></p>
		 <p><label for="<?php echo esc_url($this->get_field_id('text10')); ?>"><?php _e( 'Title Text 10:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('text10') ); ?>" name="<?php echo esc_attr( $this->get_field_name('text10') ); ?>" type="text" value="<?php echo esc_attr( $text10 ); ?>" /></p>
		 
		 <p><label for="<?php echo esc_url($this->get_field_id('desc')); ?>"><?php _e( 'Description:', THEMENAME ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('desc') ); ?>" name="<?php echo esc_attr( $this->get_field_name('desc') ); ?>" type="text" value="<?php echo esc_attr( $desc ); ?>" /></p>
         
         <p><label for="<?php echo esc_attr($this->get_field_id('extra_class')); ?>">Extra Class:</label>
         <input class="widefat" id="<?php echo esc_attr($this->get_field_id('extra_class')); ?>" name="<?php echo esc_attr($this->get_field_name('extra_class')); ?>" value="<?php echo esc_attr( $extra_class ); ?>" /></p>
         
    <?php
    }

}

/**
* Class WC_Theme_Demo_Widget
*/

function register_theme_demo_widget() {
    register_widget('wc_theme_demo_widget');
}

add_action('widgets_init', 'register_theme_demo_widget');
?>