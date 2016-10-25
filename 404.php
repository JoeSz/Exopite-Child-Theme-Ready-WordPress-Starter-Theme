<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Exopite
 */

get_header(); ?>

	<?php tha_content_before(); ?>
	<div class="container">
		<div class="row">
			<div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
				<main id="main" class="site-main" role="main">
					<?php tha_content_top(); ?>
					<section class="error-404 not-found">
						<?php tha_entry_before(); ?>
						<?php tha_entry_top(); ?>
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( "We're sorry, but we couldn't find the page you were looking for.", 'exopite' ); ?></h1>
							<h2 class="page-subtitle"><?php esc_html_e( 'Maybe you followed a bad link or typed a wrong URL?', 'exopite' ); ?></h2>
						</header><!-- .page-header -->
						<?php tha_entry_content_before(); ?>
						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'exopite' ); ?></p>

							<?php
								get_search_form();

								the_widget( 'WP_Widget_Recent_Posts' );

								// Only show the widget if site has multiple categories.
								if ( exopite_categorized_blog() ) :
							?>

							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'exopite' ); ?></h2>
								<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
								</ul>
							</div><!-- .widget -->

							<?php
								endif;

								/* translators: %1$s: smiley */
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'exopite' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

								the_widget( 'WP_Widget_Tag_Cloud' );
							?>
						</div><!-- .page-content -->
						<?php tha_entry_content_after(); ?>
						<?php tha_entry_bottom(); ?>
					</section><!-- .error-404 -->
					<?php tha_content_bottom(); ?>
					<?php tha_entry_after(); ?>
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row -->
	</div><!-- .container -->
	<?php tha_content_after(); ?>
<?php
get_footer();
