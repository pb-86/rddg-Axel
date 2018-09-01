<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <a href="<?php echo esc_url( home_url() ); ?>">
      <img class="logo" src="" alt="Reddog Systems">
    </a>
    <nav>
      <?php
        /**
         * This function displays current menu from list registered in
         * file: includes/menus.php
         * @link https://developer.wordpress.org/reference/functions/wp_nav_menu
         */
        $args = array(
          'menu' => 'header_menu',
          'menu_id' => '',
          'menu_class' => '',
          'container' => ''
        );
        wp_nav_menu( $args );
      ?>
    </nav>
    <?php
      /**
       * This functino displays search form.
       * @link https://developer.wordpress.org/reference/functions/get_search_form
       */
      get_search_form();
    ?>
  </header>
