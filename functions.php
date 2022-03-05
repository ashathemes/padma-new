<?php
/**
 * Padma New functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Padma New
 */

if ( ! defined( 'PADMA_NEW_VERSION' ) ) {
	$padma_new_theme = wp_get_theme();
	define( 'PADMA_NEW_VERSION', $padma_new_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function padma_new_scripts() {
    wp_enqueue_style( 'padma-new-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','padma-default-block','padma-style'), '', 'all');
    wp_enqueue_style( 'padma-new-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), PADMA_NEW_VERSION, 'all');
    wp_enqueue_script( 'masonry', get_stylesheet_directory_uri() . '/assets/js/masonry.pkgd.min.js',array('jquery'), PADMA_NEW_VERSION, true );
    wp_enqueue_script( 'padma-new-main-js', get_stylesheet_directory_uri() . '/assets/js/padma-new-main.js',array('jquery','padma-script'), PADMA_NEW_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'padma_new_scripts' );


/**
 * Load Padma New Tags.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';