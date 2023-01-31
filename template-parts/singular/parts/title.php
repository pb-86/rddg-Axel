<?php
/**
 * Tytuł wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

if ( is_singular() ) {
	printf(
		'<h1 class="title">%s</h1>',
		esc_html( get_the_title() )
	);
} else {
	printf(
		'<h2 class="title"><a class="title__link" href="%s">%s</a></h2>',
		esc_url( get_permalink() ),
		esc_html( get_the_title() )
	);
}
