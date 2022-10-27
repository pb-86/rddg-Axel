<?php
/**
 * Rejestrowanie menu.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.3
 */

add_action( 'init', 'axel_menus' );

/**
 * Rejestruje wszystkie menu.
 */
function axel_menus() {
	$locations = array(
		'header_menu' => __( 'Header menu', 'axel' ),
		'footer_menu' => __( 'Footer menu', 'axel' ),
	);
	register_nav_menus( $locations );
}
