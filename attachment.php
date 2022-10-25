<?php
/**
 * File comment
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.2
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Attachment title -->
	<h2 class="axel-main__title">
		<?php the_title(); ?>
	</h2>

	<!-- Attachment -->
	<?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

</main>

<?php
get_sidebar();
get_footer();
