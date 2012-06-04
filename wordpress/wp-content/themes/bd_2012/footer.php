	  	</div><!-- #main -->
   	</div><!-- #page --> 
	  	<footer id="colophon" role="contentinfo">

	  			<?php
	  				/* A sidebar in the footer? Yep. You can can customize
	  				 * your footer with three columns of widgets.
	  				 */
	  				if ( ! is_404() )
	  					get_sidebar( 'footer' );
	  			?>

	  			<div id="site-generator">
	  				<?php do_action( 'twentyeleven_credits' ); ?>
	  				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
	  			</div>
	  	</footer><!-- #colophon --> 
  </div><!-- #page outer -->
</div><!-- #wrapper -->

<?php wp_footer(); ?>
<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<!-- scripts concatenated and minified via build script -->
<script src="<?php bloginfo('stylesheet_directory')?>/js/plugins.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/js/script.js"></script>
<!-- end scripts -->

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
     mathiasbynens.be/notes/async-analytics-snippet -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>