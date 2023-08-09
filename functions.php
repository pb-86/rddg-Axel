<?php
/**
 * Ustawienia motywu.
 *
 * @package WordPress
 * @subpackage Axel
 */

define( 'AXEL_THEME_VERSION', '1.78' );

// Lista stałych do dalszego użycia.
define( 'AXEL_THEME_URI', get_template_directory_uri() . '/' );
define( 'AXEL_THEME_IMAGES', AXEL_THEME_URI . 'assets/images/' );
define( 'AXEL_THEME_STYLES', AXEL_THEME_URI . 'assets/styles/' );
define( 'AXEL_THEME_SCRIPTS', AXEL_THEME_URI . 'assets/scripts/' );
define( 'AXEL_THEME_VENDOR', AXEL_THEME_URI . 'assets/vendor/' );

// Główna konfiguracja motywu.
require_once 'settings/setup.php';

// Rejestrowanie i kolejkowanie styli CSS.
require_once 'settings/styles.php';

// Rejestrowanie i kolejkowanie skryptów JS.
require_once 'settings/scripts.php';

// Rejestrowanie menu.
require_once 'settings/menus.php';

// Rejestrowanie sidebarów.
require_once 'settings/sidebars.php';

// Przyspieszanie działania strony.
require_once 'settings/optimisation.php';

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
