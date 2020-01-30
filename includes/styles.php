<?php
/**
 * File used to register and enqueue all CSS files
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.10.3
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
		$css_master_uri = AXEL_THEME_STYLES . '/master.min.css';
		wp_enqueue_style( 'css-master', $css_master_uri, false, constant( 'AXEL_THEME_VERSION' ), 'all' );
	}
}
