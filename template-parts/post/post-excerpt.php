<?php
/**
 * The template part for displaying posts excerpts in loop
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<time datetime="<?php the_time( 'Y-m-d H:i' ); ?>"><?php the_time( 'j F Y' ); ?></time>
		<?php the_title( '<h2><a href="' . get_permalink() . '">', '</a></h2>' ); ?>
		<span><?php esc_html_e( 'Written by: ', 'axel' ); ?><?php the_author_posts_link(); ?></span>
	</header>
	<?php the_content( 'Read more' ); ?>
	<footer>
		<?php if ( is_single() ) : ?>
			<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Back to home page', 'axel' ); ?></a>
		<?php endif; ?>
	</footer>
</article>
