<?php
/**
 * File used to register and enqueue all CSS files
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.26
 */

add_action( 'wp_enqueue_scripts', 'axel_styles' );

/**
 * Registers and enqueues all required CSS files.
 */
function axel_styles() {
	if ( ! is_admin() || ! is_customize_preview() ) {
		wp_enqueue_style( 'css-master', esc_url( AXEL_THEME_STYLES . 'master.min.css' ), false, AXEL_THEME_VERSION, 'all' );
	}
}
