<?php
/**
 * The template part for displaying posts excerpts in loop
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.46
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-excerpt' ); ?>>
	<header class="axel-excerpt__header">
		<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'axel-excerpt__thumbnail' ) ); ?>
		<time class="axel-excerpt__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( get_option( 'date_format' ) ); ?>,
		</time>
		<div class="axel-excerpt__author">
			<?php the_author_posts_link(); ?>
		</div>
		<h3 class="axel-excerpt__title">
			<a class="axel-excerpt__title-link" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
	</header>

	<div class="axel-excerpt__content">
		<?php the_content( '' ); ?>
		<div class="axel-excerpt__read-more">
			<a class="axel-excerpt__read-more_link" href="<?php the_permalink(); ?>">
				<?php esc_html_e( 'Read more', 'axel' ); ?>
				<span class="screen-reader-text">
					<?php
					esc_html_e( 'about ', 'axel' );
					the_title();
					?>
				</span>
			</a>
		</div>
	</div>
</article>
