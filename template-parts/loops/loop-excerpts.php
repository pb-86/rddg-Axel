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
			'prev_text' => '<box-icon name="left-arrow-alt" aria-hidden="true" aria-label="' . esc_attr__( 'Poprzednia strona', 'axel' ) . '"></box-icon>',
			'next_text' => '<box-icon name="right-arrow-alt" aria-hidden="true" aria-label="' . esc_attr__( 'Następna strona', 'axel' ) . '"></box-icon>',
		)
	);
} else {
	get_template_part( 'template-parts/loops/no-posts' );
}
