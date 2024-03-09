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

    <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
        <?php custom_astra_breadcrumbs(); ?>

    </div>

</section>


<section class="venue-location lg:py-100 md:py-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10">
    <div class="container m-auto">
        <div class="text-center">
            <h2 class="lg:text-[42px] md:text-4xl text-3xl text-primary bagdoll-display">Discover
                the Ideal Location</h2>

            <p class="lg:text-xl md:text-lg text-base text-grey md:mt-5 mt-3 font-medium lg:w-[60%] m-auto">We
                are committed to excellence in all facets of our business, including
                assisting you in selecting the perfect venue for your event</p>
        </div>

        <?php
        // Define pagination parameters
        $posts_per_page = 6;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


        // $tag_slug = isset($_GET['tag']) ? $_GET['tag'] : '';
        // WP_Query arguments
        $args = array(
            'post_type'      => 'venue',
            'posts_per_page' => $posts_per_page,
            'paged'          => $paged,
            // 'tag'            => $tag_slug,
        );



        // The Query
        $query = new WP_Query($args);

        // The Loop
        if ($query->have_posts()) {
            $j = 0;
            while ($query->have_posts()) {
                $query->the_post();

                $title = get_the_title();
                //$short_title = strlen($title) > 35 ? substr($title, 0, 35) . '...' : $title;

                $description = get_the_excerpt();
                $short_description = strlen($description) > 90 ? substr($description, 0, 90) . '...' : $description;

                $author_name = get_the_author();

                $address = get_field('venue_contact_details_address');
        ?>

                <div class="grid grid-cols-12 lg:mt-16 md:mt-12 mt-10 bg-white rounded-[20px] items-center">
                    <?php if ($j % 2 == 0) { ?>
                        <div class="lg:col-span-6 col-span-12 lg:order-1 order-2 xl:px-20 md:px-10 px-5 lg:py-0 md:py-10 py-5  lg:rounded-tl-[20px] lg:rounded-bl-[20px] lg:rounded-br-[0px] rounded-bl-[20px] rounded-br-[20px]">
                            <h3 class="lg:text-4xl md:text-3xl text-2xl text-primary bagdoll-display"> <?php echo $title; ?></h3>
                            <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium border-b border-grey pb-2 xl:mb-7 mb-4">
                                <?php echo $address; ?></p>

                            <div class="flex xl:pr-2 l:gr-2 xl:md-2 pr-2">
                                <?php if (have_rows('venue_features_details')) :
                                    $i = 0;
                                    while (have_rows('venue_features_details') && $i < 2) : the_row();

                                        // Load sub field value.
                                        $venue_features_details_content = get_sub_field('venue_features_details_content');
                                        if ($i == 0) {
                                ?>
                                            <h4 class="xl:text-xl lg:text-lg text-base text-light-grey font-bold py-1">
                                            <?php
                                            echo $venue_features_details_content;
                                        } else { ?>
                                                <h4 class="xl:text-xl lg:text-lg text-base text-light-grey font-bold py-1"> <span class="border-l border-light-grey pl-4 ml-4"><?php echo $venue_features_details_content; ?></span></h4>
                                            <?php  } ?>
                                            </h4>
                                    <?php
                                        $i++;
                                    endwhile;
                                endif;
                                    ?>
                            </div>
                            <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium">
                                <?php echo $short_description; ?></p>

                            <a href="<?php the_permalink(); ?>" class="text-sm text-light-grey font-medium relative z-10 after:content-[''] after:absolute after:-left-2.5 after:top-[50%] after:translate-y-[-50%] after:bg-secondary md:after:h-11 md:after:w-11 after:h-7 after:w-7 after:rounded-full after:z-[-1] block mt-3 ml-3">
                                EXPLORE THIS VENUE <i class="fa-solid fa-arrow-right ml-2"></i></a>
                        </div>

                        <div class="lg:col-span-6 col-span-12 lg:order-2 order-1">
                            <?php
                            // Get the featured image URL
                            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                            if ($featured_image_url) { ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full lg:rounded-tr-[20px] lg:rounded-br-[20px] lg:rounded-tl-[0px] rounded-tl-[20px] rounded-tr-[20px] object-cover xl:h-[435px] lg:h-[335px] md:h-[550px] sm:h-[400px] h-[250px]">
                                </a>
                            <?php } ?>

                        </div>
                    <?php } else { ?>
                        <div class="lg:col-span-6 col-span-12 lg:order-1 order-2">
                            <?php
                            // Get the featured image URL
                            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                            if ($featured_image_url) { ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full lg:rounded-tl-[20px] lg:rounded-bl-[20px] lg:rounded-tr-[0px] rounded-tl-[20px] rounded-tr-[20px] object-cover xl:h-[435px] lg:h-[335px] md:h-[550px] sm:h-[400px] h-[250px]">
                                </a>
                            <?php } ?>

                        </div>
                        <div class="lg:col-span-6 col-span-12 lg:order-2 order-1 xl:px-20 md:px-10 px-5 xl:pr-2 md:pr-2 pr-2 lg:py-0 md:py-10 py-5  lg:rounded-tl-[20px] lg:rounded-bl-[20px] lg:rounded-br-[0px] rounded-bl-[20px] rounded-br-[20px]">
                            <h3 class="lg:text-4xl md:text-3xl text-2xl text-primary bagdoll-display"> <?php echo $title; ?></h3>
                            <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium border-b border-grey pb-2 xl:mb-7 mb-4">
                                <?php echo $address; ?></p>

                            <div class="flex">
                                <?php if (have_rows('venue_features_details')) :
                                    $i = 0;
                                    while (have_rows('venue_features_details') && $i < 2) : the_row();

                                        // Load sub field value.
                                        $venue_features_details_content = get_sub_field('venue_features_details_content');
                                        if ($i == 0) {
                                ?>
                                            <h4 class="xl:text-xl lg:text-lg text-base text-light-grey font-bold py-1">
                                            <?php
                                            echo $venue_features_details_content;
                                        } else { ?>
                                                <h4 class="xl:text-xl lg:text-lg text-base text-light-grey font-bold py-1"> <span class="border-l border-light-grey pl-4 ml-4"><?php echo $venue_features_details_content; ?></span></h4>
                                            <?php  } ?>
                                            </h4>
                                    <?php
                                        $i++;
                                    endwhile;
                                endif;
                                    ?>
                            </div>
                            <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium">
                                <?php echo $short_description; ?></p>

                            <a href="<?php the_permalink(); ?>" class="text-sm text-light-grey font-medium relative z-10 after:content-[''] after:absolute after:-left-2.5 after:top-[50%] after:translate-y-[-50%] after:bg-secondary md:after:h-11 md:after:w-11 after:h-7 after:w-7 after:rounded-full after:z-[-1] block mt-3 ml-3">
                                EXPLORE THIS VENUE <i class="fa-solid fa-arrow-right ml-2"></i></a>
                        </div>
                    <?php } ?>

                </div>
                <?php $pagi = pagination_bar($query);
                //print_r($pagi);
                if ($pagi) :

                    echo '<ul class="pagination flex items-center gap-2 justify-center lg:mt-24 md:mt-16 mt-7">';
                    foreach ($pagi as $key => $page_link) :

                        if (strpos($page_link, 'current') !== false) {
                            $page_link = str_replace('<li aria-current="page" >', '', $page_link);
                            $page_link = str_replace('</li>', '', $page_link);
                        }

                ?>
                        <li><a href class="md:text-base text-sm text-white bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">
                                <?php echo $page_link ?>
                            </a> </li>

                <?php
                    endforeach;
                    echo '</ul>';
                endif;


                ?>

        <?php wp_reset_postdata();
                $j++;
            }
        }
        ?>


        <ul class="pagination flex items-center gap-2 justify-center lg:mt-24 md:mt-16 mt-7">
            <li><a href class="md:text-base text-sm text-white bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">1</a></li>
            <li><a href class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition ">2</a></li>
            <li><a href class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">3</a></li>
            <li><a href class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">4</a></li>
            <li><a href class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">....</a></li>
            <li><a href class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">10</a></li>
            <li><a href class="md:text-base text-sm text-light-grey hover:text-white bg-white hover:bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition">11</a></li>
        </ul>

    </div>
</section>



<?php get_footer(); ?>