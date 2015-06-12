<?php

function add_custom_theme_style() {
    $base_color = get_theme_mod( 'base_color', '#000' );
    $base_color_hover = get_theme_mod( 'base_color_hover', '#000' );
    $base_color_text = get_theme_mod( 'base_color_text', '#fff' );
    $body_background_color = get_theme_mod( 'body_background_color', '#eee' );
    $body_background_img = get_theme_mod( 'body_background_img' );
    $opt_in_color_text = get_theme_mod( 'opt_in_color_text', '#fff' );
    $opt_in_color_background = get_theme_mod( 'opt_in_color_background', '#000' );
    $opt_in_img_background = get_theme_mod( 'opt_in_img_background' );
?>

    <style>
    body { background: <?php echo $body_background_color; ?> url('<?php echo $body_background_img; ?>') center; }

    .header { border-top-color: <?php echo $base_color; ?>; }

    a { color: <?php echo $base_color; ?>; }

    a:hover { color: <?php echo $base_color_hover; ?>; }

     ::-moz-selection {
        color: <?php echo $base_color_text; ?>;
        text-shadow: none;
        background: <?php echo $base_color; ?>;
    }

    ::selection {
        color: <?php echo $base_color_text; ?>;
        text-shadow: none;
        background: <?php echo $base_color; ?>;
    }

    .landing-bar {
        background: <?php echo $opt_in_color_background; ?> url('<?php echo $opt_in_img_background; ?>') center center repeat;
    }

    .landing-bar .slogan,
    .landing-bar .apoio {
        color: <?php echo $opt_in_color_text; ?>;
    }

    .posts-wrap article .cat-wrap ul li a:hover {
        color: <?php echo $base_color_text; ?>;
        background: <?php echo $base_color; ?>;
    }

    .posts-wrap article .post-title a:hover{ color: <?php echo $base_color; ?>; }

    .paginacao .page-numbers.current {
        color: <?php echo $base_color_text; ?>;
        background: <?php echo $base_color; ?> !important;
    }

    .widget ul li a:hover { color: <?php echo $base_color; ?>; }

    .cat-sidemenu-wrap ul li a {
        color: #e74c3c;
    }

    .cat-sidemenu-wrap ul li a:hover {
        color: #e74c3c;
    }

    @media (min-width: 992px) {
        .header .menu-wrap ul li a:hover { color: <?php echo $base_color; ?>; }
    }
    </style>

<?php
}
add_action( 'wp_head', 'add_custom_theme_style' );
