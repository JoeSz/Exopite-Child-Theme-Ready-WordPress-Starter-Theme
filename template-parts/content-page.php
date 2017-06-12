<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package exopite-starter
 */
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

// Theme Hook Alliance
tha_entry_before();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

    // Theme Hook Alliance
    tha_entry_top();

    ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php

    // Theme Hook Alliance
    tha_entry_content_before();

    ?>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'exopite-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php

    // Theme Hook Alliance
    tha_entry_content_after();

    if ( get_edit_post_link() ) :
        ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'exopite-starter' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	   <?php
    endif;

    // Theme Hook Alliance
    tha_entry_bottom();

    ?>
</article><!-- #post-## -->
<?php

// Theme Hook Alliance
tha_entry_after();

?>
