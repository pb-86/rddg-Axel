<?php
/**
 * Pętla dla wpisów i stron.
 *
 * @package WordPress
 * @subpackage Axel
 */

while ( have_posts() ) {
	the_post();

	if ( is_single() ) {
		get_template_part( 'template-parts/single/single' );
	}

	if ( is_page() ) {
		get_template_part( 'template-parts/page/page' );
	}

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	wp_link_pages();
}
