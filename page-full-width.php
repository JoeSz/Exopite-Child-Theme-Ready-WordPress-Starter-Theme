<?php
/**
 * Template Name: Page - Full Width
 *
 * The template for displaying all single pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Exopite
 */
get_header(); ?>
	<div class="container without-sidebar">
		<div class="row">
			<div id="primary" class="col-md-12 content-area">
				<main id="main" class="site-main" role="main">
					<?php tha_content_top(); ?>
					<?php
					tha_content_while_before();

					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						/**
						 * If comments are open or we have at least one comment, load up the comment template.
						 */
						if ( ( comments_open() || get_comments_number() ) ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					tha_content_while_after();
					?>
					<?php tha_content_bottom(); ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php
get_footer();
