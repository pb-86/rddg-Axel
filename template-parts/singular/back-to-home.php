<?php
/**
 * Treść wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<div class="back-to-home"><a class="back-to-home__link" href="%s">%s</a>',
	esc_url( home_url() ),
	esc_html__( 'Wróć do strony głównej', 'axel' )
);
