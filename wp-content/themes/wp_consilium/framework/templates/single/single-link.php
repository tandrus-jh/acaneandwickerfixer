<?php
/**
 * @package cshero
 */
?>
<?php global $smof_data,$post; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cs-blog cs-blog-item">
		<header class="cs-blog-header">
			<div class="cs-blog-media">
			<?php if(get_post_meta($post->ID, 'cs_post_link', true)): ?>
			<a href="<?php echo get_post_meta($post->ID, 'cs_post_link', true); ?>"><?php echo get_post_meta($post->ID, 'cs_post_link', true); ?></a>
			<?php endif; ?>
			</div>
			<div class="cs-blog-meta cs-itemBlog-meta">
				<?php if($smof_data['show_post_title'] == '1'): ?>
				<div class="cs-blog-title"><h3><?php the_title(); ?></h3></div>
				<?php endif; ?>
				<!-- .info-bar -->
				<?php echo cshero_info_bar_render(); ?>
			</div>
		</header><!-- .entry-header -->
		<div class="cs-blog-content">
			<?php
				the_content();
				wp_link_pages( array(
					'before'      => '<div class="pagination loop-pagination"><span class="page-links-title">' . __( 'Pages:',THEMENAME) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span class="page-numbers">',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->