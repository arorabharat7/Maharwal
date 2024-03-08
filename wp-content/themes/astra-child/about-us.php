<?php

/**Template Name: About Template
 
 */

get_header(); ?>

<?php
$common_hero_section_main_image = get_field('common_hero_section_main_image');
$common_hero_section_main_heading = get_field('common_hero_section_main_heading');
?>
<section class="hero hero-about relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

    <img src="<?php echo $common_hero_section_main_image['url']; ?>" alt="hero-about" class="w-full min-h-[200px]">


    <h1 class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
        <?php echo $common_hero_section_main_heading; ?></h1>

    <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
        <?php custom_astra_breadcrumbs(); ?>
    </div>

</section>

<?php
$about_settings_partner_section_main_heading = get_field('about_settings_partner_section_main_heading');

?>
<section class="events lg:py-100 md:pb-60 py-10">
    <div class="container m-auto">
        <div class="text-center">
            <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
                <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">
                    <?php echo $about_settings_partner_section_main_heading; ?></span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
            </div>

        </div>

        <div class="grid grid-cols-12 md:mt-11 mt-7 md:gap-7 gap-5">
            <?php if (have_rows('about_settings_partner_section_all_details')) :
                while (have_rows('about_settings_partner_section_all_details')) : the_row();

                    // Load sub field value.
                    $about_settings_partner_images = get_sub_field('about_settings_partner_images');
            ?>
                    <div class="md:col-span-3 col-span-6">
                        <img src="<?php echo $about_settings_partner_images['url']; ?>" alt="<?php echo $about_settings_partner_images['alt']; ?>">
                    </div>
            <?php endwhile;
            endif; ?>

        </div>

    </div>
</section>

<?php
$our_vision_and_mission_sub_heading = get_field('our_vision_and_mission_sub_heading');
$our_vision_and_mission_main_heading = get_field('our_vision_and_mission_main_heading');

?>
<section class="events-Satisfaction assurence lg:py-100 md:py-60 py-10 bg-white">
    <div class="container m-auto">
        <div class="text-center">

            <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
                <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">
                    <?php echo $our_vision_and_mission_sub_heading; ?></span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
            </div>
            <h2 class="text-primary xl:text-9xl lg:text-6xl md:text-5xl text-4xl bagdoll-display leading-[107%] ">
                <?php echo $our_vision_and_mission_main_heading; ?> </h2>
        </div>

        <div class="grid grid-cols-12 xl:gap-20 lg:gap-12 md:gap-x-5 md:gap-y-10 gap-y-8 md:mt-16 mt-10">
            <?php if (have_rows('our_vision_and_mission_all_details')) :
                while (have_rows('our_vision_and_mission_all_details')) : the_row();
                    $our_vision_and_mission_repeater_image = get_sub_field('our_vision_and_mission_repeater_image');
                    $our_vision_and_mission_repeater_eading = get_sub_field('our_vision_and_mission_repeater_eading');
                    $our_vision_and_mission_repeater_description = get_sub_field('our_vision_and_mission_repeater_description');
            ?>
                    <div class="lg:col-span-6 sm:col-span-6 col-span-12 text-center">
                        <img src="<?php echo $our_vision_and_mission_repeater_image['url']; ?>" width="65" height="65" alt="<?php echo $our_vision_and_mission_repeater_image['alt']; ?>" class="m-auto">
                        <h3 class="xl:text-4xl lg:text-[28px] text-2xl text-primary bagdoll-display md:my-4 mt-4 mb-2">
                            <?php echo $our_vision_and_mission_repeater_eading; ?>
                        </h3>
                        <p class="xl:text-lg md:text-base text-sm text-grey font-medium">
                            <?php echo $our_vision_and_mission_repeater_description; ?> </p>

                    </div>
            <?php endwhile;
            endif; ?>





        </div>
    </div>
</section>



 
<?php
$how_it_works_sub_heading = get_field('how_it_works_sub_heading');
$how_it_works_main_heading = get_field('how_it_works_main_heading');

?>
<section class="work-event lg:py-100 md:py-60 py-10 relative">
    <div class="container m-auto">
        <div class="text-center">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_testimonial-left-bg.webp" alt="testimonial-left" class="absolute lg:bottom-[-370px] md:bottom-[-260px] bottom-[-90px] left-0 lg:w-auto w-[50%]">

            <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
                <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">
                <?php echo $how_it_works_sub_heading; ?></span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
            </div>
            <h2 class="text-primary xl:text-9xl lg:text-6xl md:text-5xl text-4xl bagdoll-display leading-[107%] ">
            <?php echo $how_it_works_main_heading; ?></h2>
        </div>

        <div class="grid grid-cols-12 gap-x-3 lg:gap-y-[70px] md:gap-y-10 gap-y-6 lg:mt-16 md:mt-12 mt-10">
        <?php if (have_rows('how_it_works_all_details')) :
        $i = 1;
                while (have_rows('how_it_works_all_details')) : the_row();
                    $how_it_works_all_details_heading = get_sub_field('how_it_works_all_details_heading');
                    $how_it_works_all_details_description = get_sub_field('how_it_works_all_details_description');
                    $how_it_works_all_details_number = get_sub_field('how_it_works_all_details_number');
        ?>
            <div class="lg:col-span-4 sm:col-span-6 col-span-12 relative flex gap-4">

                <div class="lg:text-[70px] text-5xl leading-none before-text">
                01
                </div>
<div>
<h3 class="xl:text-4xl lg:text-[28px] text-2xl text-primary bagdoll-display md:mb-4 mb-2 border-b border-primary md:pb-2.5 pb-1 w-[85%]">
                <?php echo $how_it_works_all_details_heading; ?>
                </h3>
                <p class="xl:text-lg md:text-base text-sm text-grey font-medium">
                <?php echo $how_it_works_all_details_description; ?></p>
</div>
            

            </div>
            <?php $i++; endwhile;
            endif; ?>
           

        </div>
    </div>
</section>


<?php
$testimonials_sub_heading = get_field('testimonials_sub_heading');
$testimonials_main_heading = get_field('testimonials_main_heading');

?>

<section class="events-Satisfaction assurence lg:py-100 md:py-60 py-10 bg-white overflow-hidden">


   
   <div class="text-center">
 
     <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
       <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">
       <?php echo $testimonials_sub_heading; ?></span>
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
     </div>
     <h2 class="text-primary xl:text-9xl lg:text-6xl md:text-5xl text-4xl bagdoll-display leading-[107%] ">
     <?php echo $testimonials_main_heading; ?> </h2>
   </div>


<div class="xl:mx-[-400px] lg:mx-[-300px] md:mx-[-250px] ">
<div class="swiper testimonial-slider">
 <div class="swiper-wrapper lg:mt-16 mt-10">
 <?php if (have_rows('testimonials_details')) :
 
                while (have_rows('testimonials_details')) : the_row();
                    $testimonials_details_comment = get_sub_field('testimonials_details_comment');
                    $testimonials_details_image = get_sub_field('testimonials_details_image');
                    $testimonials_details_name = get_sub_field('testimonials_details_name');
                    $testimonials_details_post = get_sub_field('testimonials_details_post');
        ?>
   <div class="swiper-slide">
     <p class="xl:text-4xl lg:text-3xl md:text-xl text-lg bagdoll-display tracking-[1px] text-primary text-center">
       <?php echo $testimonials_details_comment; ?></p>

       <img src="<?php echo $testimonials_details_image['url']; ?>" width="60" height="60" alt="user-review" class="m-auto lg:w-auto w-12 lg:my-7 my-4">

       <p class="text-dark-grey lg:text-3xl md:text-[22px] text-lg font-medium text-center">
       <?php echo $testimonials_details_name; ?> / <span class="lg:text-2xl md:text-lg text-base text-[#8A8A8A]">
       <?php echo $testimonials_details_post; ?></span></p>

   </div>
   <?php  endwhile;
            endif; ?>
  

 </div>
 <div class="swiper-button-next md:!right-[30%] md:!top-[50%] !top-[70%] after:hidden border border-[rgba(0, 0, 0, 0.4)] rounded-full xl:!w-14 xl:!h-14 !w-10 !h-10"><i class="fa-solid fa-arrow-right xl:text-3xl lg:text-2xl text-xl text-light-grey"></i></div>
 <div class="swiper-button-prev md:!left-[30%] md:!top-[50%] !top-[70%] after:hidden border border-[rgba(0, 0, 0, 0.4)] rounded-full xl:!w-14 xl:!h-14 !w-10 !h-10"><i class="fa-solid fa-arrow-left xl:text-3xl lg:text-2xl text-xl text-light-grey"></i></div>
</div>
</div>
   

    

</section>



<?php
$our_teams_sub_heading = get_field('our_teams_sub_heading');
$our_teams_main_heading = get_field('our_teams_main_heading');

?>

<section class="our-team lg:py-100 md:py-60 py-10 bg-no-repeat bg-auto bg-center" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_team-bg.webp);">
  <div class="container m-auto">
    <div class="text-center">

      <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
        <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">
          <?php echo $our_teams_sub_heading; ?></span>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
      </div>
      <h2 class="text-primary xl:text-9xl lg:text-6xl md:text-5xl text-4xl bagdoll-display leading-[107%] ">
        <?php echo $our_teams_main_heading; ?>
      </h2>
    </div>

    <div class="grid grid-cols-12 gap-5 xl:mt-28 lg:mt-16 md:mt-12 mt-10">
      <?php if (have_rows('our_teams_details')) :
        $i = 1;
        while (have_rows('our_teams_details')) : the_row();

          // Load sub field value.
          $our_teams_details_member_image = get_sub_field('our_teams_details_member_image');
          $our_teams_details_member_name = get_sub_field('our_teams_details_member_name');
          $our_teams_details_member_post = get_sub_field('our_teams_details_member_post');

      ?>
          <div class="md:col-span-3 col-span-6 text-center <?php if ($i % 2 == 0) { ?>mt-16 <?php } ?>">
            <img src=" <?php echo $our_teams_details_member_image['url']; ?>" width=" <?php echo $our_teams_details_member_image['width']; ?>" height=" <?php echo $our_teams_details_member_image['height']; ?>" alt=" <?php echo $our_teams_details_member_image['alt']; ?>" class="m-auto">
            <h3 class="xl:text-4xl lg:text-[28px] text-2xl text-primary bagdoll-display mt-5 mb-1">
              <?php echo $our_teams_details_member_name; ?></h3>
            <h4 class="xl:text-xl lg:text-lg text-base text-dark-grey font-semibold uppercase">
              <?php echo $our_teams_details_member_post; ?></h4>

          </div>
      <?php $i++;
        endwhile;
      endif; ?>


    </div>
  </div>
</section>

<section class="connect-us bg-no-repeat bg-cover lg:pt-100 md:pt-60 pt-10 lg:pb-[200px] md:pb-36 pb-16" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_about-cater-event.webp);">
 

      <div class="text-center">
        <h2 class="xl:text-[42px] lg:text-4xl md:text-3xl text-2xl text-white font-semibold md:mb-11 mb-5 bagdoll-display tracking-[4px]">Your next catered event!</h2>

        <a href="#" class="btn text-sm font-semibold hover:text-primary hover:bg-white transition text-light-black bg-secondary px-7 md:py-5 py-4 rounded-large inline-block uppercase">Get in touch <i class="fa-solid fa-arrow-right ml-2"></i></a>
      </div>

  </section>

<?php get_footer(); ?>
