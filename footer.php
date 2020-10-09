<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vimmerbystugby
 */

?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer">
			<div class="footer-content pv2 pv3-l flex flex-wrap ph5 ph6-l">
				<div class="site-branding w-third ">
					<a href="<?php echo get_site_url(); ?>" class="link">
						<h1 class="intro-title f3 f4-l white">	<?php bloginfo('name'); ?>
						</h1>
					</a>
				</div>
				<div class="contact w-third pa2 pt3 f7">
					<a href= "mailto:info@vimmerbystugby.se" class="email link white grow dib">info@vimmerbystugby.se</a>
					<br>

					<a href="tel:0046706994616" class="link white db grow dib">+46706-99 46 16</a><br>
					<a href="tel:0046730760379" class="link white db mb4 grow dib">+46730-76 03-79</a>
				</div>
				<div class="social w-third pt3 tr">
			          <a href="https://facebook.com/vimmerbystugby" class="mh2 link grow dib white">
			            <i class="fa fa-facebook"></i>
			          </a>
			          <a href="https://instagram.com/vimmerbystugby" class=" mh2 link grow dib white">
			            <i class="fa fa-instagram"></i>
			          </a>
			    </div>
			    <div class="madeby f6 white w-100 tc f7">
				&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?>. Website by <a href="https://www.linkedin.com/in/lisaleekallman/" class="link white grow dib">Lisa Lee Källman</a>
				</div>
			   
		</div><!-- .site-info -->
		<?php wp_reset_query() ?>		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
