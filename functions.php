<?php
/**
 * This file loads all theme setup files
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.14
 */

define( 'AXEL_THEME_VERSION', '0.14' );

define( 'AXEL_THEME_URI', get_template_directory_uri() );
define( 'AXEL_THEME_IMAGES', AXEL_THEME_URI . '/assets/images' );
define( 'AXEL_THEME_STYLES', AXEL_THEME_URI . '/assets/css' );
define( 'AXEL_THEME_SCRIPTS', AXEL_THEME_URI . '/assets/scripts' );
define( 'AXEL_THEME_VENDOR', AXEL_THEME_URI . '/assets/vendor' );

require_once 'includes/setup.php';    // Basic theme setup.
require_once 'includes/menus.php';    // Registering menus.
require_once 'includes/sidebars.php'; // Registering sidebar.
require_once 'includes/styles.php';   // Registering CSS styles.
require_once 'includes/scripts.php';  // Registering JS scripts.

/**
 * This function displays custom markup for custom logo.
 */
function axel_logo() {
	if ( has_custom_logo() ) {
		$logo_id   = get_theme_mod( 'custom_logo' );
		$logo_data = wp_get_attachment_image_src( $logo_id, 'full' );
		$html      = sprintf(
			'<h1><a href="%s" aria-label="%s"><img src="%s" alt="" width="%u" height="%u"></a></h1>',
			esc_url( home_url() ),
			esc_attr( 'Go to home page', 'axel' ),
			esc_url( $logo_data[0] ),
			esc_attr( $logo_data[1] ),
			esc_attr( $logo_data[2] ),
		);
		echo wp_kses_post( $html );
	}
}
