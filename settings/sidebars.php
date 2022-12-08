<?php
/**
 * Rejestrowanie sidebarów.
 *
 * @package WordPress
 * @subpackage Axel
 */

add_action( 'widgets_init', 'axel_sidebars' );

/**
 * Rejestruje sidebary.
 */
function axel_sidebars() {
	$args = array(
		'id'            => 'axel-sidebar',
		'name'          => __( 'Sidebar', 'axel' ),
		'description'   => __( 'Tutaj możesz dodać widgety.', 'axel' ),
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
}
