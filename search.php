<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'exopite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						<h2 class="page-subtitle"><?php echo $wp_query->found_posts . ' ' . esc_html__( 'results found.', 'exopite' ); ?></h2>
					</header><!-- .page-header -->

					<?php
					tha_content_while_before();

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					tha_content_while_after();

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
				<?php tha_content_bottom(); ?>
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row -->
	</div><!-- .container -->
	<?php tha_content_after(); ?>
<?php
get_footer();
