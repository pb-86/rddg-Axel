<?php
/**
 * File used to register dynamic sidebars
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.26
 */

add_action( 'widgets_init', 'axel_sidebars' );

/**
 * Registers sidebar.
 */
function axel_sidebars() {
	$args = array(
		'id'            => 'axel-sidebar-1',
		'name'          => __( 'Sidebar', 'axel' ),
		'description'   => __( 'You can place widgets here.', 'axel' ),
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
}
