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

		if ( is_search() ) {
			get_template_part( 'template-parts/single/excerpt', 'search' );
		} else {
			get_template_part( 'template-parts/single/excerpt' );
		}
	}

	echo '</div>';
	the_posts_pagination(
		array(
			'prev_text' => '<div class="icon-prev"><span class="screen-reader-text">' . esc_attr__( 'Poprzednia strona', 'axel' ) . '</span></div>',
			'next_text' => '<div class="icon-next"><span class="screen-reader-text">' . esc_attr__( 'Następna strona', 'axel' ) . '</span></div>',
		)
	);
} else {
	get_template_part( 'template-parts/loops/no-posts' );
}
