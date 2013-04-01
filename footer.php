<?php
 /* @package _MetroUiCss
 */
?>
</div><!-- row -->
	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( '_s_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_MetroUiCss' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_MetroUiCss' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_MetroUiCss' ), '_MetroUiCss', '<a href="http://dev.mayogax.me/" rel="designer">MayogaX</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>