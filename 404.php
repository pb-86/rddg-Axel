<?php get_header(); ?>

<main role="main">
  <?php _e( "That page can't be found", 'axel' ); ?>
  <?php _e( 'Try a search.', 'axel' ); ?>
  <?php get_search_form(); ?>
</main>

<aside role="complementary">
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
