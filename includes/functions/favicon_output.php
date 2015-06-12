<?php
function favicon_output() {
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon-57x57.png" sizes="57x57">';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon-114x114.png" sizes="114x114">';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon-72x72.png" sizes="72x72">';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon-144x144.png" sizes="144x144">';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon-60x60.png" sizes="60x60">';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon-120x120.png" sizes="120x120">';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon-76x76.png" sizes="76x76">';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon-152x152.png" sizes="152x152">';
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon-196x196.png" sizes="196x196" type="image/png">';
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon-160x160.png" sizes="160x160" type="image/png">';
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon-96x96.png" sizes="96x96" type="image/png">';
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon-16x16.png" sizes="16x16" type="image/png">';
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon-32x32.png" sizes="32x32" type="image/png">';
    echo '<meta name="msapplication-TileColor" content="#b4d455">';
    echo '<meta name="msapplication-TileImage" content="' . get_template_directory_uri() . '/mstile-144x144.png">';
}
add_action( 'wp_head', 'favicon_output' );
