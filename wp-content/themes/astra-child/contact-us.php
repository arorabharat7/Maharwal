<?php

/**Template Name: Contact Us Template
 
 */

get_header(); ?>

<section class="hero hero-service corporate relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_contact-hero.webp" alt="contact-hero" class="w-full min-h-[200px] object-cover">


    <h1 class="xl:text-9xl lg:text-6xl md:text-5xl text-4xl text-white bagdoll-display leading-[107%] absolute left-[50%] top-[50%] translate-middle">
        <?php echo the_title(); ?></h1>

    <div class="absolute bottom-6 left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5">
        <?php custom_astra_breadcrumbs(); ?>
    </div>

</section>


<?php
$contact_us_section_main_heading = get_field('contact_us_section_main_heading');
$contact_us_section_description = get_field('contact_us_section_description');

$contact_us_section_form_heading = get_field('contact_us_section_form_heading');
$contact_us_section_form_sidebar_main_heading = get_field('contact_us_section_form_sidebar_main_heading');

$cook_image = get_field('cook_image');
?>
<section class="contact-us bg-white pt-5">
    <div class="container m-auto">

        <div class="grid grid-cols-12 items-center md:gap-0 gap-7">
            <div class="md:col-span-6 col-span-12 md:text-left text-center">
                <h2 class="lg:text-[42px] md:text-4xl text-3xl text-primary bagdoll-display">
                    <?php echo $contact_us_section_main_heading; ?>
                </h2>
                <p class="lg:text-lg md:text-base text-sm text-grey font-medium md:mt-4 mt-2">
                    <?php echo $contact_us_section_description; ?></p>
            </div>

            <div class="md:col-span-6 col-span-12 ">
                <img src="<?php echo $cook_image['url']; ?>" alt="contact-cook" class="m-auto">
            </div>
        </div>

    </div>
</section>

<section class="about-connectivity lg:mb-[200px] md:mb-[120px]  mb-[80px] -mt-14">
    <div class="container m-auto">

        <div class="grid grid-cols-12 items-center">
            <div class="md:col-span-6 col-span-12">
                <div id="contactform" class="bg-white  rounded-[30px] md:py-10 py-5 lg:px-8 px-5 shadow-3xl">
                    <h2 class="lg:text-[42px] md:text-4xl text-3xl text-primary bagdoll-display mb-4">
                        <?php echo $contact_us_section_form_heading; ?></h2>

                    <div class="contact-input-box md:py-10 py-5">
                        <input type="text" placeholder="Your Name*" class="md:text-base text-sm font-medium text-light-grey rounded-large lg:py-5 lg:px-7 py-4 px-4 w-full bg-[#F5F5F5] placeholder:text-light-grey  focus-visible:outline-none">

                        <input type="email" placeholder="Email" class="md:text-base text-sm font-medium text-light-grey rounded-large lg:py-5 lg:px-7 py-4 px-4 w-full bg-[#F5F5F5] placeholder:text-light-grey  focus-visible:outline-none md:my-7 my-4">

                        <textarea name="contact-queries" id="contact-queries" placeholder="Wishes/Special Requests/Queries" class="md:text-base text-sm font-medium text-light-grey rounded-3xl lg:py-5 lg:px-7 py-4 px-4 w-full bg-[#F5F5F5] placeholder:text-light-grey lg:h-[170px] md:h-[140px] h-[120px] focus-visible:outline-none"></textarea>
                    </div>

                    <a href="#" class="btn text-sm font-semibold hover:text-primary hover:bg-white transition text-white bg-primary px-7 md:py-5 py-4 rounded-large inline-block uppercase">
                        request a quote<i class="fa-solid fa-arrow-right ml-2"></i></a>

                </div>
            </div>


            <div class="md:col-span-6 col-span-12 lg:pl-20 md:pl-8 md:mt-0 mt-10">
                <h2 class="lg:text-[42px] md:text-4xl text-3xl text-primary bagdoll-display "><?php echo $contact_us_section_form_sidebar_main_heading; ?></h2>
                <?php if (have_rows('contact_us_contact_details')) :
                    while (have_rows('contact_us_contact_details')) : the_row();

                        // Load sub field value.
                        $contact_us_contact_details_image = get_sub_field('contact_us_contact_details_image');
                        $contact_us_contact_details_heading = get_sub_field('contact_us_contact_details_heading');
                        $contact_us_contact_details_url = get_sub_field('contact_us_contact_details_url');
                        $contact_us_contact_details_text = get_sub_field('contact_us_contact_details_text');
                ?>

                        <div class="flex lg:gap-10 md:gap-5 gap-3 lg:mt-10 md:mt-7 mt-5">
                            <a href="#" class="bg-white h-12 w-12 flex items-center justify-center rounded-full">
                                <img src="<?php echo $contact_us_contact_details_image['url']; ?>" alt=""></a>
                            <div>
                                <h3 class="lg:text-lg text-base text-dark-grey font-semibold uppercase">
                                    <?php echo $contact_us_contact_details_heading; ?></h3>
                                <?php if (!empty($contact_us_contact_details_url)) { ?>
                                    <a href=" <?php echo $contact_us_contact_details_url; ?>" class="lg:text-lg md:text-base text-sm text-grey font-medium lg:mt-2 mt-1">
                                        <?php echo $contact_us_contact_details_text; ?></a>
                                <?php  } else { ?>
                                    <p class="lg:text-lg md:text-base text-sm text-grey font-medium lg:mt-2 mt-1">
                                        <?php echo $contact_us_contact_details_text; ?></p>
                                <?php } ?>
                            </div>

                        </div>
                <?php endwhile;
                endif; ?>



            </div>
        </div>

        <?php


        $contact_us_map_url = get_field('contact_us_map_url');
        ?>

        <div class="lg:pt-100 md:pt-60 pt-10">
            <iframe src="<?php echo $contact_us_map_url; ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full md:rounded-2xl rounded-lg lg:h-[440px] md:h-[300px] h-[200px]"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>