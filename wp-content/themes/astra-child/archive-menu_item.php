<?php

/**

 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="hero hero-service relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_menu.webp" alt="hero-menu" class="w-full min-h-[200px] object-cover">


<h1
  class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
  Menu</h1>

  <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
        <?php custom_astra_breadcrumbs(); ?>

    </div>
</section>



<section
      class="menu lg:py-100 md:py-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10">
      <div class="container m-auto">

        <p
          class="contrast-less:lg:text-xl md:text-lg text-base text-grey font-medium lg:w-2/4 m-auto text-center">Explore
          our sample menus below. We're delighted to tailor a menu for your
          event, accommodating dietary needs and preferences to ensure a
          memorable dining experience.</p>

        <div
          class="grid grid-cols-12 lg:py-20 md:py-60 py-10 lg:gap-x-7 gap-x-5 lg:gap-y-28 gap-y-16">

          <?php
            // WP_Query arguments
            $args = array(
                'post_type'      => 'menu_item',
                'posts_per_page' => -1, // Retrieve all posts
            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                   
            ?>

          <div
            class="md:col-span-4 sm:col-span-6 col-span-12 bg-white lg:p-5 p-4 text-center rounded-lg relative">
            <?php
                        // Get the featured image URL
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                        if ($featured_image_url) { ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full m-auto rounded-xl">
                            </a>
                        <?php } ?>
            
              
            <h2><a href="<?php the_permalink(); ?>"
                class="lg:text-[42px] md:text-3xl text-2xl text-primary bagdoll-display lg:mt-8 mt-5 lg:mb-20 mb-16 block">
                <?php echo the_title(); ?></a></h2>

            <div
              class="lg:w-28 lg:h-28 w-20 h-20 bg-[#F6F0EA] rounded-full flex justify-center items-center absolute left-[50%] translate-x-[-50%] lg:bottom-[-55px] bottom-[-40px]">
              <a href="<?php the_permalink(); ?>"
                class="bg-white lg:w-[90px] lg:h-[90px] w-[60px] h-[60px] rounded-full flex justify-center items-center text-light-grey"><i
                  class="fa-solid fa-arrow-right lg:text-3xl text-2xl"></i></a>
            </div>
          </div>
         
         <?php
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
                echo 'No services found.';
            }
            ?>

        
       <div
          class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-gradient-to-b before:from-white before:to-[rgb(255, 255, 255, 0.2)]">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues-bottom.webp" alt="venues-bottom" class="w-full">
        </div>
        </div>

      </div>
    </section>


<?php get_footer(); ?>