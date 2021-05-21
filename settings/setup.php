<?php
/**
 * File used to config the theme
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.46
 */

add_action( 'after_setup_theme', 'axel_setup' );

/**
 * Configures the theme.
 */
function axel_setup() {
	// Sets the maximum allowed width for any content in the theme.
	if ( ! isset( $content_width ) ) {
		$content_width = 1152;
	}

	// Enables post thumbnails support.
	add_theme_support( 'post-thumbnails', array( 'post', 'pages' ) );

	// Sets post thubmnail size.
	update_option( 'thumbnail_size_w', 544 );
	update_option( 'thumbnail_size_h', 352 );
	update_option( 'thumbnail_crop', 1 );

	// Enables custom header support.
	add_theme_support( 'custom-header', array() );

	// Enables custom logo support.
	add_theme_support( 'custom-logo', array() );

	// Enables of use of HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	// Allows plugins to manage the document title tag.
	add_theme_support( 'title-tag' );

	// Loads a CSS file with custom editor styles.
	add_editor_style( AXEL_THEME_STYLES . '/editor.min.css' );

	// Loads the theme language files.
	load_theme_textdomain( 'axel', AXEL_THEME_URI . '/languages' );
}
