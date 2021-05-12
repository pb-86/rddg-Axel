<?php
/**
 * File used to register and enqueue all JS files
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.26
 */

add_action( 'wp_enqueue_scripts', 'axel_scripts' );

/**
 * Registers and enqueues all required JS files.
 */
function axel_scripts() {
	wp_enqueue_script( 'master', esc_url( AXEL_THEME_SCRIPTS . 'master.min.js' ), array( 'jquery' ), AXEL_THEME_VERSION, true );
	wp_enqueue_script( 'master' );
}
