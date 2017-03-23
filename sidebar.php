<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exopite
 */
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

// Theme Hook Alliance
tha_sidebars_before();

?>
<aside id="secondary" class="col-md-4 widget-area" role="complementary">
	<?php

    // Theme Hook Alliance
    tha_sidebar_top();

    dynamic_sidebar( 'sidebar-1' );

    tha_sidebar_bottom();

    ?>
</aside><!-- #secondary -->
<?php

// Theme Hook Alliance
tha_sidebars_after();

?>
