<?php
/**
 * Tytuł wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<h1 class="title">%s</h1>',
	esc_html( get_the_title() )
);
