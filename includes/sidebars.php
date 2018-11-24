<?php
/**
 * File used to register dynamic sidebars
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.1
 */

/**
 * This action runs after all default WordPress widgets have been registered.
 *
 * @link https://developer.wordpress.org/reference/hooks/widgets_init
 */
add_action( 'widgets_init', 'axel_sidebars' );

/**
 * This function is registering sidebar.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function axel_sidebars() {
	$args = array(
		'id'            => 'js-sidebar',
		'name'          => __( 'Sidebar', 'axel' ),
		'description'   => __( 'Sidebar', 'axel' ),
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
}
