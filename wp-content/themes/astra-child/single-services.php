<?php

/**

 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>


<section class="hero hero-service relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_about.webp" alt="hero-about" class="w-full min-h-[200px]">


<h1
  class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
  Testing</h1>

<div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
<?php custom_astra_breadcrumbs(); ?>
</div>

</section>



<?php get_footer(); ?>