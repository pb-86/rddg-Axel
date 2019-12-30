<?php
/**
 * The template part for displaying page or content
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.9
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-article' ); ?>>
	<header>
		<time datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( 'j F Y' ); ?>
		</time>
		<h1>
			<?php the_title(); ?>
		</h1>
		<div>
			<?php esc_html_e( 'Written by: ', 'axel' ); ?><?php the_author_posts_link(); ?>
		</div>
	</header>

	<?php the_content(); ?>

	<?php if ( is_single() ) : ?>
		<footer>	
			<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Back to home page', 'axel' ); ?></a>	
		</footer>
	<?php endif; ?>
</article>
