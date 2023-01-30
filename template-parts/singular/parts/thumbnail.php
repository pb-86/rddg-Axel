<?php
/**
 * Data dodania wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

if ( has_post_thumbnail() ) {
	printf(
		'<a class="axel-excerpt__thumbnail-link" href="%s" tabindex="-1">%s</a>',
		esc_url( get_permalink() ),
		get_the_post_thumbnail( null, 'axel-excerpt-thumbnail', array( 'class' => 'axel-excerpt__thumbnail' ) )
	);
}
