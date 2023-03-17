<?php
/**
 * Menu w nagłówku.
 *
 * @package WordPress
 * @subpackage Axel
 */

if ( has_nav_menu( 'header_menu' ) ) {

	wp_nav_menu(
		array(
			'container'            => 'nav',
			'container_id'         => 'navbar-header',
			'container_class'      => 'navbar navbar--header',
			'container_aria_label' => esc_html__( 'Górne menu', 'axel' ),
			'menu'                 => 'header_menu',
			'menu_id'              => 'menu-header',
			'menu_class'           => 'menu menu--header',
			'theme_location'       => 'header_menu',
		)
	);

}
