<?php
/**
 * Erliama search form
 * Source: http://buildwpyourself.com/wordpress-search-form-template/
 */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group search-widget">
		<input type="text" class="form-control" placeholder="<?php echo esc_attr( 'Search…', 'exopite' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit" id="search-submit" value="Search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</span>
    </div><!-- /input-group -->
</form>