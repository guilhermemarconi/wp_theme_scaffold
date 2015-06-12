<?php

require_once( ABSPATH . WPINC . '/class-wp-customize-control.php' );
require_once( TEMPLATEPATH . '/includes/classes/Textarea_Customize_Control.php' );
require_once( TEMPLATEPATH . '/includes/classes/Categories_Checkbox_Control.php' );

function theme_customizer( $wp_customize ) {
    $wp_customize->remove_section( 'static_front_page' );

    /*
     * Upload da logo
     * @logo
     */
    $wp_customize->add_section( 'theme_custom_logo', array(
        'title'       => 'Logo',
        'priority'    => 21,
    ) );

    // logo
    $wp_customize->add_setting( 'logo_upload', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_upload', array(
        'section'   => 'theme_custom_logo',
        'settings'  => 'logo_upload',
        'transport' => 'postMessage',
    ) ) );





    /*
     * Favicon
     * @favicon
     */
    $wp_customize->add_section( 'theme_custom_favicon', array(
        'title'       => 'Favicon',
        'priority'    => 22,
    ) );

    // favicon
    $wp_customize->add_setting( 'favicon_upload', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'favicon_upload', array(
        'section'   => 'theme_custom_favicon',
        'settings'  => 'favicon_upload',
        'transport' => 'postMessage',
    ) ) );





    /*
     * Paleta de cores
     * @cor base identidade
     * @cor base identidade hover
     * @cor base texto com bg da cor da identidade
     */
    $wp_customize->add_section( 'theme_custom_color_options', array(
        'title'       => 'Cores padrões',
        'priority'    => 23,
    ) );

    // cor base identidade
    $wp_customize->add_setting( 'base_color', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'base_color', array(
        'label'     => 'Cor base',
        'section'   => 'theme_custom_color_options',
        'settings'  => 'base_color',
        'transport' => 'postMessage',
    ) ) );

    // cor base identidade hover
    $wp_customize->add_setting( 'base_color_hover', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'base_color_hover', array(
        'label'     => 'Cor base para efeito de mouseover em links',
        'section'   => 'theme_custom_color_options',
        'settings'  => 'base_color_hover',
        'transport' => 'postMessage',
    ) ) );

    // cor base texto com bg da cor da identidade
    $wp_customize->add_setting( 'base_color_text', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'base_color_text', array(
        'label'     => 'Cor base de texto',
        'section'   => 'theme_custom_color_options',
        'settings'  => 'base_color_text',
        'transport' => 'postMessage',
    ) ) );





    /*
     * Fundo do site
     * @cor de fundo
     * @img de fundo
     */
    $wp_customize->add_section( 'theme_custom_background_options', array(
        'title'       => 'Fundo do site',
        'priority'    => 24,
    ) );

    // cor base identidade
    $wp_customize->add_setting( 'body_background_color', array(
        'default'           => '#eee',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_background_color', array(
        'label'     => 'Cor de fundo (exibida se não houver imagem)',
        'section'   => 'theme_custom_background_options',
        'settings'  => 'body_background_color',
        'transport' => 'postMessage',
    ) ) );

    // img de fundo
    $wp_customize->add_setting( 'body_background_img', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'body_background_img', array(
        'label'     => 'Imagem de fundo',
        'section'   => 'theme_custom_background_options',
        'settings'  => 'body_background_img',
        'transport' => 'postMessage',
    ) ) );





    /*
     * Barra de Opt-in
     * @título
     * @textarea chamada
     * @cor de texto
     * @texto do input
     * @texto do botão
     * @cor de fundo
     * @img de fundo
     * @lista do mailchimp
     */
    $wp_customize->add_section( 'theme_custom_optin_options', array(
        'title'       => 'Barra de Opt-in',
        'description' => 'Se inserir uma imagem, o título ficará oculto.',
        'priority'    => 25,
    ) );

    // titulo
    $wp_customize->add_setting( 'opt_in_title', array(
        'default'    => 'Título da barra de opt-in',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'opt_in_title', array(
        'label'     => 'Título',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_title',
        'transport' => 'postMessage',
    ) );

    // img de fundo
    $wp_customize->add_setting( 'opt_in_img_title', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opt_in_img_title', array(
        'label'     => 'Imagem de título',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_img_title',
        'transport' => 'postMessage',
    ) ) );

    // textarea chamada opt-in
    $wp_customize->add_setting( 'opt_in_message', array(
        'default'    => 'Texto da barra de opt-in',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new Textarea_Customize_Control( $wp_customize, 'opt_in_message', array(
        'label'     => 'Texto',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_message',
        'transport' => 'postMessage',
    ) ) );

    // cor de texto
    $wp_customize->add_setting( 'opt_in_color_text', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opt_in_color_text', array(
        'label'     => 'Cor de texto',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_color_text',
        'transport' => 'postMessage',
    ) ) );

    // texto do input
    $wp_customize->add_setting( 'opt_in_input_placeholder', array(
        'default'    => 'Seu e-mail aqui',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'opt_in_input_placeholder', array(
        'label'     => 'Texto exibido no campo de e-mail',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_input_placeholder',
        'transport' => 'postMessage',
    ) );

    // texto do botão
    $wp_customize->add_setting( 'opt_in_button_text', array(
        'default'    => 'Enviar',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'opt_in_button_text', array(
        'label'     => 'Texto do botão de envio',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_button_text',
        'transport' => 'postMessage',
    ) );

    // cor de fundo
    $wp_customize->add_setting( 'opt_in_color_background', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opt_in_color_background', array(
        'label'     => 'Cor de fundo (exibido se não houver imagem)',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_color_background',
        'transport' => 'postMessage',
    ) ) );

    // img de fundo
    $wp_customize->add_setting( 'opt_in_img_background', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'opt_in_img_background', array(
        'label'     => 'Imagem de fundo',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_img_background',
        'transport' => 'postMessage',
    ) ) );

    // lista do mailchimp
    $wp_customize->add_setting( 'opt_in_mailchimp_list', array(
        'default'    => 'u=[CODIGO ALEATORIO]&id=[CODIGO ALEATORIO]',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'opt_in_mailchimp_list', array(
        'label'     => 'Código da lista do MailChimp (ex.: http://[SEUDOMINIO].us3.list-manage1.com/subscribe/post?[COLE O QUE VIER DO CODIGO GERADO])',
        'section'   => 'theme_custom_optin_options',
        'settings'  => 'opt_in_mailchimp_list',
        'transport' => 'postMessage',
    ) );





    /*
     * Opt-in post
     * @título
     * @textarea chamada
     * @texto do input
     * @texto do botão
     * @lista do mailchimp
     */
    $wp_customize->add_section( 'theme_custom_post_optin_options', array(
        'title'       => 'Opt-in no fim dos posts',
        'priority'    => 26,
    ) );

    // titulo
    $wp_customize->add_setting( 'post_opt_in_title', array(
        'default'    => 'Fique atualizado',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'post_opt_in_title', array(
        'label'     => 'Título',
        'section'   => 'theme_custom_post_optin_options',
        'settings'  => 'post_opt_in_title',
        'transport' => 'postMessage',
    ) );

    // textarea chamada opt-in
    $wp_customize->add_setting( 'post_opt_in_message', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new Textarea_Customize_Control( $wp_customize, 'post_opt_in_message', array(
        'label'     => 'Texto',
        'section'   => 'theme_custom_post_optin_options',
        'settings'  => 'post_opt_in_message',
        'transport' => 'postMessage',
    ) ) );

    // texto do input
    $wp_customize->add_setting( 'post_opt_in_input_placeholder', array(
        'default'    => 'Seu e-mail aqui',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'post_opt_in_input_placeholder', array(
        'label'     => 'Texto exibido no campo de e-mail',
        'section'   => 'theme_custom_post_optin_options',
        'settings'  => 'post_opt_in_input_placeholder',
        'transport' => 'postMessage',
    ) );

    // texto do botão
    $wp_customize->add_setting( 'post_opt_in_button_text', array(
        'default'    => 'Enviar',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'post_opt_in_button_text', array(
        'label'     => 'Texto do botão de envio',
        'section'   => 'theme_custom_post_optin_options',
        'settings'  => 'post_opt_in_button_text',
        'transport' => 'postMessage',
    ) );

    // lista do mailchimp
    $wp_customize->add_setting( 'post_opt_in_mailchimp_list', array(
        'default'    => 'u=[CODIGO ALEATORIO]&id=[CODIGO ALEATORIO]',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'post_opt_in_mailchimp_list', array(
        'label'     => 'Código da lista do MailChimp (ex.: http://[SEUDOMINIO].us3.list-manage1.com/subscribe/post?[COLE O QUE VIER DO CODIGO GERADO])',
        'section'   => 'theme_custom_post_optin_options',
        'settings'  => 'post_opt_in_mailchimp_list',
        'transport' => 'postMessage',
    ) );





    /*
     * Opt-in footer
     * @título
     * @texto do input
     * @texto do botão
     * @lista do mailchimp
     */
    $wp_customize->add_section( 'theme_custom_footer_optin_options', array(
        'title'       => 'Opt-in do rodapé',
        'priority'    => 27,
    ) );

    // titulo
    $wp_customize->add_setting( 'footer_opt_in_title', array(
        'default'    => 'Título da barra de opt-in',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'footer_opt_in_title', array(
        'label'     => 'Título',
        'section'   => 'theme_custom_footer_optin_options',
        'settings'  => 'footer_opt_in_title',
        'transport' => 'postMessage',
    ) );

    // texto do input
    $wp_customize->add_setting( 'footer_opt_in_input_placeholder', array(
        'default'    => 'Seu e-mail aqui',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'footer_opt_in_input_placeholder', array(
        'label'     => 'Texto exibido no campo de e-mail',
        'section'   => 'theme_custom_footer_optin_options',
        'settings'  => 'footer_opt_in_input_placeholder',
        'transport' => 'postMessage',
    ) );

    // texto do botão
    $wp_customize->add_setting( 'footer_opt_in_button_text', array(
        'default'    => 'Enviar',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'footer_opt_in_button_text', array(
        'label'     => 'Texto do botão de envio',
        'section'   => 'theme_custom_footer_optin_options',
        'settings'  => 'footer_opt_in_button_text',
        'transport' => 'postMessage',
    ) );

    // lista do mailchimp
    $wp_customize->add_setting( 'footer_opt_in_mailchimp_list', array(
        'default'    => 'u=[CODIGO ALEATORIO]&id=[CODIGO ALEATORIO]',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'footer_opt_in_mailchimp_list', array(
        'label'     => 'Código da lista do MailChimp (ex.: http://[SEUDOMINIO].us3.list-manage1.com/subscribe/post?[COLE O QUE VIER DO CODIGO GERADO])',
        'section'   => 'theme_custom_footer_optin_options',
        'settings'  => 'footer_opt_in_mailchimp_list',
        'transport' => 'postMessage',
    ) );





    /*
     * Widget de Categorias
     * @selecao de categorias
     */
    $wp_customize->add_section( 'theme_custom_cat_widget_options', array(
        'title'       => 'Widget de Categorias',
        'description' => 'Selecione as categorias que serão exibidas no widget "Categorias do fictionbrands".<br><em style="display: block;"><small>Obs.: Os ícones deverão estar pré-definidos antes de adicionar uma categoria, caso contrário haverá link quebrado de imagem.</small></em>',
        'priority'    => 28,
    ) );

    $wp_customize->add_setting( 'widget_categories', array(
        'default'    => array(),
        'capability' => 'edit_theme_options',
    ) );


    $categories = get_categories();
    $cats = array();
    $i = 0;
    foreach ( $categories as $category ) {
        if ( $i == 0 ) {
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }

    $wp_customize->add_control( new Categories_Checkbox_Control( $wp_customize, 'widget_categories', array(
        'settings'  => 'widget_categories',
        'label'     => 'Deixe o CTRL apertado para selecionar mais de uma.',
        'section'   => 'theme_custom_cat_widget_options',
        'type'      => 'multiple-select',
        'choices'   => $cats,
        'transport' => 'postMessage',
    ) ) );





    /*
     * Redes sociais
     * @facebook
     * @instagram
     * @twitter
     * @youtube
     * @pinterest
     * @linkedin
     */
    $wp_customize->add_section( 'theme_custom_social_media_options', array(
        'title'       => 'Redes sociais',
        'description' => 'Todas as URLs devem começar com <code>http://</code> ou <code>https://</code>',
        'priority'    => 29,
    ) );

    // facebook
    $wp_customize->add_setting( 'facebook_url', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'facebook_url', array(
        'label'     => 'Facebook',
        'section'   => 'theme_custom_social_media_options',
        'settings'  => 'facebook_url',
        'transport' => 'postMessage',
    ) );

    // instagram
    $wp_customize->add_setting( 'instagram_url', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'instagram_url', array(
        'label'     => 'Instagram',
        'section'   => 'theme_custom_social_media_options',
        'settings'  => 'instagram_url',
        'transport' => 'postMessage',
    ) );

    // twitter
    $wp_customize->add_setting( 'twitter_url', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'twitter_url', array(
        'label'     => 'Twitter',
        'section'   => 'theme_custom_social_media_options',
        'settings'  => 'twitter_url',
        'transport' => 'postMessage',
    ) );

    // youtube
    $wp_customize->add_setting( 'youtube_url', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'youtube_url', array(
        'label'     => 'YouTube',
        'section'   => 'theme_custom_social_media_options',
        'settings'  => 'youtube_url',
        'transport' => 'postMessage',
    ) );

    // google
    $wp_customize->add_setting( 'google_url', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'google_url', array(
        'label'     => 'Google+',
        'section'   => 'theme_custom_social_media_options',
        'settings'  => 'google_url',
        'transport' => 'postMessage',
    ) );

    // pinterest
    $wp_customize->add_setting( 'pinterest_url', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'pinterest_url', array(
        'label'     => 'Pinterest',
        'section'   => 'theme_custom_social_media_options',
        'settings'  => 'pinterest_url',
        'transport' => 'postMessage',
    ) );

    // linkedin
    $wp_customize->add_setting( 'linkedin_url', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'linkedin_url', array(
        'label'     => 'LinkedIn',
        'section'   => 'theme_custom_social_media_options',
        'settings'  => 'linkedin_url',
        'transport' => 'postMessage',
    ) );





    /*
     * Analytics
     * @analytics
     */
    $wp_customize->add_section( 'theme_custom_analytics', array(
        'title'       => 'Código do Google Analytics',
        'priority'    => 30,
    ) );

    // analytics
    $wp_customize->add_setting( 'analytics_input', array(
        'default'    => 'UA-XXXXX-X',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'analytics_input', array(
        'section'   => 'theme_custom_analytics',
        'settings'  => 'analytics_input',
        'transport' => 'postMessage',
    ) );
}
add_action( 'customize_register', 'theme_customizer' );
