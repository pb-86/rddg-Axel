<?php
/**
 * Szablon strony o autorach.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Nazwa autora -->
	<h2 class="axel-main__title">
		<?php the_author(); ?>
	</h2>

	<!-- Biografia -->
	<div class="axel-main__authors-bio">
		<?php the_author_meta( 'description' ); ?>
	</div>

	<!-- Skróty wpisów autora -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

	<!-- Lista pozostałych autorów -->
	<div class="axel-main__authors-list">
		<?php
		esc_html_e( 'Sprawdź innych autorów', 'axel' );
		wp_list_authors();
		?>
	</div>

</main>

<?php
get_sidebar();
get_footer();
