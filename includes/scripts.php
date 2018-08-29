<?php

/**
 * This action runs when scripts and styles are enqueued.
 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts
 */
add_action( 'wp_enqueue_scripts', 'axel_scripts' );

/**
 * This function is registering all required JS scripts.
 * @link https://developer.wordpress.org/reference/functions/wp_register_script
 */
function axel_scripts() {
  // jQuery
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js', false, '3.1.1', true );
  // Main JS file
  wp_register_script( 'master', get_template_directory_uri() . '/assets/js/master.js', array( 'jquery' ), constant( "AXEL_THEME_VERSION" ), true );
	wp_enqueue_script( 'master' );
}
