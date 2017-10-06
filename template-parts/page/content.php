<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php the_title( '<h1>', '</h1>' ); ?>
  </header>
  <?php the_content(); ?>
</article>
