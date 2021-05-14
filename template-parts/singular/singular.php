<?php
/**
 * The template part for displaying post or page content
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.29
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>
	<header>
		<h2><?php the_title(); ?></h2>
		<time datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( get_option( 'date_format' ) ); ?>
		</time>
		<div>
			<?php esc_html_e( 'Written by: ', 'axel' ); ?>
			<?php the_author_posts_link(); ?>
		</div>
	</header>

	<div>
		<?php the_content(); ?>
	</div>

	<footer>
		<a href="<?php echo esc_url( home_url() ); ?>">
			<?php esc_html_e( 'Back to home page', 'axel' ); ?>
		</a>
	</footer>
</article>
