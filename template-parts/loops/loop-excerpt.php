<?php
/**
 * Główna pętla
 *
 * @package WordPress
 * @subpackage Axel
 */

if ( have_posts() ) {
	echo '<div class="axel-excerpts">';
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/posts/excerpt' );
	}
	echo '</div>';
	the_posts_pagination();
} else {
	get_template_part( 'template-parts/posts/no-posts' );
}
