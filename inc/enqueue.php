<?php
/**
 * Enqueue styles.
 */
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

if ( ! function_exists( 'load_exopite_styles' ) ) {
	function load_exopite_styles() {

		/* Get Bootstrap 4 */
        wp_register_style( 'bootstrap-4', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css", false, '4.0.0-alpha6' );
        wp_enqueue_style( 'bootstrap-4' );

        /* Get font awsome */
        wp_register_style( 'font-awesome-470', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", false, '470' );
        wp_enqueue_style( 'font-awesome-470' );

		/* Main stylesheet */
		wp_enqueue_style( 'style', get_stylesheet_uri() );
	}
}
add_action( 'wp_enqueue_scripts', 'load_exopite_styles' );

/**
 * Enqueue scripts.
 */
if ( ! function_exists( 'load_exopite_scripts' ) ) {
	function load_exopite_scripts() {

        /* JavaScript Hooks and Filters Object */
        wp_enqueue_script( 'javascript-hooks', get_template_directory_uri() . '/js/javascript.hooks-filters.js', array(), null, true );

		wp_enqueue_script( 'jquery-tether-133', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.3/js/tether.min.js', array( 'jquery' ), '20151215', true );

        wp_register_script( 'bootstrap-4-js', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js", array( 'jquery', 'jquery-tether-133' ), '4.0.0-alpha.6', true );
        wp_enqueue_script( 'bootstrap-4-js' );

		wp_enqueue_script( 'exopite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

		wp_enqueue_script( 'exopite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

		// Adds support for pages with threaded comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'load_exopite_scripts', 100 );

?>
