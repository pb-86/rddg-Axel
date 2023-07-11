<?php
/**
 * Tytuł wpisu z odnośnikiem
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<h2 class="title"><a class="title__link" href="%s">%s</a></h2>',
	esc_url( get_permalink() ),
	esc_html( get_the_title() )
);
