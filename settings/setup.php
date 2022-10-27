<?php
/**
 * Główna konfiguracja motywu.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.3
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
	add_theme_support( 'post-thumbnails', array( 'post', 'pages' ) );

	// Dodaje dodatkowe rozmiary obrazków.
	add_image_size( 'axel-excerpt-thumbnail', 526, 352, true );
	add_image_size( 'axel-singular-thumbnail', 1120, 640, true );

	// Włącza obsługę customowego nagłówka.
	add_theme_support( 'custom-header', array() );

	// Włącza obsługę customowego logo.
	add_theme_support( 'custom-logo', array() );

	// Włącza obsługę znaczników HTML5.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	// Pozwala wtyczkom na zarządzanie tytułem strony.
	add_theme_support( 'title-tag' );

	// Włącza automatyczne odnośniki do kanałów RSS i komentarzy.
	add_theme_support( 'automatic-feed-links' );

	// Ładuje plik styli CSS dla edytora.
	add_editor_style( AXEL_THEME_STYLES . '/editor.min.css' );

	// Ładuje pliki z tłumaczeniami.
	load_theme_textdomain( 'axel', AXEL_THEME_URI . '/languages' );
}
