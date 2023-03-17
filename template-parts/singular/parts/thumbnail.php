<?php
/**
 * Data dodania wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<?php if ( has_post_thumbnail() ) : ?>

	<figure class="thumbnail">

		<?php
		if ( ! is_singular() ) {
			printf(
				'<a class="thumbnail__link" href="%s" tabindex="-1"><img class="thumbnail__image" src="%s" alt=""></a>',
				esc_url( get_permalink() ),
				esc_url( get_the_post_thumbnail_url( null, 'axel-excerpt-thumbnail' ) )
			);
		} else {
			printf(
				'<img class="thumbnail__image" src="%s" alt="">',
				esc_url( get_the_post_thumbnail_url( null, 'axel-singular-thumbnail' ) )
			);
		}
		?>

		<?php if ( is_singular() && get_the_post_thumbnail_caption() ) : ?>
			<figcaption class="thumbnail__caption">
				<?php the_post_thumbnail_caption(); ?>
			</figcaption>
		<?php endif; ?>

	</figure>

<?php else : ?>

	<div class="placeholder"></div>

<?php endif; ?>
