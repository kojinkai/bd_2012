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
			<div id="profile-image">
				<img src="http://m4.licdn.com/mpr/mpr/shrink_100_100/p/4/000/131/2a7/3200eaa.jpg"  alt="lewis nixon profile image" />
			</div>
			<div id="bio">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>
			</div>			
		</div>
	</div> 

<?php get_footer(); ?>