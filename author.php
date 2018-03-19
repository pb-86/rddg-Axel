<?php get_header(); ?>

<main>
  <header>
    <h1><?php the_author(); ?></h1>
    <?php the_author_meta( 'description' ); ?>
  </header>
  <?php
    if( have_posts() ) :
      while( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/content' );
      endwhile;
    endif;
  ?>
  <footer>
    <h1><?php _e( 'See also other authors', 'axel' ); ?></h1>
    <?php wp_list_authors(); ?>
  </footer>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
