<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vimmerbystugby
 */

get_header();
?>
	<main id="primary" class="site-main">


	<?php query_posts('posts_per_page=1&category_name=hero&orderby=rand') ?>
        <?php if (have_posts() ) : while (have_posts() ) : the_post();

			get_template_part('template-parts/content-hero');
		      endwhile;
		  endif; ?>
 	<?php wp_reset_query(); ?>

	<?php query_posts('posts_per_page=1&category_name=welcome&orderby=rand') ?>
        <?php if (have_posts() ) : while (have_posts() ) : the_post();
	
		get_template_part('template-parts/content-welcome');
		endwhile;
		  endif; ?>
 	<?php wp_reset_query(); ?>

	
	<?php query_posts('posts_per_page=1&category_name=reviews&orderby=rand') ; ?>

		<?php if (have_posts() ) : while (have_posts() ) : the_post(); 

		get_template_part('template-parts/content-review'); 
		endwhile;
	endif; ?>
	
	<?php wp_reset_query(); ?>
	</main><!-- #main -->


<?php
get_footer();
