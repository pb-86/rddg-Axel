<?php
/**
 * Menu w nagłówku.
 *
 * @package WordPress
 * @subpackage Axel
 */

wp_nav_menu(
	array(
		'container'       => 'nav',
		'container_id'    => 'navbar-header',
		'container_class' => 'navbar navbar--header',
		'menu'            => 'header_menu',
		'menu_id'         => 'menu-header',
		'menu_class'      => 'menu menu--header',
		'theme_location'  => 'header_menu',
	)
);
