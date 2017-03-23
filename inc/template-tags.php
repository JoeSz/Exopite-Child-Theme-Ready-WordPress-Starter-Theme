<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Exopite
 */
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

if ( ! function_exists( 'exopite_blog_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function exopite_blog_meta() {
    // Cat, ceruza Author, oraicon Date, commenticon comment count
    if ( 'post' === get_post_type() ) {

        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( esc_html__( '/', 'exopite' ) );
        if ( $categories_list && markatustools_categorized_blog() ) {
            printf( '<span class="cat-links">' . esc_html( '%1$s' ) . '</span>', $categories_list ); // WPCS: XSS OK.
        }

        echo '<span class="meta-separator"></span>';

        printf(
            esc_html( '%s', 'exopite' ),
            '<span class="author vcard"><i class="fa fa-pencil" aria-hidden="true"></i> <a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );

        echo '<span class="meta-separator"></span>';

        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );

        printf(
            esc_html( '%s', 'exopite' ),
            '<span class="posted-on"><i class="fa fa-clock-o" aria-hidden="true"></i><a href="' . esc_url( get_site_url() ) . '/' . esc_html( get_the_date( 'Y' ) ) . '/' . esc_html( get_the_date( 'm' ) ) . '/' . esc_html( get_the_date( 'd' ) ) . '" rel="date">' . get_the_date() . '</a></span>'
        );

        if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
            echo '<span class="meta-separator"></span>';
            echo '<span class="comments-link">';

            comments_popup_link( '<i class="fa fa-comment-o" aria-hidden="true"></i> 0', '<i class="fa fa-comment-o" aria-hidden="true"></i> 1', '<i class="fa fa-comment-o" aria-hidden="true"></i> ' );

            echo '</span>';
        }

        echo '<span class="meta-separator"></span>';

        edit_post_link(
            __( 'Edit', 'exopite' ),
            '<span class="edit-link">',
            '</span>'
        );

    }
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function exopite_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'exopite_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'exopite_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so exopite_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so exopite_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in exopite_categorized_blog.
 */
function exopite_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'exopite_categories' );
}
add_action( 'edit_category', 'exopite_category_transient_flusher' );
add_action( 'save_post',     'exopite_category_transient_flusher' );
