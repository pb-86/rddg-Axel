<?php
/**
 * Przycisk drukowania strony
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<div class="print"><box-icon name="printer" aria-hidden="true"></box-icon><button class="print__button button-like-link js-print">%s</button></div>',
	esc_html__( 'Drukuj stronę', 'axel' )
);
