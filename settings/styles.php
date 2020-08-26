<?php
/**
 * File used to register and enqueue all CSS files
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.17
 */

/**
 * This action runs when scripts and styles are enqueued.
 *
 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts
 */
add_action( 'wp_enqueue_scripts', 'axel_styles' );

/**
 * This function is registering all required CSS styles.
 *
 * @link https://codex.wordpress.org/Function_Reference/wp_register_style
 */
function axel_styles() {
	if ( ! is_admin() || ! is_customize_preview() ) {
		// Main CSS file.
		wp_enqueue_style( 'css-master', esc_url( AXEL_THEME_STYLES . 'master.min.css' ), false, AXEL_THEME_VERSION, 'all' );
	}
}
