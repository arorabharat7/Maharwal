<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php

$footer_settings_logo = get_field('footer_settings_logo', 'Options');
$footer_settings_column_one_heading = get_field('footer_settings_column_one_heading', 'Options');
$footer_settings_column_one_description = get_field('footer_settings_column_one_description', 'Options');
$footer_settings_mail_description = get_field('footer_settings_mail_description', 'Options');
$footer_settings_mail_heading = get_field('footer_settings_mail_heading', 'Options');
$copyright_text = get_field('copyright_text', 'Options');


?>
<footer class="bg-primary lg:pt-[116px] md:pt-100 pt-10 relative">
    <div class="container m-auto">
      <img src="<?php echo $footer_settings_logo['url']; ?>" width="90" height="90" alt="footer-logo"
        class="absolute left-[50%] md:top-[-90px] top-[-50px] translate-x-[-50%] md:w-auto ">

      <div class="grid grid-cols-12 lg:gap-0 md:gap-y-10 gap-y-6 md:pt-0 pt-10 lg:pb-100 md:pb-100 pb-10">

        <div class="lg:col-span-2 md:col-span-3 col-span-5 lg:order-1 order-2">
          <h2 class="lg:text-xl text-lg text-white bagdoll-display xl:mb-4 mb-2"> <?php echo $footer_settings_column_one_heading; ?></h2>
          <p class="xl:text-base text-sm text-white font-medium"> <?php echo $footer_settings_column_one_description; ?></p>
        </div>

        <div class="lg:col-span-2 md:col-span-4 col-span-7 lg:order-2 order-3">
          <h2 class="lg:text-xl text-lg text-white bagdoll-display xl:mb-4 mb-2">Contact Us</h2>

          <ul class="flex flex-col gap-1">
          <?php if (have_rows('footer_settings_contact_us_all_details','Options')) :
    
        while (have_rows('footer_settings_contact_us_all_details','Options')) : the_row();

          // Load sub field value.
          $footer_settings_contact_us_mode_url = get_sub_field('footer_settings_contact_us_mode_url');
          $footer_settings_contact_us_mode_address = get_sub_field('footer_settings_contact_us_mode_address');
      ?>
            <li><a href=" <?php echo $footer_settings_contact_us_mode_url; ?>" class="xl:text-base text-sm text-white font-medium">
            <?php echo $footer_settings_contact_us_mode_address; ?></a></li>
            <?php  endwhile;
      endif; ?> 
          </ul>


          <ul class="flex flex-col gap-1 lg:mt-9 mt-5">
          <?php if (have_rows('footer_settings_contact_us_timings','Options')) :
    
    while (have_rows('footer_settings_contact_us_timings','Options')) : the_row();
    $footer_settings_contact_us_timings_details = get_sub_field('footer_settings_contact_us_timings_details');

      ?>
   
            <li class="xl:text-base text-sm text-white font-medium"><?php echo $footer_settings_contact_us_timings_details; ?></li>
            <?php  endwhile;
          endif; ?> 
  
          </ul>
        </div>

        <div class="lg:col-span-4 col-span-12 lg:order-3 order-1 lg:ml-10 lg:w-auto md:w-2/4 m-auto">
          <p class="xl:text-base text-sm text-white font-medium text-center xl:mb-7 mb-5">
          <?php echo $footer_settings_mail_description; ?></p>

          <h2 class="lg:text-xl text-lg text-white bagdoll-display text-center">
          <?php echo $footer_settings_mail_heading; ?></h2>

          <div id="subscribe"
            class="bg-white rounded-large flex items-center gap-2 justify-between xl:px-6 p-4 xl:py-2 mt-5">
            <!-- <input type="email" placeholder="Your email"
              class="xl:text-xl text-base text-[#303030] w-full bg-transparent font-medium focus-visible:outline-0">
            <a href="#"
              class="btn xl:text-xl text-base font-medium text-light-black  rounded-large text-center inline-block whitespace-nowrap">Subscribe
              <i class="fa-solid fa-arrow-right xl:ml-2 ml-1"></i></a> -->
              <?php echo do_shortcode('[noptin-form id=190]'); ?>
        </div>
        </div>


        <div class="lg:col-span-2 md:col-span-3 order-4  col-span-5 lg:ml-24">
          <h2 class="lg:text-xl text-lg text-white bagdoll-display xl:mb-4 mb-2">Explore</h2>
 
          <ul class="flex flex-col gap-1 items-start">
          <?php
            $menu = 'Header Menue';
            $args = array(
              'order' => 'DESC',
              'orderby' => 'menu_order',
              'post_type' => 'nav_menu_item',
              'post_status' => 'publish',
              'output' => ARRAY_A,
              'output_key' => 'menu_order',
              'nopaging' => true,
              'update_post_term_cache' => false
            );
            $items = wp_get_nav_menu_items($menu, $args);
            //echo "<pre>"; print_r($items); echo "</pre>";

            global $wp_query;
            $pagename = $wp_query->queried_object->post_title;
            $total_items = count($items);
            ?>
 <?php for ($i = 0; $i < count($items); $i++) {
              ?>
              <li >
                <a href="<?php echo $items[$i]->url; ?>" class="xl:text-base text-sm text-white font-medium">
                  <?php echo $items[$i]->title; ?></a>
             
                </li>
            <?php } ?>
           
          </ul>

        </div>

        <div class="lg:col-span-2 md:col-span-2 col-span-6 order-7 lg:ml-20">
          <h2 class="lg:text-xl text-lg text-white bagdoll-display xl:mb-4 mb-2">Events</h2>

          <ul class="flex flex-col gap-1 items-start">
          <?php
            $menu = 'Footer Events';
            $args = array(
              'order' => 'DESC',
              'orderby' => 'menu_order',
              'post_type' => 'nav_menu_item',
              'post_status' => 'publish',
              'output' => ARRAY_A,
              'output_key' => 'menu_order',
              'nopaging' => true,
              'update_post_term_cache' => false
            );
            $items = wp_get_nav_menu_items($menu, $args);
            //echo "<pre>"; print_r($items); echo "</pre>";

            global $wp_query;
            $pagename = $wp_query->queried_object->post_title;
            $total_items = count($items);
            ?>
 <?php for ($i = 0; $i < count($items); $i++) {
              ?>
           <li >
                <a href="<?php echo $items[$i]->url; ?>" class="xl:text-base text-sm text-white font-medium">
                  <?php echo $items[$i]->title; ?></a>
             
                </li>
            <?php } ?>

          </ul>

        </div>

       
      </div>

    
    </div>
    <hr>
    <p class="text-white md:text-base text-sm text-center border-white lg:py-6 md:py-4 py-2">
    <?php echo $copyright_text; ?></p>
  </footer>

  <?php 
	wp_footer(); 
?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


	</body>
</html>
