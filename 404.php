<?php
/**
 * File comment
 *
 * @package WordPress
 */

get_header();
?>

<main role="main">
	<?php
	esc_html_e( "That page can't be found. Try to search.", 'axel' );
	get_search_form();
	?>
</main>

<aside role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
