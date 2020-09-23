<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.19
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
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'templates/parts/excerpt' );
		}
		the_posts_pagination();
	} else {
		get_template_part( 'templates/parts/noposts' );
	}
	?>
</main>

<aside class="axel-sidebar">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
