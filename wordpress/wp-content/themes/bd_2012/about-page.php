<?php
/*
 Template Name: About Page
 */
?>  

<?php get_header(); ?>

	<div id="content" class="clearfix" role="main">
		<div class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>    	
		</div>
		<div class="entry-content">
			<div id="bio">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>
			</div>			
		</div>
	</div> 

<?php get_footer(); ?>