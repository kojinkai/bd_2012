<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> -->

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="stylesheet/less" href="<?php bloginfo('stylesheet_directory')?>/style.css">
    <script type="text/javascript" src="http://use.typekit.com/elc7rhr.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <!-- All JavaScript at the bottom, except this Modernizr build. -->

  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div id="wrapper">
  <div id="page-outer" class="hfeed">
    <?php get_sidebar(); ?>
    <?php if ( is_single() ) { ?>
      <nav id="nav-single">
				<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
				<span class="nav-previous"><?php previous_post_link( '%link', __( 'Previous', 'twentyeleven' ) ); ?></span>
				<span class="nav-next"><?php next_post_link( '%link', __( 'Next', 'twentyeleven' ) ); ?></span>
			</nav><!-- #nav-single -->
    <?php } ?>
	<div id="page" class="clearfix">
		<nav id="access" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
			<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
			<div class="skip-link"><a class="assistive-text" href="#content" title="main-content"></a></div>
			<div class="skip-link"><a class="assistive-text" href="#main-aside" title="archives"></a></div>
		</nav><!-- #access -->
	  	<header id="main-header" role="banner">
        	<div id="top_nav_outer">
	           <div id="logo">                  
					<h1 class="ir"><a href="/" title="box deluxe home">Boxdeluxe Web design blog</a></h1>
			   </div>
				<nav id="main_nav">
				  <?php wp_nav_menu( array('menu' 		=> 'main',
				 						   'menu_class'	=> 'clearfix menu')); ?>
				<nav>
            </div>
	  	</header><!-- #branding -->
      <a class="data-toggle" data-toggle="collapse" data-target=".nav-collapse">Archives</a>