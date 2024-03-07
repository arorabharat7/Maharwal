<?php

/**Template Name: Homepage Template
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php
$home_hero_banner_main_left_image = get_field('home_hero_banner_main_left_image');
$home_hero_banner_round_image = get_field('home_hero_banner_round_image');
$home_hero_banner_main_heading = get_field('home_hero_banner_main_heading');
$home_hero_banner_description = get_field('home_hero_banner_description');
$home_hero_banner_btn_text = get_field('home_hero_banner_btn_text');
$home_hero_banner_btn_url = get_field('home_hero_banner_btn_url');
$home_hero_banner_right_image = get_field('home_hero_banner_right_image');
$hero_banner_bottom_image = get_field('hero_banner_bottom_image');
?>
<section class="hero relative bg-no-repeat lg:pt-60 pt-6 xl:pb-44 pb-14 md:bg-50 bg-auto " style="background-image: url(<?php echo $home_hero_banner_main_left_image['url']; ?>);">
  <div class="container m-auto">

    <div class="grid grid-cols-12 md:gap-0 gap-5">

      <div class="xl:col-span-8 md:col-span-6 col-span-12 relative z-50 md:text-left text-center">
        <img src="<?php echo $home_hero_banner_round_image['url']; ?>" width="<?php echo $home_hero_banner_round_image['width']; ?>" height="<?php echo $home_hero_banner_round_image['height']; ?>" alt="<?php echo $home_hero_banner_round_image['alt']; ?>" class="lg:w-auto w-20 md:mr-0 md:ml-0 m-auto animate-spin-slow">

        <h1 class="xl:text-[117px] lg:text-[80px] md:text-6xl text-5xl bagdoll-display text-white leading-[107%] xl:mt-14 lg:mt-10 mt-7 mb-4">
          <?php echo $home_hero_banner_main_heading; ?></h1>
        <p class="xl:text-lg text-base text-white mb-6 xl:w-full lg:w-[80%]">
          <?php echo $home_hero_banner_description; ?></p>
        <a href="<?php echo $home_hero_banner_btn_url; ?>" class="btn text-sm font-semibold hover:text-primary hover:bg-white transition text-light-black bg-secondary px-7 md:py-5 py-4 rounded-large inline-block uppercase">
          <?php echo $home_hero_banner_btn_text; ?> <i class="fa-solid fa-arrow-right ml-2"></i></a>
      </div>

      <div class="xl:col-span-4 md:col-span-6 col-span-12 md:block hidden">
        <div class="md:absolute right-0 top-0 z-20">
          <img src="<?php echo $home_hero_banner_right_image['url']; ?>" width="<?php echo $home_hero_banner_right_image['width']; ?>" height="<?php echo $home_hero_banner_right_image['height']; ?>" alt="<?php echo $home_hero_banner_right_image['alt']; ?>" class="2xl:w-[88%] xl:w-[80%] md:w-[65%] ml-auto">
        </div>
      </div>


      <div class="md:col-span-6 col-span-12 xl:mt-44 lg:mt-12 mt-8 xl:ml-28 lg:ml-16 md:ml-5">

        <div class="flex items-center xl:gap-20 lg:gap-10 gap-5">
          <?php if (have_rows('home_hero_banner_all_details')) :
            while (have_rows('home_hero_banner_all_details')) : the_row();

              // Load sub field value.
              $home_hero_banner_all_details_heading = get_sub_field('home_hero_banner_all_details_heading');
              $home_hero_banner_all_details_sub_heading = get_sub_field('home_hero_banner_all_details_sub_heading');
              $home_hero_banner_all_details_description = get_sub_field('home_hero_banner_all_details_description');
          ?>
              <div>
                <h2 class="text-secondary xl:text-9xl lg:text-6xl text-5xl  bagdoll-display leading-[107%]"> <?php echo $home_hero_banner_all_details_heading; ?></h2>
                <h3 class="xl:text-[22px] lg:text-xl text-lg text-secondary bagdoll-display"> <?php echo $home_hero_banner_all_details_sub_heading; ?></h3>
                <p class="md:text-base text-sm text-white font-medium"> <?php echo $home_hero_banner_all_details_description; ?></p>
              </div>
          <?php endwhile;
          endif; ?>


        </div>


      </div>


      <div class="md:col-span-6 col-span-12 xl:mt-32 lg:mt-8 md:mt-5 mt-3 xl:ml-16 lg:ml-10 md:ml-6">
        <div class="swiper customer-review ">
          <div class="swiper-wrapper xl:mb-14 mb-10">
            <?php if (have_rows('hero_banner_clients_details')) :
              while (have_rows('hero_banner_clients_details')) : the_row();

                // Load sub field value.
                $hero_banner_clients_details_client_image = get_sub_field('hero_banner_clients_details_client_image');
                $hero_banner_clients_details_client_name = get_sub_field('hero_banner_clients_details_client_name');
                $hero_banner_clients_details_client_review = get_sub_field('hero_banner_clients_details_client_review');
            ?>
                <div class="swiper-slide">
                  <div class="flex lg:gap-5 gap-3 items-center">
                    <img src="<?php echo $hero_banner_clients_details_client_image['url']; ?>" width="<?php echo $hero_banner_clients_details_client_image['width']; ?>" height="<?php echo $hero_banner_clients_details_client_image['height']; ?>" alt="<?php echo $hero_banner_clients_details_client_image['alt']; ?>" class="lg:w-auto w-14">
                    <a href="#" class="xl:text-4xl lg:text-3xl md:text-2xl text-xl md:text-dark-grey text-white font-bold">
                      <?php echo $hero_banner_clients_details_client_name; ?></a>
                  </div>

                  <p class="xl:text-4xl lg:text-3xl md:text-xl text-lg bagdoll-display tracking-[1px] md:text-light-grey text-white lg:mt-5 mt-3">
                    <?php echo $hero_banner_clients_details_client_review; ?></p>
                </div>
            <?php endwhile;
            endif; ?>




          </div>
          <div class="swiper-pagination bottom-0 !left-0 md:!w-auto"></div>
        </div>

      </div>


    </div>
    <img src="<?php echo $hero_banner_bottom_image['url']; ?>" width="<?php echo $hero_banner_bottom_image['width']; ?>" height="<?php echo $hero_banner_bottom_image['height']; ?>" alt="<?php echo $hero_banner_bottom_image['alt']; ?>" class="absolute left-0 xl:w-auto lg:w-[25%] md:w-[15%] w-[30%] lg:bottom-[-200px] md:bottom-[-10px] bottom-[-95px]">

  </div>
</section>

<?php
$events_services_sub_heading = get_field('events_services_sub_heading');
$events_services_main_heading = get_field('events_services_main_heading');
$events_services_description = get_field('events_services_description');
?>
<section class="events lg:py-100 md:pb-60 py-10">
  <div class="container m-auto">
    <div class="text-center">
      <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
        <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase"><?php echo $events_services_sub_heading; ?></span>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
      </div>

      <h2 class="text-primary xl:text-9xl lg:text-6xl md:text-5xl text-4xl bagdoll-display leading-[107%] ">
        <?php echo $events_services_main_heading; ?></h2>

      <p class="xl:text-xl md:text-lg text-base font-medium text-grey xl:w-[55%] m-auto mt-4">
        <?php echo $events_services_description; ?></p>
    </div>

    <div class="grid grid-cols-12 md:mt-11 mt-7 gap-6">
      <?php
      // WP_Query arguments
      $args = array(
        'post_type'      => 'services',
        'posts_per_page' => 4, // Retrieve all posts
      );

      // The Query
      $query = new WP_Query($args);

      // The Loop
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          $services_listing_page_center_images = get_field('services_listing_page_center_images');
      ?>
          <div class="lg:col-span-3 md:col-span-6 col-span-12 relative before:content-[''] before:absolute  before:h-[100%] before:w-full before:left-0 before:bottom-0 before:rounded-[15px] before:bg-[rgb(0,0,0,50%)] lg:h-[455px] md:h-[530px] sm:h-[900px] h-[460px] object-cover">
            <a href="<?php the_permalink(); ?>">
              <?php
              // Get the featured image URL
              $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
              if ($featured_image_url) { ?>
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full rounded-[15px]">
                </a>
              <?php } ?>

              <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] text-center w-3/4 ">

                <?php
                // Get the featured image URL

                if ($services_listing_page_center_images) { ?>

                  <img src="<?php echo $services_listing_page_center_images['url']; ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full lg:height-[315px] height-[250px] rounded-tl-full rounded-tr-full  object-cover">

                <?php } ?>
                <h3 class="md:text-3xl text-2xl text-white bagdoll-display xl:my-5 mt-3 mb-2"><?php the_title(); ?></h3>
                <a href="<?php the_permalink(); ?>" class="text-xs text-white font-medium relative after:content-[''] after:absolute after:-left-2.5 after:top-[50%] after:translate-y-[-50%] after:bg-secondary lg:after:h-7 after:h-5 lg:after:w-7 after:w-5 after:rounded-full after:-z-10">LEARN
                  MORE</a>
              </div>
            </a>
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


    </div>

  </div>
</section>


<?php
$satisfaction_guaranteed_sub_heading = get_field('satisfaction_guaranteed_sub_heading');
$satisfaction_guaranteed_mai_heading = get_field('satisfaction_guaranteed_mai_heading');
$satisfaction_guaranteed_description = get_field('satisfaction_guaranteed_description');
?>
<section class="events-Satisfaction lg:py-100 md:py-60 py-10 bg-white bg-no-repeat lg:bg-auto md:bg-50 bg-30" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_satisfaction-left-bg.webp), url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_satisfaction-right-bg.webp); background-position: top 0% left 0%, right 0% top 0%;">
  <div class="container m-auto">
    <div class="text-center">

      <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
        <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">
          <?php echo $satisfaction_guaranteed_sub_heading; ?></span>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
      </div>
      <h2 class="text-primary xl:text-9xl lg:text-6xl md:text-5xl text-4xl bagdoll-display leading-[107%] ">
        <?php echo $satisfaction_guaranteed_mai_heading; ?> </h2>
    </div>

    <div class="grid grid-cols-12 xl:gap-20 lg:gap-12 md:gap-x-5 md:gap-y-10 gap-y-8 md:mt-16 mt-10">
      <?php if (have_rows('satisfaction_guaranteed_all_details')) :
        while (have_rows('satisfaction_guaranteed_all_details')) : the_row();

          // Load sub field value.
          $satisfaction_guaranteed_all_details_image = get_sub_field('satisfaction_guaranteed_all_details_image');
          $satisfaction_guaranteed_all_details_heading = get_sub_field('satisfaction_guaranteed_all_details_heading');
          $satisfaction_guaranteed_all_details_description = get_sub_field('satisfaction_guaranteed_all_details_description');
      ?>
          <div class="lg:col-span-4 sm:col-span-6 col-span-12 text-center">
            <img src=" <?php echo $satisfaction_guaranteed_all_details_image['url']; ?>" width=" <?php echo $satisfaction_guaranteed_all_details_image['width']; ?>" height=" <?php echo $satisfaction_guaranteed_all_details_image['height']; ?>" alt=" <?php echo $satisfaction_guaranteed_all_details_image['alt']; ?>" class="m-auto">
            <h3 class="xl:text-4xl lg:text-[28px] text-2xl text-primary bagdoll-display md:my-4 mt-4 mb-2">
              <?php echo $satisfaction_guaranteed_all_details_heading; ?>
            </h3>
            <p class="xl:text-lg md:text-base text-sm text-grey font-medium">
              <?php echo $satisfaction_guaranteed_all_details_description; ?></p>

          </div>
      <?php endwhile;
      endif; ?>



    </div>
  </div>
</section>




<section class="menus">

  <div class="grid grid-cols-12">
    <?php if (have_rows('menus_and_venus_all_details')) :
      while (have_rows('menus_and_venus_all_details')) : the_row();

        // Load sub field value.
        $menus_and_venus_all_details_main_image = get_sub_field('menus_and_venus_all_details_main_image');
        $menus_and_venus_all_details_sub_heading = get_sub_field('menus_and_venus_all_details_sub_heading');
        $menus_and_venus_all_details_heading = get_sub_field('menus_and_venus_all_details_heading');
        $menus_and_venus_all_details_page_url = get_sub_field('menus_and_venus_all_details_page_url');
    ?>
        <div class="md:col-span-6 col-span-12 relative before:content-[''] before:absolute  before:h-[100%] before:w-full before:left-0 before:bottom-0   before:bg-[rgb(0,0,0,40%)] ">
          <a href="<?php echo $menus_and_venus_all_details_page_url; ?>">
            <img src=" <?php echo $menus_and_venus_all_details_main_image['url']; ?>" width=" <?php echo $menus_and_venus_all_details_main_image['width']; ?>" height=" <?php echo $menus_and_venus_all_details_main_image['height']; ?>" alt=" <?php echo $menus_and_venus_all_details_main_image['alt']; ?>">

            <div class="absolute top-[50%] left-[50%]  translate-x-[-50%] translate-y-[-50%]">
              <div class="flex gap-2 items-center justify-center xl:mb-7 lg:mb-5 mb-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons" class="w-5 h-5">
                <span class="lg:text-xl md:text-lg text-base text-white font-semibold uppercase">
                  <?php echo $menus_and_venus_all_details_sub_heading; ?></span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons" class="w-5 h-5">
              </div>

              <h2 class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] text-center">
                <?php echo $menus_and_venus_all_details_heading; ?></h2>
            </div>
          </a>
        </div>
    <?php endwhile;
    endif; ?>

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


<section class="contact lg:py-100 md:py-60 py-10 bg-primary">
  <div class="container m-auto">
    <div class="text-center">
      <?php
      $request_a_quote_details = get_field('request_a_quote_details');
      $request_a_quote_btn_url = get_field('request_a_quote_btn_url');
      $request_a_quote_btn_text = get_field('request_a_quote_btn_text');
      ?>
      <?php echo $request_a_quote_details; ?>

      <a href="<?php echo $request_a_quote_btn_url; ?>" class="sm:mt-11 mt-8 btn text-sm font-semibold hover:text-primary hover:bg-white transition text-light-black bg-secondary px-7 md:py-5 py-4 rounded-large inline-block uppercase">
        <?php echo $request_a_quote_btn_text; ?> <i class="fa-solid fa-arrow-right ml-2"></i></a>
    </div>
  </div>
</section>


<?php
$gallery_sub_heading = get_field('gallery_sub_heading');
$gallery_main_heading = get_field('gallery_main_heading');
$gallery_view_all_btn_url = get_field('gallery_view_all_btn_url');
?>
<section class="photo-gallery lg:pt-100 md:pt-60 pt-10">
  <div class="container m-auto">
    <div class="text-center">

      <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
        <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">
          <?php echo $gallery_sub_heading; ?></span>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
      </div>
      <h2 class="text-primary xl:text-9xl lg:text-6xl md:text-5xl text-4xl bagdoll-display leading-[107%] ">
        <?php echo $gallery_main_heading; ?></h2>


      <div class="grid grid-cols-12 gap-1 lg:mt-16 md:mt-12 mt-8 md:mb-10 mb-6">
        <?php if (have_rows('gallery_all_images')) :
          $i = 1;
          while (have_rows('gallery_all_images')) : the_row();

            // Load sub field value.
            $gallery_all_details_big_image = get_sub_field('gallery_all_details_big_image');
            $gallery_all_details_small_one = get_sub_field('gallery_all_details_small_one');
            $gallery_all_details_small_two = get_sub_field('gallery_all_details_small_two');

        ?>
            <?php if ($i % 2 == 1) { ?>
              <div class="md:col-span-8 col-span-12">
                <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-one.webp" width="882" height="510" alt="photo-gallery">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-one.webp" width="882" height="510" alt="photo-gallery" class="w-full md:h-full">
                </a>
              </div>

              <div class="md:col-span-4 col-span-12">
                <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-two.webp" width="433" height="252" alt="photo-gallery" class="w-full">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-two.webp" width="433" height="252" alt="photo-gallery" class="w-full mb-1">
                </a>
                <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-three.webp" width="433" height="252" alt="photo-gallery" class="w-full">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-three.webp" width="433" height="252" alt="photo-gallery" class="w-full">
                </a>
              </div>

            <?php } else { ?>
              <div class="md:col-span-4 col-span-12">
                <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-four.webp" width="433" height="252" alt="photo-gallery" class="w-full">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-four.webp" width="433" height="252" alt="photo-gallery" class="w-full  mb-1">
                </a>
                <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-five.webp" width="433" height="252" alt="photo-gallery" class="w-full">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-five.webp" width="433" height="252" alt="photo-gallery" class="w-full">
                </a>
              </div>

              <div class="md:col-span-8 col-span-12">
                <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-six.webp" width="882" height="510" alt="photo-gallery" class="w-full md:h-full">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_photo-gallery-six.webp" width="882" height="510" alt="photo-gallery" class="w-full md:h-full">
                </a>
              </div>
        <?php }
            $i++;
          endwhile;
        endif; ?>




      </div>


      <a href="<?php echo $gallery_view_all_btn_url; ?>" class="btn text-sm font-semibold hover:text-white hover:bg-primary transition text-light-black bg-secondary px-16 md:py-5 py-4 rounded-large text-center inline-block uppercase">VIEW
        ALL</a>
    </div>
  </div>
</section>




<?php
$blogs_sub_heading = get_field('blogs_sub_heading');
$blogs_main_heading = get_field('blogs_main_heading');
?>
<section class="blog lg:py-100 md:py-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10">
  <div class="container m-auto">
    <div class="text-center">

      <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
        <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">
          <?php echo $blogs_sub_heading; ?></span>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
      </div>
      <h2 class="text-primary xl:text-9xl lg:text-6xl md:text-5xl text-4xl bagdoll-display leading-[107%] ">
        <?php echo $blogs_main_heading; ?>
      </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 lg:mt-16 md:mt-12 mt-8">
      <?php
      $posts_per_page = 3;

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
          echo maharawal_blogs_listings();
          wp_reset_postdata();
        }
      }
      ?>


    </div>
  </div>
</section>




<?php get_footer(); ?>