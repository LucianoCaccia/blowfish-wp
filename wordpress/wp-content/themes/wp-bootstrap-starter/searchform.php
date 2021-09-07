<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wp-bootstrap-starter' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'wp-bootstrap-starter' ); ?>">
	        <button type="submit" class="search-submit btn btn-lg btn-link"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
<br>


