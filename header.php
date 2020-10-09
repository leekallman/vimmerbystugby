<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vimmerbystugby
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,200&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Macondo+Swash+Caps&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="barba-wrapper">

<div id="page" class="barba-container relative">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vimmerbystugby' ); ?></a>

	<header id="masthead" class="site-header w-100 ph5 ph6-l">
		<div class="header-inner">
			<div class="site-branding">
			<!-- here we link to our logo from the assets folder -->
				<a href="<?php echo get_site_url(); ?>" class="link">
					<h1 class="intro-title lh-title"><?php bloginfo('name'); ?>
					</h1>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'container_class' => 'custom-menu-class',
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>

			</nav><!-- #site-navigation -->

			<div class="language-select">
				<a lang ="sv-SE" hreflang="sv-SE" href="<?php echo site_url(); ?>">SV</a> |
				<a lang ="en-GB" hreflang="en-GB" href="<?php echo site_url('/en'); ?>">EN</a> | <a lang ="de-GE" hreflang="de-GE" href="<?php echo site_url('/de'); ?>">DE</a>
			</div>
		</div>
		
	</header><!-- #masthead -->
<div id="content" class="site-content">