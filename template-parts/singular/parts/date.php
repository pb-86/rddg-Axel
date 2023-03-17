<?php
/**
 * Data dodania wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<time class="date" datetime="%s">%s %s</time>',
	esc_attr( get_the_time( 'Y-m-d H:i' ) ),
	esc_html( human_time_diff( get_post_timestamp(), time() ) ),
	esc_html__( ' temu', 'axel' )
);
