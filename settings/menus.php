<?php
/**
 * File used to register menus
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.26
 */

add_action( 'init', 'axel_menu' );

/**
 * Registers all menus.
 */
function axel_menu() {
	$locations = array(
		'header_menu' => __( 'Header menu', 'axel' ),
		'footer_menu' => __( 'Footer menu', 'axel' ),
	);
	register_nav_menus( $locations );
}
