<?php
/**
 * File used to register and enqueue all CSS files
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66
 */

add_action( 'wp_enqueue_scripts', 'axel_styles' );

/**
 * Registers and enqueues all required CSS files.
 */
function axel_styles() {
	if ( ! is_admin() || ! is_customize_preview() ) {
		wp_register_style( 'master', esc_url( AXEL_THEME_STYLES . 'master.min.css' ), false, AXEL_THEME_VERSION, 'all' );
		wp_enqueue_style( 'master' );
	}

	// Removes the default CSS of blocks.
	wp_dequeue_style( 'wp-block-library' );
	wp_deregister_style( 'wp-block-library' );

	// Removes default styles.
	wp_dequeue_style( 'global-styles' );
	wp_deregister_style( 'global-styles' );
}
