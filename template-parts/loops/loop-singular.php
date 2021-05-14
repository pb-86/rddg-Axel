<?php
/**
 * Loop for singles and pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.29
 */

while ( have_posts() ) {
	the_post();
	get_template_part( 'template-parts/singular/singular' );
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	wp_link_pages();
}
