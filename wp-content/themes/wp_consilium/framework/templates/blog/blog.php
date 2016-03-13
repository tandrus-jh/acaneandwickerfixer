<?php
/**
 * @package cshero
 */
?>
<?php global $smof_data; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cs-blog">
		<header class="cs-blog-header">
			<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
			<div class="cs-blog-media">
				<div class="cs-blog-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div><!-- .entry-thumbnail -->
			</div>
			<?php endif; ?>
			<div class="cs-blog-meta cs-itemBlog-meta">
				<?php echo cshero_title_render(); ?>
				<?php echo cshero_info_bar_render(); ?>
			</div>
		</header><!-- .entry-header -->
		<div class="cs-blog-content">
			<?php cshero_content_render(); ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
