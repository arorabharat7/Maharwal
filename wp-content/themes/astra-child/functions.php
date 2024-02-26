<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
// function child_enqueue_styles() {

// 	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

// }

// add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



function maharwal_enqueue_scripts() {
    // Enqueue Font Awesome CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1', 'all');

    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11', 'all');

    // Enqueue Tailwind Font using Google Fonts
    wp_enqueue_style('tailwind_font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    // Enqueue your custom CSS
    wp_enqueue_style('tailwind_output', get_stylesheet_directory_uri() . '/tailwind_output.css', array(), null, 'all');

    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Swiper JS with jQuery as dependency
    wp_enqueue_script('swiper-min', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11', true);

    // Enqueue your custom JavaScript
    wp_enqueue_script('pgu', get_stylesheet_directory_uri() . '/assets/js/custome.js', array('jquery'), null, true);

    // Localize the script 'pgu' with the ajaxurl parameter
    wp_localize_script('pgu', 'pguajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'maharwal_enqueue_scripts');



// Created Option Pages 
if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title'    => 'Footer Options',
        'menu_title'    => 'Footer Options',
        'menu_slug'     => 'footer_options',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));

    // new-code

    acf_add_options_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header Settings',
        'menu_slug'     => 'header_settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global_settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
