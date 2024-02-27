<?php

/**Template Name: About Us Template
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


<section class="hero hero-about relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

<img src="images/maharwal_about.webp" alt="hero-about" class="w-full min-h-[200px]">


<h1
  class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
  About Us</h1>

<div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
  <a href="index.html" class="text-white md:text-lg text-base font-medium border-b border-white">Home</a>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_arrow-left.svg" alt="arrow">
  <a href="#" class="text-white md:text-lg text-base font-medium">About Us</a>
  <?php custom_astra_breadcrumbs(); ?>
</div>

</section>




<?php get_footer(); ?>