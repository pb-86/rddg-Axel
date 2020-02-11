<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.11
 */

get_header();
?>

<main class="axel-main" role="main">
	<article class="axel-search">
		<header class="axel-search__header">
			<h1 class="axel-search__title">
				<?php esc_html_e( 'Search results', 'axel' ); ?>
			</h1>
			<span class="axel-search__query">
				<?php printf( esc_html( 'You searched for: %s' ), '<strong>' . get_search_query() . '</strong>' ); ?>
			</span>
		</header>
	</article>

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/part', 'excerpt' );
		}
		the_posts_pagination();
	} else {
		get_template_part( 'template-parts/part', 'noposts' );
	}
	?>
</main>

<aside class="axel-sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
