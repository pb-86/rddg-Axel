<?php
/**
 * The template for displaing authors page
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.19
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
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

<aside class="axel-sidebar">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
