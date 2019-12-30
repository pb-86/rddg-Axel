<?php
/**
 * The template part for displaying posts excerpts in loop
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.9
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-article axel-article--excerpt' ); ?>>
	<header>
		<time datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( 'j F Y' ); ?>
		</time>
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<div>
			<?php esc_html_e( 'Written by: ', 'axel' ); ?><?php the_author_posts_link(); ?>
		</div>
	</header>

	<?php the_content( 'Read more' ); ?>
</article>
