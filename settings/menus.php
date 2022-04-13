<?php
/**
 * File used to register menus
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.57
 */

add_action( 'init', 'axel_menus' );

/**
 * Registers all menus.
 */
function axel_menus() {
	$locations = array(
		'header_menu' => __( 'Header menu', 'axel' ),
		'footer_menu' => __( 'Footer menu', 'axel' ),
	);
	register_nav_menus( $locations );
}
