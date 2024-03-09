<?php

/**

 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="hero hero-service corporate relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog.webp" alt="blog" class="w-full min-h-[200px] object-cover">


  <h1 class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
    Blogs</h1>

  <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
  <?php custom_astra_breadcrumbs(); ?>

  </div>

</section>

<section class="venue-location lg:py-100 md:py-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10">
  <div class="container m-auto">
  <div class="grid grid-cols-12 gap-x-6 xl:gap-y-16 md:gap-y-10 gap-y-8 lg:pb-100 md:pb-60 pb-10">
    <?php
    // Define pagination parameters
    $posts_per_page = 6;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $tag_slug = '';
$category_slug = '';
    $current_url = $_SERVER['REQUEST_URI'];
    $tag_position = strpos($current_url, '/tag/');
    if ($tag_position !== false) {
      // Extract the tag slug from the URL
      $tag_slug = substr($current_url, $tag_position + 5); // 5 is the length of "/tag/"
      // If there is a forward slash after the tag slug, remove it
      $tag_slug = rtrim($tag_slug, '/');
      // Now $tag_slug contains the tag slug

    }
    $category_position = strpos($current_url, '/category/');
if ($category_position !== false) {
    // Extract the category slug from the URL
    $category_slug = substr($current_url, $category_position + 10); // 10 is the length of "/category/"
    // If there is a forward slash after the category slug, remove it
    $category_slug = rtrim($category_slug, '/');
}
    // $tag_slug = isset($_GET['tag']) ? $_GET['tag'] : '';
    // WP_Query arguments
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => $posts_per_page,
      'paged'          => $paged,
      // 'tag'            => $tag_slug,
    );


    if ($tag_slug) {
      $args['tag'] = $tag_slug;
  } elseif ($category_slug) {
      $args['category_name'] = $category_slug;
  }
    // The Query
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
       // $all_categories = get_categories();
        // $categories = get_the_category();
        // $child_categories = array_filter($all_categories, function ($category) {
        //   return $category->parent != 0;
        // });

        // $title = get_the_title();
        // $short_title = strlen($title) > 35 ? substr($title, 0, 35) . '...' : $title;

        // $description = get_the_excerpt();
        // $short_description = strlen($description) > 90 ? substr($description, 0, 90) . '...' : $description;

        // $author_name = get_the_author();
    ?>

        

          <!-- <div class="md:col-span-4 sm:col-span-6 col-span-12 relative">
            <span class="lg:text-xl md:text-base text-sm text-white bg-primary rounded-bl-xl rounded-tr-xl py-1 px-2 absolute right-0 top-0">
              <?php echo esc_html(get_the_date('j, M')); ?></span>
            <?php
            // Get the featured image URL
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
            if ($featured_image_url) { ?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full ">
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

          </div>  -->

<?php echo maharawal_blogs_listings(); ?>

       

    <?php
      }
      // Pagination
      echo '<div class="pagination">';
      echo paginate_links(array(
        'total'        => $query->max_num_pages,
        'current'      => max(1, $paged),
        // 'prev_text'    => __('« Previous'),
        // 'next_text'    => __('Next »'),
      ));
      echo '</div>';

      /* Restore original Post Data */
      wp_reset_postdata();
    } else {
      // no posts found
      echo 'No posts found.';
    }
    ?>
 </div>

    <ul class="pagination flex items-center gap-2 justify-center">
      <li><a href="#" class="md:text-base text-sm text-white bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">1</a></li>
      <li><a href="#" class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition ">2</a></li>
      <li><a href="#" class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">3</a></li>
      <li><a href="#" class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">4</a></li>
      <li><a href="#" class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">....</a></li>
      <li><a href="#" class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">10</a></li>
      <li><a href="#" class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">11</a></li>
    </ul>

  </div>
</section>

<?php get_footer(); ?>