<?php

/**

 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>


<section class="hero hero-service relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_beverage-hero.webp" alt="hero-about" class="w-full min-h-[200px]">


<h1
  class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
  <?php the_title(); ?></h1>

<div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
<?php custom_astra_breadcrumbs(); ?>
</div>

</section>


<section class="menu-beverage lg:py-100 md:py-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10">
    <div class="container m-auto">





      <div x-data="{ openTab: beverages }" class="bg-white rounded-lg">
        <div class="overflow-auto bg-gradient-linear my-2 rounded-tl-lg rounded-tr-lg px-5">
          <div class="category_btn flex gap-[1px] justify-center items-center  lg:w-[70%] md:w-[80%] m-auto  w-[130%]">

          <?php if (have_rows('menu_listing_tabs_details')) :
            while (have_rows('menu_listing_tabs_details')) : the_row();

              // Load sub field value.
              $menu_listing_tabs_details_image = get_sub_field('menu_listing_tabs_details_image');
              $menu_listing_tabs_details_image_when_active = get_sub_field('menu_listing_tabs_details_image_when_active');
              $menu_listing_tabs_details_name = get_sub_field('menu_listing_tabs_details_name');
          ?>
            <button id="<?php echo $menu_listing_tabs_details_name; ?>"
              class=" btn lg:p-5 md:p-4 p-3 md:text-sm text-xs font-semibold text-white uppercase focus:outline-none focus:shadow-outline-blue transition-all duration-300 inline-block whitespace-nowrap flex-1">
              <img src="<?php echo $menu_listing_tabs_details_image['url']; ?>" alt="beverage-icon"
                class="m-auto lg:mb-4 mb-2 lg:w-auto md:w-10 w-7 img-hidden hidden">
              <img src="<?php echo $menu_listing_tabs_details_image_when_active['url']; ?>" alt="beverage-icon"
                class="m-auto lg:mb-4 mb-2 lg:w-auto md:w-10 w-7 img-block">

                <?php echo $menu_listing_tabs_details_name; ?> </button>
              <?php endwhile;
          endif; ?>

           
          </div>
        </div>



        <div id="parent" class="transition-all duration-700 md:mt-10 mt-6 lg:w-[70%] md:w-[80%] m-auto px-5">
        <?php if (have_rows('menu_listing_items_data')) :
        while (have_rows('menu_listing_items_data')) : the_row();

          // Load sub field value.
          $menu_listing_items_image = get_sub_field('menu_listing_items_image');
          $menu_listing_items_name = get_sub_field('menu_listing_items_name');

          $menu_listing_items_data_description = get_sub_field('menu_listing_items_data_description');
          $menu_listing_items_category = get_sub_field('menu_listing_items_category');
      ?>
          <div class="<?php echo $menu_listing_items_category; ?> flex md:gap-4 gap-2 items-start lg:py-7 md:py-5 py-3 border-b border-primary">

            <img src="<?php echo $menu_listing_items_image['url']; ?>" alt="menu" class="md:w-10 md:h-10 w-8 h-8 rounded-full">
            <div>
              <h2 class="xl:text-4xl md:text-3xl text-2xl bagdoll-display text-primary"><?php echo $menu_listing_items_name; ?></h2>
              <p class="xl:text-lg md:text-base text-sm font-medium text-grey mt-1">
              <?php echo $menu_listing_items_data_description; ?></p>
            </div>
          </div>
          <?php endwhile;
      endif; ?>

       

        <div
          class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-gradient-to-b before:from-white before:to-[rgb(255, 255, 255, 0.2)]">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues-bottom.webp" alt="venues-bottom" class="w-full">
        </div>

      </div>




    </div>
  </section>


<?php get_footer(); ?>