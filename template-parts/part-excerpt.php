<?php
/**
 * The template part for displaying posts excerpts in loop
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.11
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-article axel-article--excerpt' ); ?>>
	<header class="axel-article__header">
		<h2 class="axel-article__title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<time class="axel-article__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( get_option( 'date_format' ) ); ?>
		</time>
		<div class="axel-article__author">
			<?php esc_html_e( 'Written by: ', 'axel' ); ?><?php the_author_posts_link(); ?>
		</div>
	</header>

	<div class="axel-article__content">
		<?php the_content( 'Read more' ); ?>
	</div>
</article>
