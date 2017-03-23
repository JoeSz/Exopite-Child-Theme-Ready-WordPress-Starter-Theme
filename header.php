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
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

// Theme Hook Alliance
tha_html_before();

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php

// Theme Hook Alliance
tha_head_top();

?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php

// Theme Hook Alliance
tha_head_bottom();

wp_head();

?>
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="https://schema.org/WebPage">
<?php

// Theme Hook Alliance
tha_body_top();

?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'exopite' ); ?></a>
	<?php

    // Theme Hook Alliance
    tha_header_before();

    ?>
	<header id="masthead" class="site-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
        <div class="container">
    		<?php

            // Theme Hook Alliance
            tha_header_top();

            ?>
    		<div class="site-branding">
                <div class="row">
                    <div class="col-md-12">
            			<?php

            			if ( is_front_page() && is_home() ) :

                            ?>
            				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            			    <?php

                        else :

                            ?>
            				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            			    <?php

            			endif;

            			$description = get_bloginfo( 'description', 'display' );
            			if ( $description || is_customize_preview() ) :

                            ?>
            				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            			    <?php

            			endif; ?>
                    </div>
                </div>
    		</div><!-- .site-branding -->

    		<nav id="site-navigation" class="main-navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
				<div class="row">
					<div class="col-md-12">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'exopite' ); ?></button>
						<?php

                        wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );

                        ?>
					</div>
				</div>
    		</nav><!-- #site-navigation -->
    		<?php

            // Theme Hook Alliance
            tha_header_bottom();

            ?>
        </div><!-- .container -->
	</header><!-- #masthead -->
	<?php

    // Theme Hook Alliance
    tha_header_after();

    ?>
	<div id="content" class="site-content">

