<?php get_header(); ?>

<main>
  <?php
    the_author();
    the_author_meta( 'description' );

    if( have_posts() ) :
      while( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/content' );
      endwhile;
    endif;

    _e( 'See also other authors', 'axel' );
    wp_list_authors();
  ?>
</main>

<aside>
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
