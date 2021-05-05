<?php
/**
 * The template part for displaying posts excerpts in loop
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.20
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-article axel-article--excerpt' ); ?>>
	<header class="axel-article__header">
		<h3 class="axel-article__title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<time class="axel-article__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( get_option( 'date_format' ) ); ?>
		</time>
		<div class="axel-article__author">
			<?php esc_html_e( 'Written by: ', 'axel' ); ?><?php the_author_posts_link(); ?>
		</div>
	</header>

	<div class="axel-article__content">
		<?php the_content( '' ); ?>
		<a href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Read more', 'axel' ); ?>
			<span class="screen-reader-text">
				<?php
				esc_html_e( 'about ', 'axel' );
				the_title();
				?>
			</span>
		</a>
	</div>
</article>
