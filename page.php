<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vimmerbystugby
 */

get_header();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="locations">		
<?php query_posts('post_type=location'); ?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
		<div class="location flex-l mb5">
			<div class="map w-100 w-50-l pt5 pl5 ph5-l">
				<div class="map-inner">
					<!-- firstly we check if the map custom field is filled in -->
	                <?php if( get_field('map') ): ?>
	                <!-- if it is we output it here  -->
	                <?php the_field('map'); ?>
	                <?php endif; ?>
				</div>
			</div>

			<div class="location-info w-100 w-50-l pa5">
				<div class="location-description">
				<?php the_content(); ?>
				</div>
			</div>
			
		</div>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</article>

<?php
get_footer();
