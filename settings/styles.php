<?php
/**
 * File used to register and enqueue all CSS files
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.53
 */

add_action( 'wp_enqueue_scripts', 'axel_styles' );

/**
 * Registers and enqueues all required CSS files.
 */
function axel_styles() {
	if ( ! is_admin() || ! is_customize_preview() ) {
		wp_enqueue_style( 'css-master', esc_url( AXEL_THEME_STYLES . 'master.min.css' ), false, AXEL_THEME_VERSION, 'all' );
	}

	// Removes the default CSS of blocks.
	wp_deregister_style( 'wp-block-library' );
}
