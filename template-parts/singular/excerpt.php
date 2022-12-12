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
		<!-- Obrazek wyróżniający -->
		<a class="axel-excerpt__thumbnail-link" href="<?php the_permalink(); ?>" tabindex="-1">
			<?php the_post_thumbnail( 'axel-excerpt-thumbnail', array( 'class' => 'axel-excerpt__thumbnail' ) ); ?>
		</a>

		<!-- Autor -->
		<div class="axel-excerpt__author">
			<?php the_author_posts_link(); ?>, 
		</div>

		<!-- Data -->
		<time class="axel-excerpt__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php echo esc_html( human_time_diff( get_post_timestamp(), time() ) ); ?> temu
		</time>

		<!-- Tytuł -->
		<h2 class="axel-excerpt__title">
			<a class="axel-excerpt__title-link" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
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
