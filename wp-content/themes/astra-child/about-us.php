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


<section class="events lg:py-100 md:pb-60 py-10">
    <div class="container m-auto">
        <div class="text-center">
            <div class="flex gap-2 items-center justify-center md:mb-6 mb-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
                <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">PARTNERS WE SERVE</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
            </div>

        </div>

        <div class="grid grid-cols-12 md:mt-11 mt-7 md:gap-7 gap-5">

            <div class="md:col-span-3 col-span-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_partner_carlton.webp" alt="partner_carlton">
            </div>

            <div class="md:col-span-3 col-span-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_partner_fairmont.webp" alt="partner_fairmont">
            </div>


            <div class="md:col-span-3 col-span-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_partner_fourseason.webp" alt="partner_fourseason">
            </div>

            <div class="md:col-span-3 col-span-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_partner_commonwealth.webp" alt="partner_commonwealth">
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>