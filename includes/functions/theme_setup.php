<?php

function theme_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'video' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'woocommerce' );

    add_image_size( 'post_loop', 960, 461, true );
    add_image_size( 'slide', 756, 400, true );

    register_nav_menus( array(
        'header_top' => 'Menu institucional',
        'categories' => 'Menu de categorias',
        'mobile'     => 'Menu mobile',
    ) );

    register_sidebar( array(
        'name'          => 'Barra Lateral',
        'id'            => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget widget--%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget__title">',
        'after_title'   => '</h5>'
    ) );
    register_sidebar( array(
        'name'          => 'Barra Lateral Loja',
        'id'            => 'shop',
        'before_widget' => '<div id="%1$s" class="widget widget--%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget__title">',
        'after_title'   => '</h5>'
    ) );
}
add_action( 'after_setup_theme', 'theme_setup' );
