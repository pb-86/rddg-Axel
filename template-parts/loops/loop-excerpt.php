<?php
/**
 * Główna pętla
 *
 * @package WordPress
 * @subpackage Axel
 */

if ( have_posts() ) {
	echo '<div class="excerpts">';
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/singular/excerpt' );
	}
	echo '</div>';
	the_posts_pagination();
} else {
	get_template_part( 'template-parts/loops/no-posts' );
}
