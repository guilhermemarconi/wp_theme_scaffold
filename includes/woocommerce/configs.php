<?php

add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
/**
 * Remove WooCommerce Generator tag, styles, and scripts from the homepage.
 * Tested and works with WooCommerce 2.0+
 *
 * @author Greg Rickaby
 * @since 2.0.0
 */
function child_manage_woocommerce_styles() {
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
	if ( is_front_page() || is_home() ) {
		wp_dequeue_style( 'woocommerce_frontend_styles' );
		wp_dequeue_style( 'woocommerce_fancybox_styles' );
		wp_dequeue_style( 'woocommerce_chosen_styles' );
		wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
		wp_dequeue_script( 'wc_price_slider' );
		wp_dequeue_script( 'wc-single-product' );
		wp_dequeue_script( 'wc-add-to-cart' );
		wp_dequeue_script( 'wc-cart-fragments' );
		wp_dequeue_script( 'wc-checkout' );
		wp_dequeue_script( 'wc-add-to-cart-variation' );
		wp_dequeue_script( 'wc-single-product' );
		wp_dequeue_script( 'wc-cart' );
		wp_dequeue_script( 'wc-chosen' );
		wp_dequeue_script( 'woocommerce' );
		wp_dequeue_script( 'prettyPhoto' );
		wp_dequeue_script( 'prettyPhoto-init' );
		wp_dequeue_script( 'jquery-blockui' );
		wp_dequeue_script( 'jquery-placeholder' );
		wp_dequeue_script( 'fancybox' );
		wp_dequeue_script( 'jqueryui' );
	}
}

/**
 * woocommerce_enqueue_styles
 */
/*add_filter( 'woocommerce_enqueue_styles', 'woocommerce_dequeue_styles' );
function woocommerce_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );        // Remove the gloss
    unset( $enqueue_styles['woocommerce-layout'] );         // Remove the layout
    unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}*/
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/**
 * init
 */
add_action( 'init', 'woocommerce_clear_cart_url' );
function woocommerce_clear_cart_url() {
    global $woocommerce;

    if ( isset( $_GET['empty-cart'] ) ) {
        $woocommerce->cart->empty_cart();
    }
}

/**
 * wp_enqueue_scripts
 */
// add_action( 'wp_enqueue_scripts', 'woocommerce_correios_remove_style' );
function woocommerce_correios_remove_style() {
    wp_dequeue_style( 'woocommerce-correios-simulator' );
}

/**
 * post_class
 */
add_filter( 'post_class', 'product_has_gallery' );
function product_has_gallery( $classes ) {
    global $product;

    $post_type = get_post_type( get_the_ID() );

    if ( ! is_admin() ) {
        if ( $post_type == 'product' ) {
            $attachment_ids = $product->get_gallery_attachment_ids();

            if ( $attachment_ids ) {
                $classes[] = 'has-gallery';
            }
        }
    }

    return $classes;
}

/**
 * wp_nav_menu_items
 */
// add_filter( 'wp_nav_menu_items', 'add_menu_cart', 10, 2 );
function add_menu_cart ( $items, $args ) {
    global $woocommerce;

    if ( $args->theme_location == 'topo' ) {
        $items .= '<li class="menu-item menu-cart">';
        $items .= '<a class="cart-contents" href="' . $woocommerce->cart->get_cart_url() . '">';
        $items .= '<img class="cart-icon" src="' . get_template_directory_uri() . '/img/cart.svg">';
        $items .= '<span>(' . sprintf( _n( '%d', '%d', $woocommerce->cart->cart_contents_count ), $woocommerce->cart->cart_contents_count ) . ')</span>';
        $items .= '</a>';
    }

    return $items;
}

/**
 * wp
 */
add_action( 'wp', 'can_display_slides', 20 );
function can_display_slides() {
    if ( is_product() || is_cart() || is_checkout() || is_account_page() || is_page( 'contato' ) || is_page( 'trocas-e-devolucoes' ) || is_page( 'wishlist' ) || is_404() ) {
        return false;
    } else {
        return true;
    }
}

/**
 * woocommerce_before_main_content
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

/**
 * woocommerce_sidebar
 */
// remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/**
 * woocommerce_before_shop_loop_item_title
 */
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_second_product_thumbnail', 11 );
function woocommerce_template_loop_second_product_thumbnail() {
    global $product, $woocommerce;

    $attachment_ids = $product->get_gallery_attachment_ids();

    if ( $attachment_ids ) {
        $secondary_image_id = $attachment_ids['0'];
        echo wp_get_attachment_image( $secondary_image_id, 'shop_catalog', '', $attr = array( 'class' => 'secondary-image attachment-shop_catalog' ) );
    }
}

/**
 * woocommerce_after_shop_loop_item_title
 */
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

/**
 * woocommerce_before_single_product_summary
 */
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

/**
 * woocommerce_single_product_summary
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

// add_action( 'woocommerce_single_product_summary', 'custom_woocommerce_table_size_output', 30 );
function custom_woocommerce_table_size_output() {
    global $product, $woocommerce;

    $table_size  = '<a class="table-size-btn zoom" href="' . get_template_directory_uri() . '/img/tabela-medidas-' . ( has_term( array( 'basicas', 'estampadas' ), 'product_cat' ) ? 'tshirt' : 'polo' ) . '.png">Tabela de Medidas</a>';

    echo $table_size;
}

/**
 * woocommerce_after_single_product_summary
 */
// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

/**
 * woocommerce_product_add_to_cart_text
 */
// add_filter( 'woocommerce_product_add_to_cart_text', 'custom_woocommerce_product_add_to_cart_text' );
function custom_woocommerce_product_add_to_cart_text() {
    global $product;

    $product_type = $product->product_type;

    switch ( $product_type ) {
        case 'external':
            return __( 'Buy product', 'woocommerce' );
            break;
        case 'grouped':
            return __( 'View products', 'woocommerce' );
            break;
        case 'simple':
            return __( 'Add to cart', 'woocommerce' );
            break;
        case 'variable':
            return 'Comprar';
            break;
        default:
            return __( 'Read more', 'woocommerce' );
    }
}

/**
 * woocommerce_correios_shipping_methods
 */
add_filter( 'woocommerce_correios_shipping_methods', 'custom_woocommerce_correios_shipping_methods' );
function custom_woocommerce_correios_shipping_methods( $rates ) {
    $cart_contents = WC()->cart->cart_contents;
    $polos = 0;
    $camisetas = 0;

    foreach ( $cart_contents as $item ) {
        $prod_obj = wp_get_post_terms( $item['product_id'], 'product_cat' );
        $cat = $prod_obj[0]->slug;
        $qty = $item['quantity'];

        if ( $cat == 'basicas' || $cat == 'estampadas' ) {
            $camisetas += $qty;
        } elseif ( $cat == 'polos' ) {
            $polos += $qty;
        }
    }

    if ( ( $polos >= 1 ) || ( $camisetas >= 3 ) ) {
        foreach ( $rates as $key => $rate ) {
            if ( 'PAC' == $rate['id'] ) {
                $rates[ $key ]['cost'] = 0;
                break;
            }
        }
    }

    return $rates;
}
