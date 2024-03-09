<?php

/**Template Name: Gallery Template
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






<section class="hero hero-service relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_about.webp" alt="hero-about" class="w-full min-h-[200px]">


  <h1 class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
    Gallery</h1>

  <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
    <a href="index.html" class="text-white md:text-lg text-base font-medium border-b border-white">Home</a>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_arrow-left.svg" alt="arrow">
    <a href="#" class="text-white md:text-lg text-base font-medium">Gallery</a>
  </div>

</section>


<section class="photo-gallery modal-gallery lg:py-100 md:pb-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10 relative">
  <div class="container m-auto">




    <div x-data="{ openTab: all-photos }">
      <div class="overflow-auto">
        <div class="category_btn flex md:gap-6 gap-3 my-2 justify-center items-center md:w-full w-[120%]">
          <?php if (have_rows('gallery_tabs')) :
            while (have_rows('gallery_tabs')) : the_row();

              // Load sub field value.
              $category_name = get_sub_field('category_name');
              $category_slug = get_sub_field('category_slug');
          ?>
              <button id="<?php echo $category_slug; ?>" class="btn  lg:py-5 md:py-4 py-2 lg:px-11 md:px-7 px-[14px] md:text-sm text-xs font-semibold text-light-grey rounded-large uppercase focus:outline-none focus:shadow-outline-blue transition-all duration-300 inline-block whitespace-nowrap">
                <?php echo $category_name; ?></button>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
     
        <div class="  transition-all duration-700 lg:mt-16 md:mt-10 mt-6">

        <div class="grid grid-cols-12 md:gap-6 gap-4">
        <div id="parent">
          <?php if (have_rows('gallery_details')) :
            while (have_rows('gallery_details')) : the_row();

              // Load sub field value.
              $gallery_details_image_url = get_sub_field('gallery_details_image_url');
              $gallery_category_select = get_sub_field('gallery_category_select');
          ?>
                  
                
                  <?php if (have_rows('gallery_detail_all_images')) :
                    while (have_rows('gallery_detail_all_images')) : the_row();
                      $gallery_detail_all_images_url = get_sub_field('gallery_detail_all_images_url');

                  ?>
                      <div class="<?php echo $gallery_category_select; ?> column md:col-span-4 sm:col-span-6 col-span-6 open">
                        <a data-fancybox="images" href="<?php echo $gallery_detail_all_images_url['url']; ?>" alt="photo-gallery">
                          <img src="<?php echo $gallery_detail_all_images_url['url']; ?>" alt="photo-gallery" class="hover-shadow cursor-pointer lg:w-[420px] lg:h-[470px] md:w-[230px] md:h[207px] sm:w-[230px] sm:h-[230px] w-[160px] h-[180px] object-cover rounded-xl">
                        </a>
                      </div>

                  <?php endwhile;
                  endif; ?>





                
            
          <?php endwhile;
          endif; ?>
        </div>
        </div>

      </div>
    </div>



  </div>


</section>



<?php get_footer(); ?>