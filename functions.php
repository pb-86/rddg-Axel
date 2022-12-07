<?php
/**
 * Ustawienia motywu.
 *
 * @package WordPress
 * @subpackage Axel
 */

define( 'AXEL_THEME_VERSION', '1.67.3' );

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
 * Dodawaje skip linki.
 */
function axel_skip_links() {
	get_template_part( 'template-parts/header/skip-links' );
}
add_action( 'wp_body_open', 'axel_skip_links', 5 );

/**
 * Wyświetla etykietę ARIA dla przycisku "Czytaj dalej".
 *
 * @param int $id ID wpisu.
 */
function axel_read_more_label( $id ) {
	$prefix = esc_html_e( 'Czytaj dalej wpis pt. ', 'axel' );
	$title  = get_the_title( $id );
	echo esc_attr( $prefix . $title );
}
