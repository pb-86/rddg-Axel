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
	<div class="wrapper">

		<?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

		<div class="post-meta">
			<?php get_template_part( 'template-parts/singular/back-to-home' ); ?>
		</div>

	</div>
</main>

<?php
get_sidebar();
get_footer();
