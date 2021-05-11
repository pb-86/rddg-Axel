<?php
/**
 * The template part for displaying header menu.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.24
 */

$args = array(
	'menu'           => 'header_menu',
	'menu_id'        => 'axel-menu-header',
	'menu_class'     => 'axel-menu axel-menu--header',
	'container'      => '',
	'theme_location' => 'header_menu',
);

wp_nav_menu( $args );
