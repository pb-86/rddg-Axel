<?php
/**
 * The template for displaing authors page
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.58
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Authors name -->
	<h2 class="axel-main__title">
		<?php the_author(); ?>
	</h2>

	<!-- Authors biography -->
	<div class="axel-main__authors-bio">
		<?php the_author_meta( 'description' ); ?>
	</div>

	<!-- Excerpts of authors posts -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

	<!-- Other authors list -->
	<div class="axel-main__authors-list">
		<?php
		esc_html_e( 'Sprawdź innych autorów', 'axel' );
		wp_list_authors();
		?>
	</div>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
