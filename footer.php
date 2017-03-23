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
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

    // Theme Hook Alliance
    tha_content_bottom();

    ?>
	</div><!-- #content -->
	<?php

    // Theme Hook Alliance
    tha_content_after();
    tha_footer_before();

    ?>
	<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
		<?php

        // Theme Hook Alliance
        tha_footer_top();

        ?>
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'exopite' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'exopite' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php

                        printf( esc_html__( 'Theme: %1$s by %2$s.', 'exopite' ), 'exopite', '<a href="http://joe.szalai.org" rel="designer">Joe Szalai</a>' );

                        ?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
		<?php

        // Theme Hook Alliance
        tha_footer_bottom();

        ?>
	</footer><!-- #colophon -->
	<?php

    // Theme Hook Alliance
    tha_footer_after();

    ?>
</div><!-- #page -->
<?php

// Theme Hook Alliance
tha_body_bottom();

wp_footer();

?>
</body>
</html>
