<?php
/**
 * File used to config the theme
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.47
 */

add_action( 'after_setup_theme', 'axel_setup' );

/**
 * Configures the theme.
 */
function axel_setup() {
	// Sets the maximum allowed width for any content in the theme.
	if ( ! isset( $content_width ) ) {
		$content_width = 1120;
	}

	// Enables post thumbnails support.
	add_theme_support( 'post-thumbnails', array( 'post', 'pages' ) );

	// Adding additional image sizes.
	add_image_size( 'axel-excerpt-thumbnail', 526, 352, true );
	add_image_size( 'axel-singular-thumbnail', 1120, 640, true );

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
