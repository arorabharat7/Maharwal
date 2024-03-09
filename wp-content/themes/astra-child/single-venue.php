<?php

/**

 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="hero hero-service corporate relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues.webp" alt="venues" class="w-full min-h-[200px] object-cover">

  <h1 class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
    Venues</h1>

  <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5 justify-center w-[90%]">
    <?php custom_astra_breadcrumbs(); ?>
  </div>

</section>

<section class="about-lift lg:mt-[256px] lg:mb-[190px] md:mt-[180px] md:mb-[120px] mt-[100px] mb-[80px]">
  <div class="container m-auto">
    <div class="lg:px-100 md:px-7 px-4 pt-[440px] bg-white rounded-tl-lg rounded-tr-lg">
      <div class="swiper about-lift-slider overflow-x-hidden md:mt-[-570px] mt-[-500px]">
        <div class="swiper-wrapper lg:mb-14 md:mb-16 mb-12">
          <?php
          // Get the gallery field value
          $gallery_images = get_field('venue_settings_gallery');
          if ($gallery_images) {
            foreach ($gallery_images as $image) {
          ?>
              <div class="swiper-slide">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full object-cover rounded-xl m-auto xl:h-[500px] lg:h-[370px] md:h-[320px] sm:h-[260px] h-[150px]">

              </div>
          <?php }
          } ?>


        </div>

        <div class="swiper-pagination bottom-0  w-auto"></div>
      </div>

      <div class="grid grid-cols-12 lg:mt-7 lg:mb-16 mt-5 md:mb-10 mb-6 lg:gap-20 md:gap-10 gap-5">
        <div class="md:col-span-7 col-span-12 ">
          <?php the_content(); ?>

        </div>

        <div class="md:col-span-5 col-span-12">
          <?php if (have_rows('venue_settings_overview_sidebar_all_detail')) :
          $i = 0;
            while (have_rows('venue_settings_overview_sidebar_all_detail')) : the_row();

              // Load sub field value.
              $venue_settings_overview_sidebar_all_details_heading = get_sub_field('venue_settings_overview_sidebar_all_details_heading');
          ?>
              <h5 class="lg:text-xl md:text-lg text-base font-bold text-light-grey lg:mb-3 mb-2 <?php if($i >= 1){ ?> mt-7 <?php } ?>">
                <?php echo $venue_settings_overview_sidebar_all_details_heading; ?></h5>
              <?php if (have_rows('venue_settings_overview_sidebar_all_details_all_contetnt')) : 
              $j = 1;
                while (have_rows('venue_settings_overview_sidebar_all_details_all_contetnt')) : the_row();

                  // Load sub field value.
                  $venue_settings_overview_sidebar_all_details_all_content_details = get_sub_field('venue_settings_overview_sidebar_all_details_all_content_details');
              ?>
                  <p class="lg:text-xl md:text-lg text-base font-medium text-grey <?php if($j == 1){ echo 'lg:mb-2 mb-1'; } ?>">
                    <?php echo $venue_settings_overview_sidebar_all_details_all_content_details; ?></p>
              <?php $j++; endwhile;
              endif; ?>
          <?php  $i++; endwhile;
          endif; ?>

          <?php
          $venue_contact_details_address = get_field('venue_contact_details_address');
          $venue_contact_details_url = get_field('venue_contact_details_url');
          $venue_contact_details_number = get_field('venue_contact_details_number');

          $venue_location_url = get_field('venue_location_url');

          ?>
          <h5 class="lg:text-xl md:text-lg text-base font-bold text-light-grey lg:mb-3 mb-2 mt-7">Contact</h5>
          <p class="lg:text-xl md:text-lg text-base font-medium text-grey lg:mb-2 mb-1">
            <?php echo $venue_contact_details_address; ?></p>
          <a href="<?php echo $venue_contact_details_url; ?>" class="lg:text-xl md:text-lg text-base font-medium text-grey">
            <?php echo $venue_contact_details_number; ?></a>
        </div>
      </div>

      <div class="lg:py-12 md:py-10 py-6 border-y border-primary">
        <h3 class="lg:text-4xl text-3xl text-primary bagdoll-display ">Venue
          Features</h3>

        <div class="grid grid-cols-12 pt-7 lg:gap-20 md:gap-10 gap-5">
          <div class="md:col-span-6 col-span-12">
            <ul>
            <?php if (have_rows('venue_features_details')) :
          $i = 0;
            while (have_rows('venue_features_details')) : the_row();

              // Load sub field value.
              $venue_features_details_content = get_sub_field('venue_features_details_content');
              if($i == 6){
                echo '</ul></div><div class="md:col-span-6 col-span-12"><ul>';
              }
          ?>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check">
               <?php echo $venue_features_details_content; ?></a></li>
              <?php  $i++; endwhile;
          endif; ?>
             
            </ul>
          </div>

         

        </div>
      </div>

      <div class="md:mt-12 mt-6">
        <h4 class="lg:text-4xl text-3xl text-primary bagdoll-display ">Venue
          Locations</h4>

        <iframe src="<?php echo $venue_location_url; ?>"></iframe>

      </div>

    </div>

    <div class="text-center lg:pt-100 md:pt-60 pt-10 bg-white">
      <h5 class="lg:text-4xl text-3xl text-primary bagdoll-display ">Venue
        Locations</h5>
      <p class="lg:text-xl md:text-lg text-base font-medium text-grey mt-4 md:mb-14 mb-7 w-[90%] m-auto">Let’s
        start talking about your next event and the right space for you</p>

      <a href="#" class="btn relative z-20 text-sm font-semibold hover:text-primary hover:bg-white transition text-light-black bg-secondary px-11 md:py-5 py-4 rounded-large inline-block uppercase">Book
        now <i class="fa-solid fa-arrow-right ml-2"></i></a>

      <div class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-gradient-to-b before:from-white before:to-[rgb(255, 255, 255, 0.2)]">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues-bottom.webp" alt="venues-bottom" class="w-full">
      </div>

    </div>

  </div>
</section>

<?php get_footer(); ?>