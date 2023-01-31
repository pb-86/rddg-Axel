<?php
/**
 * Treść wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<a class="back-to-home" href="%s">%s</a>',
	esc_url( home_url() ),
	esc_html__( 'Wróć do strony głównej', 'axel' )
);
