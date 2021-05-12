<?php
/**
 * Default loop displaying excerpts
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.28
 */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'templates/single/excerpt' );
	}
	the_posts_pagination();
} else {
	get_template_part( 'templates/single/noposts' );
}
