<?php
/**
 * Enqueue styles.
 */
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

if ( ! function_exists( 'load_exopite_styles' ) ) {
	function load_exopite_styles() {

		/* Get Bootstrap 4 */
        wp_register_style( 'bootstrap-4', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css", false, '4.0.0-beta' );
        wp_enqueue_style( 'bootstrap-4' );

        /* Get font awsome */
        wp_register_style( 'font-awesome-470', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", false, '470' );
        wp_enqueue_style( 'font-awesome-470' );

        /*
         * Enqueue scripts and styles with automatic versioning.
         *
         * https://www.doitwithwp.com/enqueue-scripts-styles-automatic-versioning/
         */
        /* Main stylesheet
         * May minify it
        */
        $theme_css_path = THEMEROOT . DIRECTORY_SEPARATOR . 'style.css';
        wp_enqueue_style( 'style', TEMPLATEURI . '/style.css', false, filemtime( $theme_css_path ) );

	}
}
add_action( 'wp_enqueue_scripts', 'load_exopite_styles' );

/**
 * Enqueue scripts.
 */
if ( ! function_exists( 'load_exopite_scripts' ) ) {
	function load_exopite_scripts() {

        /*
         * JavaScript Hooks and Filters System
         *
         * A lightweight JavaScript event/hook manager for WordPress
         *
         * @link: https://github.com/carldanley/WP-JS-Hooks
         */
        $javascript_hooks_js_uri = TEMPLATEURI . '/js/event-manager.min.js';
        $javascript_hooks_js_path = join( DIRECTORY_SEPARATOR, array( TEMPLATEPATH, 'js', 'event-manager.min.js' ) );
        wp_register_script( 'javascript-hooks', $javascript_hooks_js_uri, array(), filemtime( $javascript_hooks_js_path ), true);
        wp_enqueue_script( 'javascript-hooks' );

        wp_enqueue_script( 'jquery-popper-1110', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . '://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array( 'jquery' ), '1.11.0', true );

        wp_register_script( 'bootstrap-4-js', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js", array( 'jquery', 'jquery-popper-1110' ), '4.0.0-beta', true );
        wp_enqueue_script( 'bootstrap-4-js' );

        // May combine and minify them
        $exopite_navigation_js_uri = TEMPLATEURI . '/js/navigation.js';
        $exopite_navigation_js_path = join( DIRECTORY_SEPARATOR, array( TEMPLATEPATH, 'js', 'navigation.js' ) );
        wp_register_script( 'exopite-navigation', $exopite_navigation_js_uri, array(), filemtime( $exopite_navigation_js_path ), true);
        wp_enqueue_script( 'exopite-navigation' );

        $exopite_skip_link_focus_fix_js_uri = TEMPLATEURI . '/js/skip-link-focus-fix.js';
        $exopite_skip_link_focus_fix_js_path = join( DIRECTORY_SEPARATOR, array( TEMPLATEPATH, 'js', 'skip-link-focus-fix.js' ) );
        wp_register_script( 'exopite-skip-link-focus-fix', $exopite_skip_link_focus_fix_js_uri, array(), filemtime( $exopite_skip_link_focus_fix_js_path ), true);
        wp_enqueue_script( 'exopite-skip-link-focus-fix' );

		// Adds support for pages with threaded comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    		wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'load_exopite_scripts', 100 );

?>
