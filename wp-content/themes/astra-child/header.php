<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <?php wp_head(); ?>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />


</head>

<body>

<?php 
 $header_settings_image_logo = get_field('header_settings_image_logo', 'Options');
?>
  <header class="md:py-6 py-3 sticky top-0 bg-primary z-[100] lg:border-none border-b-[1px] border-white">
    <div class="container-fluid px-4 m-auto">
      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

      <div id="menu" class="md:w-2/4 w-full  h-screen  absolute left-0 top-0 flex bg-white duration-700 lg:hidden -ml-ml-96">
        <div class="w-full flex flex-col text-white">

          <div class="flex items-center justify-between px-5 md:py-4 py-3  border-b border-b-light-primary bg-primary">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_logo.svg" alt="" class="w-[50px]">
            <a href="javascript:void(0)" onclick="closeMenu()" class="text-right text-4xl !leading-3 hover:text-red-400 bg-white text-primary  flex justify-center items-center py-3 rounded px-2">&times;</a>
          </div>

          <ul class="navbar flex flex-col gap-4 mt-10 px-5">
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

            ?>

            <?php for ($i = 0; $i < count($items); $i++) { 
               $is_active_page = $items[$i]->title == $pagename;
               $class = $is_active_page ? 'border-b-2 border-primary' : '';
              ?>
              <li>
                <a href="<?php echo $items[$i]->url; ?>" class="xl:text-lg <?php echo $class; ?> lg:text-base text-primary font-bold capitalize  transition-all flex items-center justify-between">
                  <?php echo $items[$i]->title; ?>
                  <i class="fa-solid fa-angle-right"></i></a>
              </li>
            <?php } ?>
        


            <li class="md:hidden block">
              <a href="blog.html" class="xl:text-lg lg:text-base text-primary font-bold capitalize transition-all flex items-center justify-between">create menu list<i class="fa-solid fa-angle-right"></i>
              </a>

            </li>


          </ul>

        </div>
      </div>

      <div id="offcanvas" class=" flex items-center justify-between">

        <div class="flex items-center 2xl:gap-12 xl:gap-8 lg:gap-6">
          <a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php echo $header_settings_image_logo['url']; ?>"
           width="<?php echo $header_settings_image_logo['width']; ?>"
            height="<?php echo $header_settings_image_logo['height']; ?>" 
            alt="<?php echo $header_settings_image_logo['alt']; ?>" class="lg:w-[90px] md:w-[70px] w-[50px]"></a>

          <ul class="navbar lg:flex items-center xl:gap-5 lg:gap-3 hidden">
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
                 $is_active_page = $items[$i]->title == $pagename;
                 $class = $is_active_page ? 'text-secondary' : 'text-white before:hidden hover:before:block hover:before:transition';
              ?>
              <li class="flex items-center xl:gap-5 lg:gap-3">
                <a href="<?php echo $items[$i]->url; ?>" class="xl:text-lg lg:text-base <?php echo $class; ?> font-semibold relative hover:text-secondary before:content-[''] before:absolute before:top-[-10px] before:left-[50%] before:translate-x-[-50%] before:bg-secondary before:h-2.5 before:w-2.5 before:rounded-full capitalize transition-all">
                  <?php echo $items[$i]->title; ?></a>
                  <?php if ($i < $total_items - 1) : ?>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_link-star.svg" width="20" height="20" alt="link-star">
                  <?php endif; ?>
                </li>
            <?php } ?>
           

          </ul>

        </div>


        <ul class="navbar nav-right flex items-center  md:gap-5 gap-3 justify-end">

          <li class="sm:block hidden">
            <a href="#" class="text-white xl:text-base lg:text-base text-sm uppercase font-medium">create menu list</a>
          </li>

          <li>
            <a href="#" class="btn md:text-base text-xs font-medium hover:text-light-grey hover:bg-secondary transition text-white border-[1px] border-white hover:border-secondary md:px-6 md:py-3 px-4 py-2 rounded-large inline-block">Login</a>
          </li>

          <li>
            <a href="#" class="btn md:text-base text-xs font-medium hover:text-white hover:bg-transparent transition text-light-grey border-[1px] border-secondary hover:border-white bg-secondary md:px-6 md:py-3 px-4 py-2 rounded-large inline-block">Register</a>
          </li>

          <li class="lg:hidden">
            <span onclick="openMenu()" class="text-2xl font-semibold lg:hidden cursor-pointer text-white">&#9776;</span>

          </li>
        </ul>


      </div>

    </div>



  </header>