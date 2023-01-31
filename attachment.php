<?php
/**
 * Szablon załączników do wpisów.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">

	<!-- Tytuł -->
	<h1 class="main__title">
		<?php the_title(); ?>
	</h1>

	<!-- Załącznik -->
	<?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

</main>

<?php
get_sidebar();
get_footer();
