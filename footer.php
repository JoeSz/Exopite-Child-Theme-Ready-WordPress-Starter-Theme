<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exopite
 */

?>
		<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	<?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php tha_footer_top(); ?>
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'exopite' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'exopite' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'exopite' ), 'exopite', '<a href="http://joe.szalai.org" rel="designer">Joe Szalai</a>' ); ?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>

</body>
</html>
