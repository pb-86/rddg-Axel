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
			get_template_part( 'template-parts/excerpts/excerpt', 'search' );
		} else {
			get_template_part( 'template-parts/excerpts/excerpt', 'default' );
		}
	}

	echo '</div>';

	the_posts_pagination(
		array(
			'prev_text' => '<div class="icon-prev">' . esc_attr__( 'Poprzednia strona', 'axel' ) . '</div>',
			'next_text' => '<div class="icon-next">' . esc_attr__( 'Następna strona', 'axel' ) . '</div>',
		)
	);
} else {
	get_template_part( 'template-parts/excerpts/no-posts' );
}
