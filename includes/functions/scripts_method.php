<?php

function scripts_method() {
    $url = parse_url( get_template_directory_uri() );
    $localhost = $url['host'] == 'dev' || $url['host'] == 'localhost:3000' || $url['host'] == '192.168.0.10:3000';

    // CSS
    wp_enqueue_style(
        'theme_fonts',
        '//fonts.googleapis.com/css?family=Gentium+Book+Basic:400italic,700,400,700italic|Raleway:900',
        array(),
        '1.0.0'
    );
    wp_enqueue_style(
        'theme_style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // JS
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script(
        'fitvids',
        get_template_directory_uri() . '/js/min/fitvids.min.js',
        'jquery',
        '1.5.25',
        true
    );
    wp_enqueue_script(
        'scripts',
        get_template_directory_uri() . '/js/min/scripts.min.js',
        'jquery',
        '1.0.0',
        true
    );
    if ( $localhost ) {
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
