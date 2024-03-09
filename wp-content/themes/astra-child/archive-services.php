<?php

/**

 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>


<section class="hero hero-service relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_about.webp" alt="hero-about" class="w-full min-h-[200px]">


    <h1 class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
        Services</h1>

    <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
        <?php custom_astra_breadcrumbs(); ?>
    </div>

</section>


<section class="service lg:py-100 md:pb-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10">
    <div class="container m-auto">

        <p class="contrast-less:lg:text-xl md:text-lg text-base text-grey font-medium lg:w-2/4 m-auto text-center">We provide catering for company events and drink parties. Full-service catering with drinks, canapes, luxury appetizers, waiting staff, and rental materials. Plenty of vegetarian and vegan options!</p>


        <div class="grid grid-cols-12 lg:py-100 md:py-60 py-10 gap-6">
            <?php
            // WP_Query arguments
            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => -1, // Retrieve all posts
            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $services_listing_page_center_images = get_field('services_listing_page_center_images');
            ?>
                    <div class="lg:col-span-6 md:col-span-6 col-span-12 relative before:content-[''] before:absolute  before:h-[100%] before:w-full before:left-0 before:bottom-0 before:!rounded-[30px] before:bg-[rgb(0,0,0,50%)] xl:h-[840px] lg:h-[725px] md:h-[535px] sm:h-[900px] h-[500px] overflow-hidden rounded-[30px]">
                        <?php
                        // Get the featured image URL
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                        if ($featured_image_url) { ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full mt-6 xl:mb-20 lg:mb-14 mb-10 xl:h-[840px] lg:h-[725px] md:h-[535px] sm:h-[900px] h-[500px]">
                            </a>
                        <?php } ?>
                        <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] text-center w-3/4"><a href="<?php the_permalink(); ?>">
                                <h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-white bagdoll-display"><?php the_title(); ?></h3>
                                <?php
                                
                                // Get the featured image URL
                                
                                if ($services_listing_page_center_images) { ?>

                                    <img src="<?php echo $services_listing_page_center_images['url']; ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full mt-6 xl:mb-20 lg:mb-14 mb-10 rounded-tl-full rounded-tr-full xl:h-[620px] lg:h-[475px] md:h-[350px] sm:h-[597px] h-[330px]">

                                <?php } ?>
                            </a>
                            <a href="<?php the_permalink(); ?>" class="text-xs text-white font-medium relative after:content-[''] after:absolute after:-left-2.5 after:top-[50%] after:translate-y-[-50%] after:bg-secondary lg:after:h-7 after:h-5 lg:after:w-7 after:w-5 after:rounded-full after:-z-10">LEARN
                                MORE</a>
                        </div>

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


    <div class="text-center">
        <?php
        $request_quote_all_details = get_field('request_quote_all_details', 'Options');
        $request_quote_button_url = get_field('request_quote_button_url', 'Options');
        ?>
        <?php echo $request_quote_all_details; ?>
        <a href="<?php echo $request_quote_button_url; ?>" class="btn text-sm font-semibold hover:text-primary hover:bg-white transition text-light-black bg-secondary px-7 md:py-5 py-4 rounded-large inline-block uppercase">request
            a quote <i class="fa-solid fa-arrow-right ml-2"></i></a>
    </div>


    </div>
</section>


<?php get_footer(); ?>