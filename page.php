<?php get_header(); ?>

<main>
  <?php
    while( have_posts() ) : the_post();
      get_template_part( 'template-parts/page/content' );
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
      wp_link_pages();
    endwhile;

    comment_form();
    wp_list_comments();
  ?>
</main>

<aside>
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
