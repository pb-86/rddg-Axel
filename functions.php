<?php
/**
 * This file loads all theme setup files
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.17
 */

define( 'AXEL_THEME_VERSION', '1.17' );

define( 'AXEL_THEME_URI', get_template_directory_uri() );
define( 'AXEL_THEME_IMAGES', AXEL_THEME_URI . '/assets/images/' );
define( 'AXEL_THEME_STYLES', AXEL_THEME_URI . '/assets/styles/css/' );
define( 'AXEL_THEME_SCRIPTS', AXEL_THEME_URI . '/assets/scripts/' );
define( 'AXEL_THEME_VENDOR', AXEL_THEME_URI . '/assets/vendor/' );

require_once 'settings/setup.php';    // Basic theme setup.
require_once 'settings/menus.php';    // Registering menus.
require_once 'settings/sidebars.php'; // Registering sidebar.
require_once 'settings/styles.php';   // Registering CSS styles.
require_once 'settings/scripts.php';  // Registering JS scripts.

/**
 * This function displays custom markup for custom logo.
 */
function axel_logo() {
	if ( has_custom_logo() ) {
		$logo_id   = get_theme_mod( 'custom_logo' );
		$logo_data = wp_get_attachment_image_src( $logo_id, 'full' );
		$html      = sprintf(
			'<h1><a href="%s"><img src="%s" alt="" width="%u" height="%u"><span class="screen-reader-text">%s</span></a></h1>',
			esc_url( home_url() ),
			esc_url( $logo_data[0] ),
			esc_attr( $logo_data[1] ),
			esc_attr( $logo_data[2] ),
			esc_attr( 'Go to home page', 'axel' ),
		);
		echo wp_kses_post( $html );
	}
}
