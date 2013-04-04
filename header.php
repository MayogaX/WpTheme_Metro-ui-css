<?php
/**
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _MetroUiCss
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body class="metrouicss">
<div id="page" class="page">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="page-header" role="banner">
		<hgroup>            
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a><a href="<?php echo esc_url( home_url( '/feed' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="feed" class="btFeed"><img src="<?php echo get_template_directory_uri(); ?>/img/appbar.png" /></a>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>                
		</hgroup>

		<nav id="site-navigation" class="nav-bar" role="navigation">
          <div class="nav-bar-inner">
			    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
           </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="grid">
        <div class="row">
