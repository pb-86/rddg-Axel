<?php get_header(); ?>

<main>
  <header>
    <h1><?php _e( "That page can't be found", 'axel' ); ?></h1>
  </header>
  <p>
    <?php _e( 'Try a search.', 'axel' ); ?>
    <?php get_search_form(); ?>
  </p>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
