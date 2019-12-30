<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.9
 */

get_header();
?>

<main class="axel-main" role="main">
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
