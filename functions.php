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
