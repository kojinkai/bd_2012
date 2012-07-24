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

if ( ! function_exists( 'twentyeleven_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_posted_on() {
	printf( __( '<div class="pub_date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></div></span></span>', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;


// add the correct IR classes to the prev and next post links
function filter_next_post_link($link) {
    $link = str_replace("rel=", 'class="ir" rel=', $link);
    return $link;
}
add_filter('next_post_link', 'filter_next_post_link');

function filter_previous_post_link($link) {
    $link = str_replace("rel=", 'class="ir" rel=', $link);
    return $link;
}
add_filter('previous_post_link', 'filter_previous_post_link');