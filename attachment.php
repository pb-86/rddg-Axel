<?php
/**
 * Szablon załączników do wpisów.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Tytuł -->
	<h2 class="axel-main__title">
		<?php the_title(); ?>
	</h2>

	<!-- Załącznik -->
	<?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

</main>

<?php
get_sidebar();
get_footer();
