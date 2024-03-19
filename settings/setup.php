<?php
/**
 * Główna konfiguracja motywu.
 *
 * @package WordPress
 * @subpackage Axel
 */

add_action( 'after_setup_theme', 'axel_setup' );

/**
 * Dodaje konfiguracje motywu.
 */
function axel_setup() {
	// Ustawia maksymalną szerokość dla treści w motywie.
	if ( ! isset( $content_width ) ) {
		$content_width = 1120;
	}

	// Włącza obsługę miniaturek.
	add_theme_support( 'post-thumbnails' );

	// Rozmiary obrazków.
	update_option( 'thumbnail_size_w', 232 );
	update_option( 'thumbnail_size_h', 232 );
	update_option( 'thumbnail_crop', false );
	update_option( 'medium_size_w', 354 );
	update_option( 'medium_size_h', 354 );
	update_option( 'medium_crop', true );
	update_option( 'large_size_w', 720 );
	update_option( 'large_size_h', 1080 );
	update_option( 'large_crop', true );

	// Dodaje dodatkowe rozmiary obrazków.
	add_image_size( 'axel-excerpt-thumbnail', 528, 288, true );
	add_image_size( 'axel-singular-thumbnail', 1120, 624, true );

	// Włącza obsługę customowego nagłówka.
	add_theme_support(
		'custom-header',
		array(
			'width'       => 2560,
			'height'      => 408,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Włącza obsługę customowego logo.
	add_theme_support( 'custom-logo', array() );

	// Włącza obsługę znaczników HTML5.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	// Pozwala wtyczkom na zarządzanie tytułem strony.
	add_theme_support( 'title-tag' );

	// Włącza automatyczne odnośniki do kanałów RSS i komentarzy.
	add_theme_support( 'automatic-feed-links' );

	// Ładuje pliki z tłumaczeniami.
	load_theme_textdomain( 'axel', get_template_directory_uri() . '/languages' );
}
