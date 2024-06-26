<?php
/**
 * Przycisk drukowania strony
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<button class="print button-like-link js-print">%s</button>',
	esc_html__( 'Drukuj stronę', 'axel' )
);
