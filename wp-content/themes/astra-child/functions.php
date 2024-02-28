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





function custom_astra_breadcrumbs() {
    // Define the separator
    $separator = ' <img src="' . get_stylesheet_directory_uri() . '/assets/images/maharwal_arrow-left.svg" alt="arrow">';

    // Home page link
    echo '<a class="text-white md:text-lg text-base font-medium border-b border-white" href="' . esc_url( get_home_url() ) . '">' . esc_html__( 'Home', 'astra-child' ) . '</a>' . $separator;

    // Get the current URL
    $current_url = $_SERVER["REQUEST_URI"];

    // Explode URL into parts
    $url_parts = explode('/', $current_url);

    // Remove empty elements
    $url_parts = array_filter($url_parts);

    // Initialize breadcrumbs array
    $breadcrumbs = array();

    // Get the last part of the URL (current page)
    $last_part = end($url_parts);

    // Loop through URL parts
    foreach ($url_parts as $part) {
        // Decode URL part
        $decoded_part = urldecode($part);
        
        // Check if it's the last part of the URL
        if ($part === $last_part) {
            // Output the page title without link
            $breadcrumbs[] = '<span class="text-white md:text-lg text-base font-medium">' . esc_html( ucwords(str_replace('-', ' ', $decoded_part)) ) . '</span>';
        } else {
            // Output breadcrumb with link
            $breadcrumbs[] = '<a class="text-white md:text-lg text-base font-medium" href="' . esc_url( home_url(  '/' . $part ) ) . '">' . esc_html( ucwords(str_replace('-', ' ', $decoded_part)) ) . '</a>';
        }
    }

    // Output breadcrumbs
    echo implode($separator, $breadcrumbs);
}









// Register Custom Post Type
function create_services_cpt() {

    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Services', 'text_domain' ),
        'name_admin_bar'        => __( 'Service', 'text_domain' ),
        'archives'              => __( 'Service Archives', 'text_domain' ),
        'attributes'            => __( 'Service Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Service:', 'text_domain' ),
        'all_items'             => __( 'All Services', 'text_domain' ),
        'add_new_item'          => __( 'Add New Service', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Service', 'text_domain' ),
        'edit_item'             => __( 'Edit Service', 'text_domain' ),
        'update_item'           => __( 'Update Service', 'text_domain' ),
        'view_item'             => __( 'View Service', 'text_domain' ),
        'view_items'            => __( 'View Services', 'text_domain' ),
        'search_items'          => __( 'Search Service', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into service', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this service', 'text_domain' ),
        'items_list'            => __( 'Services list', 'text_domain' ),
        'items_list_navigation' => __( 'Services list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter services list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Service', 'text_domain' ),
        'description'           => __( 'Services offered', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'            => array( 'services-category' ), // Custom taxonomy
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-settings', // Custom icon
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'services', $args );

}
add_action( 'init', 'create_services_cpt', 0 );













