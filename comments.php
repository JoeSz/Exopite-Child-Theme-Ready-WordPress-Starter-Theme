<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Exopite
 */
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) : ?>
	<p>
		<?php
			_e( 'This post is password protected. Enter the password to view the comments.', 'exopite' );
			return;
		?>
	</p>
<?php endif;

// Theme Hook Alliance
tha_comments_before();

?>
<div id="comments" class="comments-area">

	<?php

	// You can start editing here -- including this comment!
	if ( have_comments() ) :

        ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'exopite' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>
		<?php

        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through?

            ?>
    		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
    			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'exopite' ); ?></h2>
    			<div class="nav-links">

    				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'exopite' ) ); ?></div>
    				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'exopite' ) ); ?></div>

    			</div><!-- .nav-links -->
    		</nav><!-- #comment-nav-above -->
    		<?php

        endif; // Check for comment navigation.

        ?>
		<ol class="comment-list">
			<?php

			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );

			?>
		</ol><!-- .comment-list -->
		<?php

        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through?

            ?>
    		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
    			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'exopite' ); ?></h2>
    			<div class="nav-links">
    				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'exopite' ) ); ?></div>
    				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'exopite' ) ); ?></div>
    			</div><!-- .nav-links -->
    		</nav><!-- #comment-nav-below -->
    		<?php

		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :

        ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'exopite' ); ?></p>
  	    <?php

	endif;

	$aria_req = ' aria-required="true"';
	$author = '<div class="row input-group"><div class="col-xs-12 col-sm-4"><input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" placeholder="' . esc_html__( 'Your Name', 'exopite' ) . '"' . $aria_req . ' /><!-- #form-section-author .form-section --></div>';
	$email = '<div class="col-xs-12 col-sm-4"><input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" placeholder="' . esc_html__( 'Your Email', 'exopite' ) . '"' . $aria_req . ' /><!-- #form-section-email .form-section --></div>';
	$url =  '<div class="col-xs-12 col-sm-4"><input class="form-control" id="url" name="url" type="text" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" size="30" placeholder="' . esc_html__( 'Your Website', 'exopite' ) . '" /><!-- #form-section-url .form-section --></div></div>';
	$comment_field = '<div id="error"></div><div class="row input-group"><div class="col-xs-12 col-sm-12"><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div></div>';
	$comment_notes_after = '';
	$comment_args = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
            'author'                    => $author,
            'email'                     => $email,
            'url'                       => $url ) ),
            'comment_field'             => $comment_field,
            'comment_notes_after'       => $comment_notes_after,
            'class_submit'              => 'btn btn-default'
    );

    comment_form($comment_args);

    ?>
</div><!-- #comments -->
<?php

// Theme Hook Alliance
tha_comments_after();

?>
