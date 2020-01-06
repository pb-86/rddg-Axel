<?php
/**
 * The template part for displaying page or content
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.9.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-article' ); ?>>
	<header class="axel-article__header">
		<time class="axel-article__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( 'j F Y' ); ?>
		</time>
		<h1 class="axel-article__title">
			<?php the_title(); ?>
		</h1>
		<div class="axel-article__author">
			<?php esc_html_e( 'Written by: ', 'axel' ); ?><?php the_author_posts_link(); ?>
		</div>
	</header>

	<div class="axel-article__content">
		<?php the_content(); ?>
	</div>

	<?php if ( is_single() ) : ?>
		<footer class="axel-article__footer">	
			<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Back to home page', 'axel' ); ?></a>	
		</footer>
	<?php endif; ?>
</article>
