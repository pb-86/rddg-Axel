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
		'container_id'    => 'axel-navbar-header',
		'container_class' => 'axel-navbar axel-navbar--header',
		'menu'            => 'header_menu',
		'menu_id'         => 'axel-menu-header',
		'menu_class'      => 'axel-menu axel-menu--header',
		'theme_location'  => 'header_menu',
	)
);
