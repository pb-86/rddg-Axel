<?php
/**
 * Menu w stopce.
 *
 * @package WordPress
 * @subpackage Axel
 */

wp_nav_menu(
	array(
		'container'       => 'nav',
		'container_id'    => 'navbar-footer',
		'container_class' => 'navbar navbar--footer',
		'menu'            => 'footer_menu',
		'menu_id'         => 'menu-footer',
		'menu_class'      => 'menu menu--footer',
		'theme_location'  => 'footer_menu',
	)
);
