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
    $posts_per_page = 1;
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
      while ($query->have_posts()) {
        $query->the_post();
      
        $title = get_the_title();
        //$short_title = strlen($title) > 35 ? substr($title, 0, 35) . '...' : $title;

        $description = get_the_excerpt();
        $short_description = strlen($description) > 90 ? substr($description, 0, 90) . '...' : $description;

        $author_name = get_the_author();
    ?>


        <div class="grid grid-cols-12 lg:mt-16 md:mt-12 mt-10 bg-white rounded-[20px] items-center">

            <div class="lg:col-span-6 col-span-12 lg:order-1 order-2 xl:px-20 md:px-10 px-5 lg:py-0 md:py-10 py-5  lg:rounded-tl-[20px] lg:rounded-bl-[20px] lg:rounded-br-[0px] rounded-bl-[20px] rounded-br-[20px]">
                <h3 class="lg:text-4xl md:text-3xl text-2xl text-primary bagdoll-display"> <?php echo $title; ?></h3>
                <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium border-b border-grey pb-2 xl:mb-7 mb-4">123, Main Street, Jaipur, Rajasthan, 302015</p>

                <h4 class="xl:text-xl lg:text-lg text-base text-light-grey font-bold py-1">Capacity 1,200<span class="border-l border-light-grey pl-4 ml-4">15,000 SQFT</span></h4>

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
                <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full lg:rounded-tr-[20px] lg:rounded-br-[20px] lg:rounded-tl-[0px] rounded-tl-[20px] rounded-tr-[20px] ">
              </a>
            <?php } ?>

            </div>

        </div>
        <?php $pagi = pagination_bar($query);
			//print_r($pagi);
			if ($pagi) :

				echo '<ul class="pagination flex items-center gap-2 justify-center lg:mt-24 md:mt-16 mt-7">';
				foreach ($pagi as $key => $page_link) :

					if (strpos($page_link, 'current') !== false) {
						$page_link = str_replace('<li aria-current="page" class="md:text-base text-sm text-white bg-primary rounded-full md:h-10 md:w-10 h-8 w-8 flex items-center justify-center transition current">', '<a class="page-numbers active" href="javascript:void(0);">', $page_link);
						$page_link = str_replace('</li>', '</a>', $page_link);
					}

					?>
				<li>
					<?php echo $page_link ?>
				</li>

		<?php
				endforeach;
			endif;
			

			?>

	<?php wp_reset_postdata();
      } }
	?>
        <!-- <div class="grid grid-cols-12 md:mt-7 mt-5 bg-white rounded-[20px] items-center">

            <div class="lg:col-span-6 col-span-12 ">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues-two.webp" alt="venues" class="w-full lg:rounded-tl-[20px] lg:rounded-bl-[20px] lg:rounded-tr-[0px] rounded-tl-[20px] rounded-tr-[20px]">
            </div>

            <div class="lg:col-span-6 col-span-12 xl:px-20 md:px-10 px-5 lg:py-0 md:py-10 py-5  lg:rounded-tr-[20px] lg:rounded-br-[20px] lg:rounded-bl-[0px] rounded-bl-[20px] rounded-br-[20px]">
                <h3 class="lg:text-4xl md:text-3xl text-2xl text-primary bagdoll-display">The Lalit</h3>
                <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium border-b border-grey pb-2 xl:mb-7 mb-4">123, Main Street, Jaipur, Rajasthan, 302015</p>

                <h4 class="xl:text-xl lg:text-lg text-base text-light-grey font-bold py-1">Capacity 1,200<span class="border-l border-light-grey pl-4 ml-4">15,000 SQFT</span></h4>

                <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus justo id tortor consectetur, nec vestibulum odio condimentum.</p>

                <a href="the-lift.html" class="text-sm text-light-grey font-medium relative z-10 after:content-[''] after:absolute after:-left-2.5 after:top-[50%] after:translate-y-[-50%] after:bg-secondary md:after:h-11 md:after:w-11 after:h-7 after:w-7 after:rounded-full after:z-[-1] block mt-3 ml-3">EXPLORE THIS VENUE <i class="fa-solid fa-arrow-right ml-2"></i></a>
            </div>

        </div>

        <div class="grid grid-cols-12 md:mt-7 mt-5 bg-white rounded-[20px] items-center">

            <div class="lg:col-span-6 col-span-12 lg:order-1 order-2 xl:px-20 md:px-10 px-5 lg:py-0 md:py-10 py-5 lg:rounded-tl-[20px] lg:rounded-bl-[20px] lg:rounded-br-[0px] rounded-bl-[20px] rounded-br-[20px]">
                <h3 class="lg:text-4xl md:text-3xl text-2xl text-primary bagdoll-display">The Lalit</h3>
                <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium border-b border-grey pb-2 xl:mb-7 mb-4">123, Main Street, Jaipur, Rajasthan, 302015</p>

                <h4 class="xl:text-xl lg:text-lg text-base text-light-grey font-bold py-1">Capacity 1,200<span class="border-l border-light-grey pl-4 ml-4">15,000 SQFT</span></h4>

                <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus justo id tortor consectetur, nec vestibulum odio condimentum.</p>

                <a href="the-lift.html" class="text-sm text-light-grey font-medium relative z-10 after:content-[''] after:absolute after:-left-2.5 after:top-[50%] after:translate-y-[-50%] after:bg-secondary md:after:h-11 md:after:w-11 after:h-7 after:w-7 after:rounded-full after:z-[-1] block mt-3 ml-3">EXPLORE THIS VENUE <i class="fa-solid fa-arrow-right ml-2"></i></a>
            </div>

            <div class="lg:col-span-6 col-span-12 lg:order-2 order-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues-three.webp" alt="venues" class="w-full lg:rounded-tr-[20px] lg:rounded-br-[20px] lg:rounded-tl-[0px] rounded-tl-[20px] rounded-tr-[20px]">
            </div>

        </div>

        <div class="grid grid-cols-12 md:mt-7 mt-5 bg-white rounded-[20px] items-center">

            <div class="lg:col-span-6 col-span-12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues-four.webp" alt="venues" class="w-full lg:rounded-tl-[20px] lg:rounded-bl-[20px] lg:rounded-tr-[0px] rounded-tl-[20px] rounded-tr-[20px]">
            </div>

            <div class="lg:col-span-6 col-span-12 xl:px-20 md:px-10 px-5 lg:py-0 md:py-10 py-5 lg:rounded-tr-[20px] lg:rounded-br-[20px] lg:rounded-bl-[0px] rounded-bl-[20px] rounded-br-[20px]">
                <h3 class="lg:text-4xl md:text-3xl text-2xl text-primary bagdoll-display">The Lalit</h3>
                <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium border-b border-grey pb-2 xl:mb-7 mb-4">123, Main Street, Jaipur, Rajasthan, 302015</p>

                <h4 class="xl:text-xl lg:text-lg text-base text-light-grey font-bold py-1">Capacity 1,200<span class="border-l border-light-grey pl-4 ml-4">15,000 SQFT</span></h4>

                <p class="xl:text-xl lg:text-lg text-base text-grey mt-3 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus justo id tortor consectetur, nec vestibulum odio condimentum.</p>

                <a href="the-lift.html" class="text-sm text-light-grey font-medium relative z-10 after:content-[''] after:absolute after:-left-2.5 after:top-[50%] after:translate-y-[-50%] after:bg-secondary md:after:h-11 md:after:w-11 after:h-7 after:w-7 after:rounded-full after:z-[-1] block mt-3 ml-3">EXPLORE THIS VENUE <i class="fa-solid fa-arrow-right ml-2"></i></a>
            </div>

        </div> -->

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