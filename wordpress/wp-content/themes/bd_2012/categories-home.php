<?php
/*
 Template Name: Categories Home
 */
?> 

<?php get_header(); ?>

			<div id="content" role="main">

				<?php $cats = array(
					'show_option_all'    => '',
					'orderby'            => 'count',
					'style'              => 'list',
					'show_count'         => 1,
					'hide_empty'         => 1,
					'use_desc_for_title' => 0,
					'feed'               => '',
					'feed_type'          => '',
					'feed_image'         => '',
					'hierarchical'       => 0,
					'title_li'           => __( 'Categories' ),
					'show_option_none'   => __('No categories'),
					'number'             => null,
					'echo'               => 1,
					'depth'              => 0,
					'current_category'   => 0,
					'pad_counts'         => 0,
					'taxonomy'           => 'category',
					'walker'             => 'Walker_Category'
				); 
				
				$categories = get_categories($cats);
				  foreach($categories as $category) {
					echo '<article class="hentry clearfix">';
				    echo '<header class="entry-header"><h1 class="entry-title"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h1></header>';;
					echo '<div class="entry-main">';
				    echo '<div class="entry-content"><p>'. $category->description . '</p></div>';
				    echo '<footer class="entry-meta"><div class="category_count"><p>'. $category->count . '</p></div></footer>';
					echo '</div>';
				  	echo '</article>'; }
				
				?>

			</div><!-- #content -->

<?php get_footer(); ?>