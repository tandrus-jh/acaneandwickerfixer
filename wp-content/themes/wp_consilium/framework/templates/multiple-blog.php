<?php
/*
 * Title
 */
function cshero_title_render(){
	global $smof_data;
	$post_style = $smof_data['post_style'];
	$show_post_title = '1';
	if(is_single()){
		$show_post_title = isset($smof_data['show_post_title'])?$smof_data['show_post_title']:'1';
	} else {
		$show_post_title = (isset($smof_data['archive_posts_title']))?$smof_data['archive_posts_title']:'1';
	}
	if($show_post_title == '1'){
		switch ($post_style){
			case 'corporate':
				ob_start();
				?>
				<div class="cs-blog-title">
					<h3>
					    <?php if(is_sticky()){ echo "<i class='fa fa-thumb-tack'></i>"; } ?>
						<a href="<?php echo get_day_link(get_the_time('Y'),get_the_time('m'),get_the_time('d')); ?>" ><?php echo get_the_date($smof_data['archive_date_format']); ?></a>
						<a class="cs-blog-corporate-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
				</div>
				<?php
				return  ob_get_clean();
				break;
			default:
				ob_start();
				?>
				<div class="cs-blog-title">
					<h3>
					    <?php if(is_sticky()){ echo "<i class='fa fa-thumb-tack'></i>"; } ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
				</div>
				<?php
				return  ob_get_clean();
				break;
		}
	}
}
/*
 * Info Bar
 */
function cshero_info_bar_render() {
	global $smof_data, $post;
	$post_type = get_post_type();

	$taxonomies = 'category';
	$arrTaxonomies = get_object_taxonomies(array('post_type' => $post_type), 'objects');
	foreach($arrTaxonomies as $key=>$objTax){
	    if(is_taxonomy_hierarchical($objTax->name)){
	        $taxonomies = $objTax->name;
	        break;
	    }
	}
	$post_style = $smof_data['post_style'];
	if($smof_data['detail_detail'] == '1'){
    	switch ($post_style){
    		case 'corporate':
    			ob_start();
    			?>
    			<div class="cs-blog-info">
                    <ul class="cs-blog-list-meta unliststyle">
                    	<?php if($smof_data['detail_date'] == '1'): ?>
                    	<li><a href="<?php echo get_day_link(get_the_time('Y'),get_the_time('m'),get_the_time('d')); ?>" ><?php _e('Posted at ',THEMENAME); the_time('G:i');_e('h in',THEMENAME); ?></a></li>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_author'] == '1'): ?>
                    	<li><?php _e('Design by ',THEMENAME); the_author_posts_link(); ?></li>
                    	<?php endif; ?>
                    	<?php
                    	if($smof_data['detail_category'] == '1'):
                        	$categories = get_the_terms(0, $taxonomies);
                        	$separator = ', ';
                        	$output = ''; ?>
                        	<?php if(!empty($categories)): ?>
                        	<li>
                        		<?php
								foreach($categories as $category) {
									$output .= '<a href="'.get_term_link( $category->term_id, $taxonomies ).'" title="' . esc_attr( sprintf( __( "View all posts in %s",THEMENAME), $category->name ) ) . '">'.$category->name.'</a>'.$separator;
								}
    							echo __('Categories ',THEMENAME).trim($output, $separator);
        						?>
                        	</li>
                        	<?php endif; ?>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_tags']):
                    	   $tags = get_the_tags($post->ID);
                    	   $separator = ', ';
                    	   $output = '';?>
                    	   <?php if(!empty($tags)): ?>
                    	   <li>
                           <?php
                           foreach($tags as $tag) {
                               if(is_object($tag)){
                                   $output .= '<a href="'.get_tag_link( $tag->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in tag %s",THEMENAME), $tag->name ) ) . '">'.$tag->name.'</a>'.$separator;
                               }
                           }
                           echo __('Tags ', THEMENAME).trim($output, $separator);
                           ?>
                    	   </li>
                    	   <?php endif; ?>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_comments'] == '1'): ?>
                    	<li><a href="<?php echo get_the_permalink(); ?>"><?php comments_number(__('No Comments',THEMENAME),__('1 Comments',THEMENAME),__('% Comments',THEMENAME)); ?></a></li>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_like'] == '1'): ?>
                    	<li><?php post_favorite('','like',false); ?></li>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_social'] == '1'): ?>
                    	<li><?php cshero_social_sharing_render('',false,false); ?></li>
                    	<?php endif; ?>
                	</ul>
    			</div>
    			<?php
    			return  ob_get_clean();
    			break;
    		default:
    			ob_start();
    			?>
    			<div class="cs-blog-info">
                    <ul class="unliststyle">
                        <?php
                        if($smof_data['detail_date'] == '1'):
                            $archive_date = get_the_date($smof_data['archive_date_format']);?>
                    	    <li><i class="fa fa-clock-o"></i><a href="<?php echo get_day_link(get_the_time('Y'),get_the_time('m'),get_the_time('d')); ?>" title="<?php echo __( "View all posts date ",THEMENAME).$archive_date; ?>"><?php echo $archive_date; ?></a></li>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_author'] == '1'): ?>
                    	<li><i class="fa fa-pencil-square"></i><?php the_author_posts_link(); ?></li>
                    	<?php endif; ?>
                    	<?php
                    	if($smof_data['detail_category'] == '1'):
                        	$categories = get_the_terms(0, $taxonomies);
                        	$separator = ', ';
                        	$output = ''; ?>
                        	<?php if(!empty($categories)): ?>
                    	    <li><i class="fa fa-folder-open"></i>
                    		<?php
							foreach($categories as $category) {
							    if(is_object($category)){
								   $output .= '<a href="'.get_term_link( $category->term_id, $taxonomies ).'" title="' . esc_attr( sprintf( __( "View all posts in %s",THEMENAME), $category->name ) ) . '">'.$category->name.'</a>'.$separator;
							    }
					        }
							echo trim($output, $separator);
    						?>
                    	    </li>
                    	    <?php endif; ?>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_tags']):
                    	   $tags = get_the_tags($post->ID);
                    	   $separator = ', ';
                    	   $output = '';?>
                    	   <?php if(!empty($tags)): ?>
                    	   <li><i class="fa fa-tags"></i>
                           <?php
                           foreach($tags as $tag) {
                               if(is_object($tag)){
                                   $output .= '<a href="'.get_tag_link( $tag->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in tag %s",THEMENAME), $tag->name ) ) . '">'.$tag->name.'</a>'.$separator;
                               }
                           }
                           echo trim($output, $separator);
                           ?>
                    	   </li>
                    	   <?php endif; ?>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_comments'] == '1'): ?>
                    	<li><i class="fa fa-comments"></i><a href="<?php echo get_the_permalink(); ?>" title="<?php _e('View all Comments', THEMENAME); ?>"><?php comments_number(__('No Comments',THEMENAME),__('1 Comments',THEMENAME),__('% Comments',THEMENAME)); ?></a></li>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_like'] == '1'): ?>
                    	<li><?php post_favorite(); ?></li>
                    	<?php endif; ?>
                    	<?php if($smof_data['detail_social'] == '1'): ?>
                    	<li><?php cshero_social_sharing_render('',true,false); ?></li>
                    	<?php endif; ?>
                	</ul>
    			</div>
    			<?php
    			return  ob_get_clean();
    			break;
    	}
	}
}
/*
 * Content for blog
 */
function cshero_content_render(){
    global $smof_data;
    $content_type = cshero_posts_full_content();
    if($content_type == '1'){
        the_excerpt();
        echo cshero_read_more_render();
    } elseif ($content_type == '2'){
        the_excerpt();
    } else {
        the_content();
        wp_link_pages( array(
        'before'      => '<div class="pagination loop-pagination"><span class="page-links-title">' . __( 'Pages:',THEMENAME) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span class="page-numbers">',
        'link_after'  => '</span>',
        ) );
    }
}
/*
 * Read More
 */
 function cshero_read_more_render(){
 	global $smof_data;
	$post_style = $smof_data['post_style'];
	switch ($post_style){
		case 'corporate':
			ob_start();
			?>
			<div class="readmore"><a href="<?php echo esc_url( get_permalink()); ?>" class="btn btn-default"><?php echo __('MORE',THEMENAME); ?></a></div>
			<?php
			return  ob_get_clean();
			break;
		default:
			ob_start();
			?>
			<div class="readmore"><a href="<?php echo esc_url( get_permalink()); ?>" class="btn btn-default"><?php echo __('READ MORE',THEMENAME); ?></a></div>
			<?php
			return  ob_get_clean();
			break;
	}
}