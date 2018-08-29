<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <a href="<?php echo esc_url( home_url() ); ?>">
      <img class="logo" src="" alt="Reddog Systems">
    </a>
    <nav>
      <?php wp_nav_menu(); ?>
    </nav>
    <?php get_search_form(); ?>
  </header>
