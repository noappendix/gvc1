<?php
/**
 * The template for displaying the footer.
 *
 * @package Motif
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">

		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<div id="footer-navbar" class="footer-navbar">
			<nav id="secondary-navigation" class="subordinate-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false, 'fallback_cb' => false, 'depth' => 1 ) ); ?>
			</nav><!-- #secondary-navigation -->
		</div><!-- #footer-navbar -->
		<?php endif; ?>

		<div class="site-info"  role="contentinfo">
			<?php do_action( 'motif_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'motif' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'motif' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'motif' ), 'Motif', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

<?php wp_footer(); ?>

<script type='text/javascript' src='http://www.greenvisorcapital.com/wp-content/themes/motif-wpcom/js/jquery-1.4.4.min.js'></script>
<script type='text/javascript' src='http://www.greenvisorcapital.com/wp-content/themes/motif-wpcom/js/jquery.reveal.js'></script>

</body>
</html>