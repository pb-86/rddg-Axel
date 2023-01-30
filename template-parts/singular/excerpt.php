<?php
/**
 * Skrót wpisu.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-excerpt' ); ?>>

	<!-- Nagłówek -->
	<header class="axel-excerpt__header">

		<?php
		get_template_part( 'template-parts/singular/parts/thumbnail' );
		get_template_part( 'template-parts/singular/parts/author' );
		get_template_part( 'template-parts/singular/parts/date' );
		get_template_part( 'template-parts/singular/parts/title' );
		?>

	</header>

	<!-- Treść skrótu -->
	<div class="axel-excerpt__content">
		<?php the_content( '' ); ?>
	</div>

	<!-- Przycisk "Czytaj dalej" -->
	<div class="axel-excerpt__read-more">
		<a class="axel-excerpt__read-more_link" href="<?php the_permalink(); ?>" aria-label="<?php axel_the_read_more_label( get_the_ID() ); ?>" tabindex="-1">
			<?php esc_html_e( 'Czytaj dalej', 'axel' ); ?>
		</a>
	</div>
</article>
