<?php
/**
 * Enqueue styles.
 */
if ( ! function_exists( 'load_exopite_styles' ) ) {
	function load_exopite_styles() {

		/* Get Bootstrap 4 */
		wp_register_style( 'bootstrap', 'http' . ( $_SERVER['SERVER_PORT'] == 443 ? 's' : '' ) . '://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css', false, 'all' );
		wp_enqueue_style( 'bootstrap' );

		/* Get font awsome */
		wp_register_style( 'font-awesome', 'http' . ( $_SERVER['SERVER_PORT'] == 443 ? 's' : '' ) . '://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', false, 'all' );
		wp_enqueue_style( 'font-awesome' );

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

        /*
        JavaScript Hooks and Filters Object
         */
        wp_enqueue_script( 'javascript-hooks', get_template_directory_uri() . '/js/javascript.hooks-filters.js', array(), null, true );

		/*
		Loads jQuery from Google Library (CDN) to improve speed.
		We can check wordpress's jquery version to make sure we're using the same one and also allow for script debugging since many plugins rely on the wordpress jquery.
		Source: https://colorlib.com/wp/load-wordpress-jquery-from-google-library/
		 */
		wp_deregister_script( 'jquery' );
		wp_register_script(	'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), null, true );
		add_filter( 'script_loader_src', 'jquery_local_fallback', 10, 2 );

		wp_enqueue_script( 'jquery-tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.3/js/tether.min.js', array( 'jquery' ), '20151215', true );

		wp_register_script('bootstrap-js', 'http' . ( $_SERVER['SERVER_PORT'] == 443 ? 's' : '' ) . '://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js', array( 'jquery' ), '1.9.1', true);
		wp_enqueue_script( 'bootstrap-js' );

		wp_enqueue_script( 'exopite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

		wp_enqueue_script( 'exopite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

		// Adds support for pages with threaded comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'load_exopite_scripts', 100 );

/* Local fallback which we can filter if we desire to include a version in our theme. */
function jquery_local_fallback( $src, $handle = null ) {
	static $add_jquery_fallback = false;
	if ( $handle === 'jquery' ) {
		$add_jquery_fallback = apply_filters( 'script_loader_src', includes_url( '/js/jquery/jquery.js' ), 'jquery-fallback' );
	}
	return $src;
}
add_action( 'wp_head', 'jquery_local_fallback' );

?>
