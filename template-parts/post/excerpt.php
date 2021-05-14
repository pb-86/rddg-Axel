<?php
/**
 * The template part for displaying posts excerpts in loop
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.29
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>
	<header>
		<h3>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<time datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
			<?php the_time( get_option( 'date_format' ) ); ?>
		</time>
		<div>
			<?php esc_html_e( 'Written by: ', 'axel' ); ?>
			<?php the_author_posts_link(); ?>
		</div>
	</header>

	<div>
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
