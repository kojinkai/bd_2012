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
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/style.css">

  <!-- All JavaScript at the bottom, except this Modernizr build. -->

  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div id="wrapper">
  <div id="page" class="hfeed">
  	<header id="branding" role="banner">
  			<hgroup>
  				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
  				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
  			</hgroup>

  			<nav id="access" role="navigation">
  				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
  				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
  				<div class="skip-link"><a class="assistive-text" href="#content" title=""></a></div>
  				<div class="skip-link"><a class="assistive-text" href="#secondary" title=""></a></div>
  			</nav><!-- #access -->
  	</header><!-- #branding -->


  	<div id="main">