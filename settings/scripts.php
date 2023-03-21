<?php
/**
 * Rejestrowanie i kolejkowanie skryptów JS.
 *
 * @package WordPress
 * @subpackage Axel
 */

add_action( 'wp_enqueue_scripts', 'axel_scripts' );

/**
 * Rejestruje i kolejkuje wszystkie pliki JS.
 */
function axel_scripts() {
	wp_register_script( 'axel-dropdown-menu', esc_url( AXEL_THEME_SCRIPTS . 'dropdown-menu.min.js' ), array(), AXEL_THEME_VERSION, true );
	wp_register_script( 'axel-scroll-to-top', esc_url( AXEL_THEME_SCRIPTS . 'scroll-to-top.min.js' ), array(), AXEL_THEME_VERSION, true );

	wp_enqueue_script( 'axel-dropdown-menu' );
	wp_enqueue_script( 'axel-scroll-to-top' );
}
