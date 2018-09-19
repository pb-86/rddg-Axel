<?php get_header(); ?>

<main role="main">
  <?php
    _e( "That page can't be found. Try to search.", 'axel' );
    get_search_form();
  ?>
</main>

<aside role="complementary">
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
