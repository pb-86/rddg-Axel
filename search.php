<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.29
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axle-main__content">
		<h2><?php esc_html_e( 'Search results', 'axel' ); ?></h2>
		<?php printf( esc_html( 'You searched for: %s' ), '<strong>' . get_search_query() . '</strong>' ); ?>
		<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
