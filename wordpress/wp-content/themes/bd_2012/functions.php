<?php

function bd_common_scripts() {
	wp_register_script('modernizr',
					   get_stylesheet_directory_uri().'/js/libs/modernizr.custom.96547.js',
					   '1.0');
	wp_enqueue_script('modernizr');

	wp_register_script('less',
					   get_stylesheet_directory_uri().'/js/libs/less-1.3.0.min.js',
					   '1.0');
	wp_enqueue_script('less');

}

add_action('wp_enqueue_scripts', 'bd_common_scripts');

register_nav_menu( 'main', 'Main Menu' );