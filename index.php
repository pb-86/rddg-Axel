<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.22
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<h2><?php esc_html_e( 'Recent posts', 'axel' ); ?></h2>
	<?php get_template_part( 'templates/loops/loop', 'excerpt' ); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
