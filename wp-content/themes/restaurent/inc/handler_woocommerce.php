<?php
/**
 * Add a new country to countries list
 */
function handle_add_countries( $countries ) {
	$new_countries = array(
		'HOLLAND' => __( 'Holland', 'woocommerce' ),
	);
	return array_merge( $countries, $new_countries );
}
add_filter( 'woocommerce_countries', 'handle_add_countries' );

/**
 * Handle_woocommerce_continents
 */
function handle_woocommerce_continents( $continents ) {
	$continents['EU']['countries'][] = 'NIRE';
	return $continents;
}
add_filter( 'woocommerce_continents', 'handle_woocommerce_continents' );
