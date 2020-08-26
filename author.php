<?php
/**
 * The template for displaing authors page
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.16
 */

get_header();
?>

<main class="axel-main" role="main">
	<h2>
		<?php the_author(); ?>
	</h2>
	<?php the_author_meta( 'description' ); ?>

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'templates/parts/singular' );
		}
	}
	?>

	<?php
	esc_html_e( 'See also other authors', 'axel' );
	wp_list_authors();
	?>
</main>

<aside class="axel-sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
