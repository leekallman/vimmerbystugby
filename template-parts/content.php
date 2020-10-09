<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vimmerbystugby
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content mb5">
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
		  // if it’s a header, go through the data
			if( get_row_layout() == 'header' ): ?>
				<!-- here we seperate our header into its own component file -->
				<?php get_template_part ( 'template-parts/content-header'); ?>

				<!-- if it’s a text component, show us the data -->
				<?php elseif( get_row_layout() == 'text_block' ): ?>
					<!-- here we seperate our text into its own component file -->
					<?php get_template_part ( 'template-parts/content-text'); ?>

					<?php elseif( get_row_layout() == 'gallery' ): ?>

						<?php get_template_part ( 'template-parts/content-gallery'); ?>
					<?php endif; 
				endwhile; endif; ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
