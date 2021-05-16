<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.36
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-wrapper">

		<div class="axle-main__content">
			<h2 class="axel-main__title"><?php esc_html_e( 'Search results', 'axel' ); ?></h2>
			<div class="axel-main__search-info">
				<?php printf( esc_html( 'You searched for: %s' ), '<strong>' . get_search_query() . '</strong>' ); ?>
			</div>
			<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>
		</div>

		<?php get_sidebar(); ?>

	</div>
</main>

<?php get_footer(); ?>
