<?php
/**
 * The template for displaing authors page
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.25
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-main__content">
		<h2><?php the_author(); ?></h2>
		<?php
		the_author_meta( 'description' );
		get_template_part( 'templates/loops/loop', 'excerpt' );
		esc_html_e( 'See also other authors', 'axel' );
		wp_list_authors();
		?>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
