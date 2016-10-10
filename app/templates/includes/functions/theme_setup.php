<?php

function theme_setup() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', array( 'video' ) );
  add_theme_support( 'title-tag' );
  add_theme_support( 'woocommerce' );
  add_theme_support( 'customize-selective-refresh-widgets' );

  add_theme_support( 'custom-background', array() );

  add_theme_support( 'custom-logo', array(
    // 'height'      => /* logo_height */,
    // 'width'       => /* logo_width */,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ) );

  // add_image_size( 'post_loop', 960, 461, true );
  // add_image_size( 'slide', 756, 400, true );

  register_nav_menus( array(
    'header_top' => 'Main Menu',
    'categories' => 'Categories Menu',
    'mobile'     => 'Mobile Menu',
  ) );

  register_sidebar( array(
    'name'          => 'Main Sidebar',
    'id'            => 'main_sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget__title">',
    'after_title'   => '</h5>'
  ) );

  // Activates this sidebar only if WooCommerce is installed
  if ( function_exists( 'woocommerce' ) ) {
    register_sidebar( array(
      'name'          => 'Shop Sidebar',
      'id'            => 'sidebar_shop',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget__title">',
      'after_title'   => '</h5>'
    ) );
  }
}
add_action( 'after_setup_theme', 'theme_setup' );
