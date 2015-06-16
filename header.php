<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package millet
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600,700' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Armata|Istok+Web:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner">
	<i class="fa fa-search"></i>
	<?php get_search_form(); ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a href="#" class="menu-toggle"><?php _e( 'Menu', 'millet' ); ?></a>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'millet' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
		<?php endif; // End header image check. ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content"> <!-- open content -->
		<div class="social">
			<?php get_template_part( 'inc/social-media' ); ?>
		</div>
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
