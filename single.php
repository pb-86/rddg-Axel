<?php
/**
 * The template for displaying single post
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.1
 */

get_header();
?>

<main role="main">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'partials/post/default' );
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;

	comment_form();
	wp_list_comments();
	the_comments_pagination();
	?>
</main>

<aside role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
