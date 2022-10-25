<?php
/**
 * The template part for displaying posts excerpts in loop
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.59
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-excerpt' ); ?>>

	<!-- Excerpt header -->
	<header class="axel-excerpt__header">
		<!-- Thumbnail -->
		<a class="axel-excerpt__thumbnail-link" href="<?php the_permalink(); ?>" tabindex="-1">
			<?php the_post_thumbnail( 'axel-excerpt-thumbnail', array( 'class' => 'axel-excerpt__thumbnail' ) ); ?>
		</a>

		<!-- Date -->
		<time class="axel-excerpt__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( get_option( 'date_format' ) ); ?>,
		</time>

		<!-- Author -->
		<div class="axel-excerpt__author">
			<?php the_author_posts_link(); ?>
		</div>

		<!-- Title -->
		<h3 class="axel-excerpt__title">
			<a class="axel-excerpt__title-link" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
	</header>

	<!-- Excertpt content -->
	<div class="axel-excerpt__content">
		<?php the_content( '' ); ?>

		<!-- Read more link -->
		<div class="axel-excerpt__read-more">
			<a class="axel-excerpt__read-more_link" href="<?php the_permalink(); ?>" tabindex="-1">
				<?php esc_html_e( 'Czytaj dalej', 'axel' ); ?>
				<span class="screen-reader-text">
					<?php
					esc_html_e( 'wpis pt. ', 'axel' );
					the_title();
					?>
				</span>
			</a>
		</div>
	</div>
</article>
