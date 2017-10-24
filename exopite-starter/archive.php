<?php
/**
 * The template for displaying archive pages.
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
	<div class="container">
		<div class="row">
			<div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8 col-lg-9<?php else : ?>col-md-12<?php endif; ?> content-area">
				<main id="main" class="site-main" role="main">
				<?php

                // Theme Hook Alliance
                tha_content_top();

				if ( have_posts() ) : ?>

					<header class="page-header">
                        <?php

                        the_archive_title( '<h1 class="page-title" itemprop="headline">', '</h1>' );

                        // show an optional description (author or terms)
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );

						?>
					</header><!-- .page-header -->
					<?php

                    // Theme Hook Alliance
					tha_content_while_before();

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

                    // Theme Hook Alliance
					tha_content_while_after();

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
				<?php

                // Theme Hook Alliance
                tha_content_bottom();

                ?>
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php

            get_sidebar();

            ?>
		</div><!-- .row -->
	</div><!-- .container -->
	<?php

    // Theme Hook Alliance
    tha_content_after();

get_footer();
