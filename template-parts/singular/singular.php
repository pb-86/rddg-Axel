<?php
/**
 * Szablon dla wpisów i stron.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-singular' ); ?>>

	<!-- Nagłówek -->
	<header class="axel-singular__header">
		<!-- Data -->
		<time class="axel-singular__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( get_option( 'date_format' ) ); ?>,
		</time>

		<!-- Autor -->
		<div class="axel-singular__author">
			<?php the_author_posts_link(); ?>
		</div>

		<!-- Tytuł -->
		<h2 class="axel-singular__title">
			<?php the_title(); ?>
		</h2>

		<!-- Obrazek wyróżniający -->
		<figure class="axel-singular__thumbnail">
			<?php the_post_thumbnail( 'axel-singular-thumbnail' ); ?>
			<figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
		</figure>
	</header>

	<!-- Treść -->
	<div class="axel-singular__content">
		<?php the_content(); ?>
	</div>

	<!-- Stopka -->
	<footer class="axel-singular__footer">
		<!-- Odnośnik "Wróc do strony głównej" -->
		<a class="axel-singular__home-link" href="<?php echo esc_url( home_url() ); ?>">
			<?php esc_html_e( 'Wróć do strony głównej', 'axel' ); ?>
		</a>
	</footer>

</article>
