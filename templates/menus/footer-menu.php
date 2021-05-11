<?php
/**
 * The template part for displaying footer menu.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.24
 */

$args = array(
	'menu'           => 'footer_menu',
	'menu_id'        => '',
	'menu_class'     => 'axel-menu',
	'container'      => '',
	'theme_location' => 'footer_menu',
);

wp_nav_menu( $args );
