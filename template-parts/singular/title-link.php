<?php
/**
 * Tytuł wpisu z odnośnikiem
 *
 * @package WordPress
 * @subpackage Axel
 */

if ( is_home() || is_front_page() ) {
	$header = 'h3';
} else {
	$header = 'h2';
}

printf(
	'<%s class="title"><a class="title__link" href="%s">%s</a></%s>',
	esc_attr( $header ),
	esc_url( get_permalink() ),
	esc_html( get_the_title() ),
	esc_attr( $header )
);
