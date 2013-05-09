<?php
/*
 Template Name: Archive Page
 */
?>  

<?php get_header(); ?>

		<div id="content" class="clearfix" role="main">
			<div class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>    	
			</div>

			<div class="entry-content">
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</div>

		</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
