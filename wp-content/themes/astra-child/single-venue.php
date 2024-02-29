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
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full m-auto">

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
            while (have_rows('venue_settings_overview_sidebar_all_detail')) : the_row();

              // Load sub field value.
              $venue_settings_overview_sidebar_all_details_heading = get_sub_field('venue_settings_overview_sidebar_all_details_heading');
          ?>
              <h5 class="lg:text-xl md:text-lg text-base font-bold text-light-grey lg:mb-3 mb-2">
                <?php echo $venue_settings_overview_sidebar_all_details_heading; ?></h5>
              <?php if (have_rows('venue_settings_overview_sidebar_all_details_all_contetnt')) :
                while (have_rows('venue_settings_overview_sidebar_all_details_all_contetnt')) : the_row();

                  // Load sub field value.
                  $venue_settings_overview_sidebar_all_details_all_content_details = get_sub_field('venue_settings_overview_sidebar_all_details_all_content_details');
              ?>
                  <p class="lg:text-xl md:text-lg text-base font-medium text-grey">
                    <?php echo $venue_settings_overview_sidebar_all_details_all_content_details; ?></p>
              <?php endwhile;
              endif; ?>
          <?php endwhile;
          endif; ?>

          <?php
          $venue_contact_details_address = get_field('venue_contact_details_address');
          $venue_contact_details_url = get_field('venue_contact_details_url');
          $venue_contact_details_number = get_field('venue_contact_details_number');

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
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Evening Reception Facilities</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Marquee Availables</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Entertainment Licence</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Live Band Facilities</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> DJ Facilities</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Outdoor Fireworks Permitted</a></li>
            </ul>
          </div>

          <div class="md:col-span-6 col-span-12">
            <ul>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Civil Ceremony Licence</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Buffet Meal Facilities</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Allows Private Catering</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Alcohol Licence</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Corkage Option</a></li>
              <li><a href class="lg:text-xl md:text-lg text-base font-medium text-grey flex items-center md:gap-3 gap-2 md:mb-5 mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_check.svg" width="26" height="26" alt="check"> Marquees and Tents</a></li>
            </ul>
          </div>

        </div>
      </div>

      <div class="md:mt-12 mt-6">
        <h4 class="lg:text-4xl text-3xl text-primary bagdoll-display ">Venue
          Locations</h4>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14234.264330532695!2d75.72134613990782!3d26.885523971399913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5f2f4d6b1cb%3A0x5317587bf141effb!2sHotel%20Highway%20King!5e0!3m2!1sen!2sin!4v1708350313486!5m2!1sen!2sin" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full md:rounded-2xl rounded-lg md:mt-10 mt-5 lg:h-[440px] md:h-[300px] h-[200px]"></iframe>

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