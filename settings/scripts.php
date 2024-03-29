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
	if ( ! is_admin() ) {
		wp_dequeue_script( 'jquery' );
		wp_deregister_script( 'jquery' );
	}

	wp_register_script( 'axel-dropdown-menu', esc_url( AXEL_THEME_SCRIPTS . 'dropdown-menu.js' ), array(), AXEL_THEME_VERSION, true );
	wp_register_script( 'axel-print', esc_url( AXEL_THEME_SCRIPTS . 'print.js' ), array(), AXEL_THEME_VERSION, true );
	wp_register_script( 'axel-scroll-to-top', esc_url( AXEL_THEME_SCRIPTS . 'scroll-to-top.js' ), array(), AXEL_THEME_VERSION, true );
	wp_register_script( 'boxicons', esc_url( AXEL_THEME_VENDOR . 'boxicons-2.1.4/dist/boxicons.js' ), array(), '2.1.4', true );

	wp_enqueue_script( 'axel-dropdown-menu' );
	wp_enqueue_script( 'axel-print' );
	wp_enqueue_script( 'axel-scroll-to-top' );
	wp_enqueue_script( 'boxicons' );

}
