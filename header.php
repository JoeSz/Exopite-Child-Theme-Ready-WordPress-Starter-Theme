<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exopite
 */
tha_html_before();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php tha_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php tha_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'markatustools' ); ?></a>
	<?php tha_header_before(); ?>
	<header id="masthead" class="site-header" role="banner">
        <div class="container">
    		<?php tha_header_top(); ?>
    		<div class="site-branding">
                <div class="row">
                    <div class="col-md-12">
            			<?php
            			if ( is_front_page() && is_home() ) : ?>
            				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            			<?php else : ?>
            				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            			<?php
            			endif;

            			$description = get_bloginfo( 'description', 'display' );
            			if ( $description || is_customize_preview() ) : ?>
            				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            			<?php
            			endif; ?>
                    </div>
                </div>
    		</div><!-- .site-branding -->

    		<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="row">
					<div class="col-md-12">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'markatustools' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</div>
    		</nav><!-- #site-navigation -->
    		<?php tha_header_bottom(); ?>
        </div><!-- .container -->
	</header><!-- #masthead -->
	<?php tha_header_after(); ?>
	<?php tha_content_before(); ?>
	<div id="content" class="site-content">
		<?php tha_content_top(); ?>
