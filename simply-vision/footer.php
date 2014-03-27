<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Modern WP Themes
 */
?>
		</div>
	<!-- #main --></div>

	<?php
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with up to four columns of widgets.
		 */
		get_sidebar( 'footer' );
	?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="clearfix container">
			<div class="site-info">
              <?php if ( of_get_option( 'copyright' ) ): ?>
              	<p><?php echo of_get_option( 'copyright' ); ?></p>
					<?php else: ?>
				&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
               <?php endif; ?> 
			</div><!-- .site-info -->

			<div class="site-credit">
                 <a href="http://modernwpthemes.com/themes/simply-vision/" target="_blank">Simply-VisiOn</a> <?php _e('by Modern WP Themes','Modern WP Themes'); ?> 
			</div><!-- .site-credit -->
		</div>
	<!-- #colophon --></footer>

		<a href="javascript:;" id="scrollToTop" rel="nofollow" title="Go to Top">
        	<i class="fa fa-long-arrow-up"></i>
        </a>


<?php wp_footer(); ?>

</body>
</html>