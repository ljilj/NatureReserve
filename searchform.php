<?php
/**
 * File that's included each time we call get_search_form function
 *
 * @package NatureReserve
 */

?>

<form role="search" method="get" class="top-header__search" action="<?php echo home_url( '/' ); ?>">
	<label class="top-header__search-row">
		<span class="screen-reader-text"><?php echo _e( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field"
			placeholder="<?php echo esc_attr_e( 'Search', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_e( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="search-submit"
        value="<?php echo esc_attr_e( 'Search', 'submit button' ) ?>" />
</form>
