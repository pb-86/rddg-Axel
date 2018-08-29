<?php

/**
 * This action runs after WordPress has finished loading.
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/init
 */
add_action( 'init', 'axel_menu' );

/**
 * This function is registering all navigation menus.
 * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
 */
function axel_menu() {
  $locations = array(
    'header_menu' => __( 'Header menu', 'axel' ),
    'footer_menu' => __( 'Footer menu', 'axel' )
  );
  register_nav_menus( $locations );
}
