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






  <section
    class="hero hero-service relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_about.webp" alt="hero-about" class="w-full min-h-[200px]">


    <h1
      class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
      Gallery</h1>

    <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
      <a href="index.html" class="text-white md:text-lg text-base font-medium border-b border-white">Home</a>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_arrow-left.svg" alt="arrow">
      <a href="#" class="text-white md:text-lg text-base font-medium">Gallery</a>
    </div>

  </section>


  <section class="photo-gallery modal-gallery lg:py-100 md:pb-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10 relative">
    <div class="container m-auto">




      <div x-data="{ openTab: 1 }">
        <div class="overflow-auto">
          <div class=" flex md:gap-6 gap-3 my-2 justify-center items-center md:w-full w-[120%]">
            <button x-on:click="openTab = 1" :class="{ 'bg-gradient-linear text-white': openTab === 1 }"
              class=" lg:py-5 md:py-4 py-2 lg:px-11 md:px-7 px-[14px] md:text-sm text-xs font-semibold text-light-grey rounded-large uppercase focus:outline-none focus:shadow-outline-blue transition-all duration-300 inline-block whitespace-nowrap">All
              photos</button>
            <button x-on:click="openTab = 2" :class="{ 'bg-gradient-linear text-white': openTab === 2 }"
              class=" lg:py-5 md:py-4 py-2 lg:px-11 md:px-7 px-[14px] md:text-sm text-xs font-semibold text-light-grey rounded-large uppercase focus:outline-none focus:shadow-outline-blue transition-all duration-300 inline-block whitespace-nowrap">catering</button>
            <button x-on:click="openTab = 3" :class="{ 'bg-gradient-linear text-white': openTab === 3 }"
              class=" lg:py-5 md:py-4 py-2 lg:px-11 md:px-7 px-[14px] md:text-sm text-xs font-semibold text-light-grey rounded-large uppercase focus:outline-none focus:shadow-outline-blue transition-all duration-300 inline-block whitespace-nowrap">Food</button>
            <button x-on:click="openTab = 4" :class="{ 'bg-gradient-linear text-white': openTab === 4 }"
              class=" lg:py-5 md:py-4 py-2 lg:px-11 md:px-7 px-[14px] md:text-sm text-xs font-semibold text-light-grey rounded-large uppercase focus:outline-none focus:shadow-outline-blue transition-all duration-300 inline-block whitespace-nowrap">venues</button>
          </div>
        </div>


        <div x-show="openTab === 1" class="transition-all duration-700 lg:mt-16 md:mt-10 mt-6">

          <div class="grid grid-cols-12 md:gap-6 gap-4">

            <div class="column md:col-span-4 sm:col-span-6 col-span-6 open">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-one.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-one.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-two.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-two.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-three.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-three.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-four.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-four.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-five.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-five.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-six.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-six.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>


            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-seven.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-seven.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>


            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eight.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eight.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-nine.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-nine.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-ten.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-ten.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eleven.webp" alt="photo-gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eleven.webp" alt="photo-gallery"
                  class="hover-shadow cursor-pointer">
              </a>
            </div>


          </div>


        </div>

        <div x-show="openTab === 2" class="transition-all duration-700 lg:mt-16 md:mt-10 mt-6">

          <div class="grid grid-cols-12 md:gap-6 gap-4">

            <div class="column md:col-span-4 sm:col-span-6 col-span-6 open">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-one.webp" class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-two.webp" onclick="openModal();currentSlide(2)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-three.webp" onclick="openModal();currentSlide(3)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-four.webp" onclick="openModal();currentSlide(4)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-five.webp" onclick="openModal();currentSlide(5)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-six.webp" onclick="openModal();currentSlide(6)"
                class="hover-shadow cursor-pointer">
            </div>


            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-seven.webp" onclick="openModal();currentSlide(7)"
                class="hover-shadow cursor-pointer">
            </div>


            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eight.webp" onclick="openModal();currentSlide(8)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-nine.webp" onclick="openModal();currentSlide(9)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-ten.webp" onclick="openModal();currentSlide(10)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eleven.webp" onclick="openModal();currentSlide(11)"
                class="hover-shadow cursor-pointer">
            </div>


          </div>
        </div>

        <div x-show="openTab === 3" class="transition-all duration-700 lg:mt-16 md:mt-10 mt-6">
          <div class="grid grid-cols-12 md:gap-6 gap-4">

            <div class="column md:col-span-4 sm:col-span-6 col-span-6 open">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-one.webp" class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-two.webp" onclick="openModal();currentSlide(2)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-three.webp" onclick="openModal();currentSlide(3)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-four.webp" onclick="openModal();currentSlide(4)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-five.webp" onclick="openModal();currentSlide(5)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-six.webp" onclick="openModal();currentSlide(6)"
                class="hover-shadow cursor-pointer">
            </div>


            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-seven.webp" onclick="openModal();currentSlide(7)"
                class="hover-shadow cursor-pointer">
            </div>


            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eight.webp" onclick="openModal();currentSlide(8)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-nine.webp" onclick="openModal();currentSlide(9)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-ten.webp" onclick="openModal();currentSlide(10)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eleven.webp" onclick="openModal();currentSlide(11)"
                class="hover-shadow cursor-pointer">
            </div>


          </div>
        </div>

        <div x-show="openTab === 4" class="transition-all duration-700 lg:mt-16 md:mt-10 mt-6">
          <div class="grid grid-cols-12 md:gap-6 gap-4">

            <div class="column md:col-span-4 sm:col-span-6 col-span-6 open">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-one.webp" onclick="openModal();currentSlide(1)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-two.webp" onclick="openModal();currentSlide(2)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-three.webp" onclick="openModal();currentSlide(3)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-four.webp" onclick="openModal();currentSlide(4)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-five.webp" onclick="openModal();currentSlide(5)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-six.webp" onclick="openModal();currentSlide(6)"
                class="hover-shadow cursor-pointer">
            </div>


            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-seven.webp" onclick="openModal();currentSlide(7)"
                class="hover-shadow cursor-pointer">
            </div>


            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eight.webp" onclick="openModal();currentSlide(8)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-nine.webp" onclick="openModal();currentSlide(9)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-ten.webp" onclick="openModal();currentSlide(10)"
                class="hover-shadow cursor-pointer">
            </div>

            <div class="column md:col-span-4 sm:col-span-6 col-span-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_gallery-inner-eleven.webp" onclick="openModal();currentSlide(11)"
                class="hover-shadow cursor-pointer">
            </div>


          </div>
        </div>



      </div>

    </div>
  </section>



  <?php get_footer(); ?>