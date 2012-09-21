   	</div><!-- #page -->
   	<img class="page_overlap" src="<?php bloginfo('stylesheet_directory')?>/img/assets/page_overlap.png" alt="page overlap. Visual, non-semantic content" />
   	<?php get_sidebar(); ?>
  	<footer id="main-footer" role="contentinfo">
      <div id="social-links">
        <ul class="clearfix">
          <?php
            $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'Social'
                                      ));

            // Loop through each bookmark and print formatted output
            foreach ( $bookmarks as $bm ) { 
                printf( '<li><a class="ir" href="%s">%s</a></li>', $bm->link_url, __($bm->link_name) );
            }
          ?>
        </ul>
      </div>
  	</footer><!-- #main-footer -->
  </div><!-- #page outer -->
</div><!-- #wrapper -->
<aside id="network-aside">

</aside>
<?php wp_footer(); ?>
<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<!-- scripts concatenated and minified via build script -->
<script src="<?php bloginfo('stylesheet_directory')?>/js/plugins.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/js/script.js"></script>
<!-- end scripts -->

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>