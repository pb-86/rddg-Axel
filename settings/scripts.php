<?php
/**
 * File used to register and enqueue all JS files
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.16
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
		$jquery_uri = AXEL_THEME_VENDOR . '/jquery-3.4.1.min.js';
		wp_register_script( 'jquery', $jquery_uri, false, '3.4.1', true );

		// Main JS file.
		$js_master_uri = AXEL_THEME_SCRIPTS . '/master.min.js';
		wp_enqueue_script( 'js-master', $js_master_uri, array( 'jquery' ), constant( 'AXEL_THEME_VERSION' ), true );
	}
}
