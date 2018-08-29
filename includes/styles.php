<?php

/**
 * This action runs when scripts and styles are enqueued.
 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts
 */
add_action( 'wp_enqueue_scripts', 'axel_styles' );

/**
 * This function is registering all required CSS styles.
 * @link https://codex.wordpress.org/Function_Reference/wp_register_style
 */
function axel_styles() {
  // Main CSS file
  wp_register_style( 'master', get_template_directory_uri() . '/assets/css/master.min.css', false, constant( "AXEL_THEME_VERSION" ), 'all' );
	wp_enqueue_style( 'master' );
}
