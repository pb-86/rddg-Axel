<?php

load_theme_textdomain( 'axel', get_template_directory() . '/languages' );

if ( ! isset( $content_width ) ) $content_width = 900;

function axel_add_editor_styles() {
  add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'axel_add_editor_styles' );

add_theme_support( 'automatic-feed-links' );
add_theme_support( "custom-background" );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'editor-style' );
add_theme_support( 'html5' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

register_nav_menus( array(
  'main'    => __( 'Main menu', 'axel' ),
) );

add_action( 'widgets_init', 'axel_widgets_init' );
function axel_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'axel' ),
    'id'            => 'sidebar',
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>',
  ));
}
