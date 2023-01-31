<?php
/**
 * Data dodania wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<?php if ( has_post_thumbnail() ) : ?>

	<figure class="singular__thumbnail">

		<?php
		if ( ! is_singular() ) {
			printf(
				'<a href="%s"><img src="%s" alt=""></a>',
				esc_url( get_permalink() ),
				esc_url( get_the_post_thumbnail_url( null, 'axel-excerpt-thumbnail' ) )
			);
		} else {
			printf(
				'<img src="%s" alt="">',
				esc_url( get_the_post_thumbnail_url( null, 'axel-singular-thumbnail' ) )
			);
		}
		?>

		<?php if ( is_singular() && get_the_post_thumbnail_caption() ) : ?>
			<figcaption>
				<?php the_post_thumbnail_caption(); ?>
			</figcaption>
		<?php endif; ?>

	</figure>

<?php endif; ?>
