<?php
/**
 * The template for displaying single post
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
		get_template_part( 'partials/post/post', 'default' );
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
	?>
</main>

<aside role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
