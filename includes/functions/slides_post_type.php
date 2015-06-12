<?php

add_action( 'init', 'slides_post_type' );
function slides_post_type() {
    register_post_type( 'slide', array(
        'label'           => 'Slides',
        'description'     => '',
        'public'          => true,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'capability_type' => 'post',
        'map_meta_cap'    => true,
        'hierarchical'    => false,
        'rewrite'         => array(
            'slug'       => 'slides',
            'with_front' => true
        ),
        'query_var'       => true,
        'has_archive'     => true,
        'menu_position'   => 5,
        'menu_icon'       => 'dashicons-format-gallery',
        'supports'        => array( 'title' ),
        'labels'          => array (
            'name'               => 'Slides',
            'singular_name'      => 'Slide',
            'menu_name'          => 'Slides',
            'add_new'            => 'Adicionar novo',
            'add_new_item'       => 'Adicionar novo Slide',
            'edit'               => 'Editar',
            'edit_item'          => 'Editar Slide',
            'new_item'           => 'Novo Slide',
            'view'               => 'Ver Slide',
            'view_item'          => 'Ver Slide',
            'search_items'       => 'Buscar Slides',
            'not_found'          => 'Nenhum Slide encontrado',
            'not_found_in_trash' => 'Nenhum Slide encontrado na Lixeira',
            'parent'             => 'Parent Slide',
        )
    ) );
}
