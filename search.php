<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.22
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<article class="axel-search">
		<header class="axel-search__header">
			<h2 class="axel-search__title">
				<?php esc_html_e( 'Search results', 'axel' ); ?>
			</h2>
			<span class="axel-search__query">
				<?php printf( esc_html( 'You searched for: %s' ), '<strong>' . get_search_query() . '</strong>' ); ?>
			</span>
		</header>
	</article>
	<?php get_template_part( 'templates/loops/loop', 'excerpt' ); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
