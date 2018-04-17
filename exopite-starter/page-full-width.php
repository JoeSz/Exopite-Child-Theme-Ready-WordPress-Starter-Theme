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
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

get_header();

    // Theme Hook Alliance
    tha_content_before();

    ?>
	<div class="container without-sidebar">
		<div class="row">
			<div id="primary" class="col-md-12 content-area">
				<main id="main" class="site-main" role="main">
					<?php

                    // Theme Hook Alliance
                    tha_content_top();
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

                    // Theme Hook Alliance
                    tha_content_while_after();
					tha_content_bottom();

                    ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .container -->
	<?php

    // Theme Hook Alliance
    tha_content_after();

get_footer();
