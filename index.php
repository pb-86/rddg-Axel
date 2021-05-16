<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.36
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-wrapper">

		<div class="axel-main__content">
			<h2 class="axel-main__title"><?php esc_html_e( 'Recent posts', 'axel' ); ?></h2>
			<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>
		</div>

		<?php get_sidebar(); ?>

	</div>
</main>

<?php get_footer(); ?>
