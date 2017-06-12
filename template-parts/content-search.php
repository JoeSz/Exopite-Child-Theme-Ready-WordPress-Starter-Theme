<?php
/**
 * Template part for displaying results in search pages.
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
		<?php

        the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

        if ( 'post' === get_post_type() ) :
            ?>
		    <div class="entry-meta">
            <?php exopite_blog_meta(); ?>
		    </div><!-- .entry-meta -->
		    <?php
        endif;

        ?>
	</header><!-- .entry-header -->
	<?php

    // Theme Hook Alliance
    tha_entry_content_before();

    ?>
	<div class="entry-summary">
		<?php

        the_excerpt();

        ?>
	</div><!-- .entry-summary -->
	<?php

    // Theme Hook Alliance
    tha_entry_content_after();

    ?>
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
	<?php

    // Theme Hook Alliance
    tha_entry_bottom();

    ?>
</article><!-- #post-## -->
<?php

// Theme Hook Alliance
tha_entry_after();

?>
