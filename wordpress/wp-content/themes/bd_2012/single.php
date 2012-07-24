<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
                    <p class="summary-thought"><?php echo get_post_meta($post->ID, 'Summarising Thought', true); ?></p>
					<?php get_template_part( 'content', 'single' ); ?>

					<?php // comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->

<?php get_footer(); ?>