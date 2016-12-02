<?php
/**
 * storefront child theme functions.php file.
 *
 * @package storefront-child
 */

// DO NOT REMOVE THIS FUNCTION AS IT LOADS THE PARENT THEME STYLESHEET
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* Add any custom PHP below this line of text */

/**
 * Load IMGD Framework compatibility file.
 */
//require get_template_directory() . '/imgd/imgd_funciones.php';
add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );

function custom_woocommerce_get_catalog_ordering_args( $args ) {
    $orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

    if ( 'alphabetical' == $orderby_value ) {
        $args['orderby'] = 'title';
        $args['order'] = 'DESC';
    }

    return $args;
}

add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );

function custom_woocommerce_catalog_orderby( $sortby ) {
    $sortby['alphabetical'] = __( 'Alphabetical' );
    return $sortby;
}
