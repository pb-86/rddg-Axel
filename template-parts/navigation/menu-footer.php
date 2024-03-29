<?php
/**
 * Menu w stopce.
 *
 * @package WordPress
 * @subpackage Axel
 */

if ( has_nav_menu( 'axel_footer_menu' ) ) {

	wp_nav_menu(
		array(
			'container'            => 'nav',
			'container_id'         => 'navbar-footer',
			'container_class'      => 'navbar navbar--footer',
			'container_aria_label' => esc_html__( 'Dolne menu', 'axel' ),
			'menu'                 => 'axel_footer_menu',
			'menu_id'              => 'menu-footer',
			'menu_class'           => 'menu menu--footer',
			'theme_location'       => 'axel_footer_menu',
		)
	);

}
