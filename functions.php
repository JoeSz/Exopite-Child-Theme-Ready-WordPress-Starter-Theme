<?php
/**
 * Exopite functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Exopite
 */
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ----------------------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_template_directory() );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'SCRIPTS', THEMEROOT . '/js' );
define( 'INC', THEMEROOT . '/inc' );

if ( ! function_exists( 'exopite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function exopite_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Exopite, use a find and replace
	 * to change 'exopite' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'exopite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'exopite' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'exopite_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'exopite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function exopite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'exopite_content_width', 1100 );
}
add_action( 'after_setup_theme', 'exopite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function exopite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'exopite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'exopite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'exopite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
require( INC . '/enqueue.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*
 * Include Theme Hook Alliance hooks.
 *
 * Source: https://github.com/zamoose/themehookalliance/blob/master/tha-theme-hooks.php
 *
 * Child theme authors and plugin developers need a consistent set of entry points to allow
 * for easy customization and altering of functionality. Core WordPress offers a suite of
 * [action hooks](http://codex.wordpress.org/Plugin_API/Action_Reference/) and
 * [template tags](http://codex.wordpress.org/Template_tags) but does not cover many of the
 * common use cases. The Theme Hook Alliance is a community-driven effort to agree on a set
 * of third-party action hooks that THA themes pledge to implement in order to give that
 * desired consistency.
 */
require( INC . '/tha-theme-hooks.php' );
