<?php
/**
 * Treść wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<div class="back-to-home"><box-icon name="home"></box-icon><a class="back-to-home__link" href="%s" rel="home">%s</a></div>',
	esc_url( home_url() ),
	esc_html__( 'Wróć do strony głównej', 'axel' )
);
