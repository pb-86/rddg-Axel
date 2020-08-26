<?php
/**
 * File used to register and enqueue all JS files
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.17
 */

/**
 * This action runs when scripts and styles are enqueued
 *
 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts
 */
add_action( 'wp_enqueue_scripts', 'axel_scripts' );

/**
 * This function is registering all required JS scripts
 *
 * @link https://developer.wordpress.org/reference/functions/wp_register_script
 */
function axel_scripts() {
	if ( ! is_admin() || ! is_customize_preview() ) {
		// jQuery.
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', esc_url( AXEL_THEME_VENDOR . 'jquery-3.5.1.min.js' ), false, '3.5.1', true );

		// Main JS file.
		wp_enqueue_script( 'js-master', esc_url( AXEL_THEME_SCRIPTS . 'master.min.js' ), array( 'jquery' ), AXEL_THEME_VERSION, true );
	}
}
