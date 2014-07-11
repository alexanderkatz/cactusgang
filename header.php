<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title( '' ); ?><?php if (wp_title( '', false )) { echo ' |'; } ?> <?php bloginfo( 'name' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="masthead-wrap">
		<header id="masthead" class="site-header container clr" role="banner">
			<div id="logo">
				<?php if ( get_theme_mod( 'wpex_logo' ) ) { ?>
					<a href="<?php echo home_url(); ?>/" title="<?php echo get_bloginfo( 'name' ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'wpex_logo' ); ?>" alt="<?php echo get_bloginfo( 'name' ) ?>" /></a>
				<?php } else { ?>
					 <h2><a href="<?php echo home_url(); ?>/" title="<?php echo get_bloginfo( 'name' ); ?>" rel="home"><?php echo get_bloginfo( 'name' ); ?></a></h2>
				<?php } ?>
			</div><!-- #logo -->
			<nav id="navigation" class="clr">
				<div class="table">
				<?php wp_nav_menu( array(
					'theme_location'	=> 'main_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'dropdown-menu',
					'fallback_cb'		=> false,
				) ); ?>
					</div>
			</nav><!-- #navigation -->
		</header><!-- #header -->
	</div><!-- #masthead-wrap -->
	
	<div id="wrap" class="clr">
		<div id="main-content" class="container clr">