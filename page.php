<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.2
 */

get_header();
?>

<main role="main">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'partials/page/page', 'default' );
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		wp_link_pages();
	endwhile;
	?>
</main>

<aside role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
