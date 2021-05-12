<?php
/**
 * The template part for displaying footer menu.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.27
 */

$args = array(
	'container'       => 'nav',
	'container_id'    => 'axel-navbar-footer',
	'container_class' => 'axel-navbar axel-navbar--footer',
	'menu'            => 'footer_menu',
	'menu_id'         => 'axel-menu-footer',
	'menu_class'      => 'axel-menu axel-menu--footer',
	'theme_location'  => 'footer_menu',
);

wp_nav_menu( $args );
