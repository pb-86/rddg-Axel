<?php
/**
 * The template part for displaying header menu.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.27
 */

$args = array(
	'container'       => 'nav',
	'container_id'    => 'axel-navbar-header',
	'container_class' => 'axel-navbar axel-navbar--header',
	'menu'            => 'header_menu',
	'menu_id'         => 'axel-menu-header',
	'menu_class'      => 'axel-menu axel-menu--header',
	'theme_location'  => 'header_menu',
);

wp_nav_menu( $args );
