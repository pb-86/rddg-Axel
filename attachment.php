<?php
/**
 * File comment
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.23
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<h2><?php the_title(); ?></h2>
	<?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
