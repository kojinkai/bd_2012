<?php

function bd_common_scripts() {
	wp_register_script('modernizr',
					   get_stylesheet_directory_uri().'/js/libs/modernizr.custom.96547.js',
					   '1.0');
	wp_enqueue_script('modernizr');
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
	printf( __( '<div class="pub_date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a>', 'twentyeleven' ),
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


function bd_body_classes( $classes ) {

	if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_singular() && ! is_home() ) {
		if (! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) && ! is_page_template( 'categories-home.php' ) && ! is_page_template( 'about-page.php' ) ) {
			$classes[] = 'singular';
		}
	}
	return $classes;
}
remove_filter( 'body_class', 'twentyeleven_body_classes' );
add_filter( 'body_class', 'bd_body_classes' );


// Overriding the twentyeleven comments loop
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta clearfix">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );
					?>
					<div class="meta-block">
					 <?php
						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s %2$s', 'twentyeleven' ),
							sprintf( '<h1>%s</h1>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s', 'twentyeleven' ), get_comment_date() )
							)
						);
					?>
					</div>
					<?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}