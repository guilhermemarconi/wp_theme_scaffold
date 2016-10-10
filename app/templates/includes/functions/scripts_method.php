<?php

function scripts_method() {
  $url = get_template_directory_uri();
  $is_localhost = strpos( $url, '.dev' ) > 0 || strpos( $url, 'localhost' ) > 0 || strpos( $url, '192.168' ) > 0;

  // CSS

  /*
   * Theme Fonts
   * Uncomment and put the fonts CSS here
   * and then add 'theme_fonts' to
   * 'theme_style' dependencies array
   * (line 26)
   */

  // wp_enqueue_style(
  //   'theme_fonts',
  //   '//fonts.googleapis.com/css?family=Gentium+Book+Basic:400italic,700,400,700italic|Raleway:900',
  //   array(),
  //   '1.0.0'
  // );
  wp_enqueue_style(
    'theme_style',
    get_stylesheet_uri(),
    array(),
    '0.1.0'
  );

  // JS
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script(
    'fitvids',
    get_template_directory_uri() . '/js/fitvids.js',
    'jquery',
    '1.5.25',
    true
  );
  wp_enqueue_script(
    'scripts',
    get_template_directory_uri() . '/js/scripts.js',
    'jquery',
    null,
    true
  );
  if ( $is_localhost ) {
    wp_enqueue_script(
      'livereload',
      '//localhost:35729/livereload.js',
      array(),
      null,
      true
    );
  }
}
add_action( 'wp_enqueue_scripts', 'scripts_method' );
