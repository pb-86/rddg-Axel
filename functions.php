<?php
/**
 * Ustawienia motywu.
 *
 * @package WordPress
 * @subpackage Axel
 */

define( 'AXEL_THEME_VERSION', '1.80' );

// Lista stałych do dalszego użycia.
define( 'AXEL_THEME_SCRIPTS', get_template_directory_uri() . '/assets/js/' );
define( 'AXEL_THEME_STYLES', get_template_directory_uri() . '/assets/css/' );
define( 'AXEL_THEME_IMAGES', get_template_directory_uri() . '/assets/img/' );
define( 'AXEL_THEME_VENDOR', get_template_directory_uri() . '/assets/vendor/' );

// Główna konfiguracja motywu.
require_once 'config/setup.php';

// Rejestrowanie i kolejkowanie styli CSS.
require_once 'config/styles.php';

// Rejestrowanie i kolejkowanie skryptów JS.
require_once 'config/scripts.php';

// Rejestrowanie menu.
require_once 'config/menus.php';

// Rejestrowanie sidebarów.
require_once 'config/sidebars.php';

// Przyspieszanie działania strony.
require_once 'config/optimisation.php';

/**
 * Wyświetla klasę jeśli został dodany obrazek nagłówka.
 */
function axel_custom_header_class() {
	if ( ! has_custom_header() ) {
		return false;
	}

	echo 'has-background';
}

/**
 * Dodaje obrazek w tle nagłówka strony jeśli jest dostępny.
 */
function axel_custom_header() {
	if ( ! has_custom_header() ) {
		return false;
	}

	$custom_header = get_custom_header();
	printf(
		'style="background-image: url(%s)"',
		esc_url( $custom_header->url )
	);
}

/**
 * Podmienia nazyw klas customowego loga.
 *
 * @param {string} $html Kod HTML loga.
 * @return {string} $html Kod HTML loga po zmianach.
 */
function axel_custom_logo_classes( $html ) {
	$html = str_replace( 'custom-logo-link', 'site-logo__link', $html );
	$html = str_replace( 'custom-logo', 'site-logo__image', $html );
	return $html;
}
add_filter( 'get_custom_logo', 'axel_custom_logo_classes' );
