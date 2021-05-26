<?php
/**
 * The template part for displaying post or page content
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.47
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-singular' ); ?>>
	<header class="axel-singular__header">
		<time class="axel-singular__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( get_option( 'date_format' ) ); ?>,
		</time>
		<div class="axel-singular__author">
			<?php the_author_posts_link(); ?>
		</div>
		<h2 class="axel-singular__title">
			<?php the_title(); ?>
		</h2>
		<figure class="axel-singular__thumbnail">
			<?php the_post_thumbnail( 'axel-singular-thumbnail' ); ?>
			<figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
		</figure>
	</header>

	<div class="axel-singular__content">
		<?php the_content(); ?>
	</div>

	<footer class="axel-singular__footer">
		<a class="axel-singular__home-link" href="<?php echo esc_url( home_url() ); ?>">
			<?php esc_html_e( 'Back to home page', 'axel' ); ?>
		</a>
	</footer>
</article>
