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






function create_venues_cpt() {
    $labels = array(
        'name'               => _x( 'Venues', 'post type general name', 'your-text-domain' ),
        'singular_name'      => _x( 'Venue', 'post type singular name', 'your-text-domain' ),
        'menu_name'          => _x( 'Venues', 'admin menu', 'your-text-domain' ),
        'name_admin_bar'     => _x( 'Venue', 'add new on admin bar', 'your-text-domain' ),
        'add_new'            => _x( 'Add New', 'venue', 'your-text-domain' ),
        'add_new_item'       => __( 'Add New Venue', 'your-text-domain' ),
        'new_item'           => __( 'New Venue', 'your-text-domain' ),
        'edit_item'          => __( 'Edit Venue', 'your-text-domain' ),
        'view_item'          => __( 'View Venue', 'your-text-domain' ),
        'all_items'          => __( 'All Venues', 'your-text-domain' ),
        'search_items'       => __( 'Search Venues', 'your-text-domain' ),
        'parent_item_colon'  => __( 'Parent Venues:', 'your-text-domain' ),
        'not_found'          => __( 'No venues found.', 'your-text-domain' ),
        'not_found_in_trash' => __( 'No venues found in Trash.', 'your-text-domain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'venue' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-location-alt', // Change the icon here
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    );

    register_post_type( 'venue', $args );
}
add_action( 'init', 'create_venues_cpt' );

// Register Venues Category Taxonomy
function create_venues_category_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Venues Categories', 'taxonomy general name', 'your-text-domain' ),
        'singular_name'              => _x( 'Venues Category', 'taxonomy singular name', 'your-text-domain' ),
        'search_items'               => __( 'Search Venues Categories', 'your-text-domain' ),
        'popular_items'              => __( 'Popular Venues Categories', 'your-text-domain' ),
        'all_items'                  => __( 'All Venues Categories', 'your-text-domain' ),
        'parent_item'                => __( 'Parent Venues Category', 'your-text-domain' ),
        'parent_item_colon'          => __( 'Parent Venues Category:', 'your-text-domain' ),
        'edit_item'                  => __( 'Edit Venues Category', 'your-text-domain' ),
        'update_item'                => __( 'Update Venues Category', 'your-text-domain' ),
        'add_new_item'               => __( 'Add New Venues Category', 'your-text-domain' ),
        'new_item_name'              => __( 'New Venues Category Name', 'your-text-domain' ),
        'separate_items_with_commas' => __( 'Separate Venues Categories with commas', 'your-text-domain' ),
        'add_or_remove_items'        => __( 'Add or remove Venues Categories', 'your-text-domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Venues Categories', 'your-text-domain' ),
        'not_found'                  => __( 'No Venues Categories found.', 'your-text-domain' ),
        'menu_name'                  => __( 'Venues Categories', 'your-text-domain' ),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'venues-category' ),
    );

    register_taxonomy( 'venues_category', array( 'venue' ), $args );
}
add_action( 'init', 'create_venues_category_taxonomy', 0 );







function pagination_bar($custom_query)
	{

		$total_pages = $custom_query->max_num_pages;
		$big = 999999999; // need an unlikely integer

		if ($total_pages > 1) {
			$current_page = max(1, get_query_var('paged'));

			return paginate_links(array(
				'base' => str_replace($big, '%#%',  html_entity_decode(get_pagenum_link($big))),
				'format' => '?paged=%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'next_text' => '>',
				'mid_size' => 3,
				'prev_text' => '<',
				'type'               => 'array'
			));
		}
	}





function maharawal_blogs_listings(){
    $all_categories = get_categories();
    $categories = get_the_category();
        $child_categories = array_filter($all_categories, function ($category) {
          return $category->parent != 0;
        });
        $title = get_the_title();
        $short_title = strlen($title) > 35 ? substr($title, 0, 35) . '...' : $title;

        $description = get_the_excerpt();
        $short_description = strlen($description) > 90 ? substr($description, 0, 90) . '...' : $description;

        $author_name = get_the_author();
    ?>
    <div class="md:col-span-4 sm:col-span-6 col-span-12 relative">
    <span class="lg:text-xl md:text-base text-sm text-white bg-primary rounded-bl-xl rounded-tr-xl py-1 px-2 absolute right-0 top-0">
      <?php echo esc_html(get_the_date('j, M')); ?></span>
    <?php
    // Get the featured image URL
    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
    if ($featured_image_url) { ?>
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full rounded-tl-xl rounded-tr-xl">
      </a>
    <?php } ?>


    <div class="border-t border-primary mt-6 pt-3">
      <?php foreach ($child_categories  as $category) { ?>
        <a href="<?php echo get_category_link($category->term_id); ?>"><span class="xl:text-sm text-xs text-primary font-medium uppercase inline-block mr-1"><?php echo esc_html($category->name); ?></span></a>
      <?php } ?>
      <span class="xl:text-sm text-xs text-primary font-medium uppercase inline-block lg:ml-0 ml-3 relative after:content-[''] after:absolute after:-left-3 after:top-[50%] after:translate-y-[-50%] after:bg-secondary after:h-2 after:w-2 after:rounded-full">
        <?php echo esc_html($author_name); ?></span>
    </div>

    <h3> <a href="<?php the_permalink(); ?>" class="xl:text-[32px] text-2xl bagdoll-display text-primary lg:!leading-10 xl:my-4 my-2 block">
        <?php echo $short_title; ?></a></h3>

    <p class="xl:text-lg md:text-base text-sm font-medium text-grey xl:mb-5 mb-3">
      <?php echo $short_description; ?></p>

    <a href="<?php the_permalink(); ?>" class="btn text-sm font-semibold text-light-black text-center inline-block uppercase">read more <i class="fa-solid fa-arrow-right ml-2"></i></a>

  </div> 
<?php } 








add_action('wp_ajax_remove_item', 'remove_item_callback');
add_action('wp_ajax_nopriv_remove_item', 'remove_item_callback');

// Function to remove item from session
function remove_item_callback() {
    // Get the index of the item to be removed from the AJAX request
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $index = $_POST['index'];
    
    // Retrieve selected items from session
    $dataArray = isset($_SESSION['selectedItems']) ? json_decode(stripslashes($_SESSION['selectedItems']), true) : [];
    $selectedItems = isset($_SESSION['selectedItems']) ? $dataArray : [];
    

    // Remove the item at the specified index
    if (isset($selectedItems[$index])) {
        unset($selectedItems[$index]);
    }

    // Update the selected items session variable
    $_SESSION['selectedItems'] = json_encode(array_values($selectedItems));

    // Calculate the new total price
    $totalPrice = 0;
    foreach ($selectedItems as $item) {
        $totalPrice += $item['price'];
    }
$_SESSION['totalPrice'] = $totalPrice;
    // Output the updated selected items list and total amount
    $response = array(
        'selectedItems' => generate_selected_items_html($selectedItems),
        'totalPrice' => $totalPrice,
    );

    echo json_encode($response);

    // Always use exit() after echoing JSON data to stop further processing
    exit();
}


function generate_selected_items_html($selectedItems) {
    $html = '<ul>';
    foreach ($selectedItems as $index => $item) {
        $html .= '<li>' . $item['name'] . ' - $' . $item['price'] . ' <button class="remove-item" data-index="' . $index . '">Remove</button></li>';
    }
    $html .= '</ul>';
    return $html;
}

