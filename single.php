<?php get_header(); ?>

<main>
  <?php
    while( have_posts() ) : the_post();
      get_template_part( 'template-parts/post/content' );
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    endwhile;

    comment_form();
    wp_list_comments();
    the_comments_pagination();
  ?>
</main>

<aside>
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
