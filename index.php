<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.2
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Title -->
	<h2 class="screen-reader-text">
		<?php esc_html_e( 'Najnowsze wpisy', 'axel' ); ?>
	</h2>

	<!-- Recent posts excerpts -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

</main>

<?php
get_sidebar();
get_footer();
