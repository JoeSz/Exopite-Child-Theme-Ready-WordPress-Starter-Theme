<?php
/**
 * The main template file (Blog list).
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
			<div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
				<main id="main" class="site-main" role="main">
				<?php

                /*
                 * Theme Hook Alliance hook
                 * GitHub: https://github.com/zamoose/themehookalliance
                 * File:   include/plugins/tha-theme-hooks.php
                 */
                tha_content_top();

				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

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

				endif;

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
