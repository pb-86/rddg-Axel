<?php
/**
 * Ustawienia motywu.
 *
 * @package WordPress
 * @subpackage Axel
 */

define( 'AXEL_THEME_VERSION', '1.67.5' );

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
 * Pobiera etykietę ARIA dla przycisku "Czytaj dalej".
 *
 * @param int $post_id ID wpisu.
 */
function axel_get_read_more_label( $post_id ) {
	$label_prefix = esc_html__( 'Czytaj dalej wpis pt. ', 'axel' );
	$post_title   = get_the_title( $post_id );
	return $label_prefix . $post_title;
}

/**
 * Wyświetla etykietę ARIA dla przycisku "Czytaj dalej".
 *
 * @param int $post_id ID wpisu.
 */
function axel_the_read_more_label( $post_id ) {
	echo esc_attr( axel_get_read_more_label( $post_id ) );
}
