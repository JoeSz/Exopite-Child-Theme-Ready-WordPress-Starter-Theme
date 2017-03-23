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
			<div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
				<main id="main" class="site-main" role="main">
				<?php

                // Theme Hook Alliance
                tha_content_top();

				if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
								if ( is_category() ) {
									printf( __( 'Category Archives: %s', 'exopite' ), '<span>' . single_cat_title( '', false ) . '</span>' );

								} elseif ( is_tag() ) {
									printf( __( 'Tag Archives: %s', 'exopite' ), '<span>' . single_tag_title( '', false ) . '</span>' );

								} elseif ( is_author() ) {
									/* Queue the first post, that way we know
									 * what author we're dealing with (if that is the case).
									*/
									the_post();
									printf( __( 'Author Archives: %s', 'exopite' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );

									/* Since we called the_post() above, we need to
									 * rewind the loop back to the beginning that way
									 * we can run the loop properly, in full.
									 */
									rewind_posts();

								} elseif ( is_day() ) {
									printf( __( 'Daily Archives: %s', 'exopite' ), '<span>' . get_the_date() . '</span>' );

								} elseif ( is_month() ) {
									printf( __( 'Monthly Archives: %s', 'exopite' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

								} elseif ( is_year() ) {
									printf( __( 'Yearly Archives: %s', 'exopite' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

								} else {
									_e( 'Archives', 'exopite' );

								}
							?>
						</h1>
						<?php
							if ( is_category() ) {
								// show an optional category description
								$category_description = category_description();
								if ( ! empty( $category_description ) )
									echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );

							} elseif ( is_tag() ) {
								// show an optional tag description
								$tag_description = tag_description();
								if ( ! empty( $tag_description ) )
									echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
							}
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
