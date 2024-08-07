<?php
/**
 * Link do strony autora
 *
 * @package WordPress
 * @subpackage Axel
 */

printf(
	'<a class="post-author" href="%s"><span class="screen-reader-text">%s</span> %s</a>',
	esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
	esc_html__( 'Zobacz inne wpisy autora', 'axel' ),
	esc_html( get_the_author_meta( 'display_name' ) )
);
