<?php
/**
 * Tytuł wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

if ( is_404() ) {
	$main_title = __( 'Nie znaleziono strony', 'axel' );
} elseif ( is_author() ) {
	$main_title = get_the_author();
} elseif ( is_category() ) {
	$main_title = single_cat_title( '', false );
} elseif ( is_search() ) {
	$main_title = __( 'Wyniki wyszukiwania', 'axel' );
} else {
	$main_title = get_the_title();
}

printf(
	'<h1 class="title">%s</h1>',
	esc_html( $main_title )
);
