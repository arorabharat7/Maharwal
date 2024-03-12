<?php

/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar') : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
<section class="hero hero-service corporate relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog-inner.webp" alt="create-menu" class="w-full min-h-[200px] object-cover">




	<div class="absolute search_name top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5 justify-center w-[90%]">
		<?php astra_primary_content_top(); ?>
		<?php astra_archive_header(); ?>
	</div>

</section>

<!-- <div class=" search_result">
	<div class="container m-auto">
		<div id="primary" <?php astra_primary_class(); ?>>

			<?php // astra_content_loop(); ?>

			<?php // astra_pagination(); ?>

			<?php // astra_primary_content_bottom(); ?>

		</div>
	</div>
</div> -->

<?php // if (astra_page_layout() == 'right-sidebar') : ?>

	<?php // get_sidebar(); ?>

<?php //endif ?>


<section class="blog lg:py-100 md:py-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10">
  <div class="container m-auto">
    
    <div class="grid grid-cols-12 gap-6 ">
    <?php if (have_posts()) : 
        while (have_posts()) :
            the_post();

            $all_categories = get_categories();
            $categories = get_the_category();
                $child_categories = array_filter($all_categories, function ($category) {
                  return $category->parent != 0;
                });

                $title = get_the_title();
                $short_title = strlen($title) > 35 ? substr($title, 0, 35) . '...' : $title;
        
                $description = get_the_excerpt();
                $short_description = strlen($description) > 90 ? substr($description, 0, 90) . '...' : $description;
        
                $author_name = get_the_author();
            ?>
             <div class="md:col-span-4 sm:col-span-6 col-span-12 relative">
    <span class="lg:text-xl md:text-base text-sm text-white bg-primary rounded-bl-xl rounded-tr-xl py-1 px-2 absolute right-0 top-0">
      <?php echo esc_html(get_the_date('j, M')); ?></span>

      <?php
    // Get the featured image URL
    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
    if ($featured_image_url) { ?>
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo esc_url($featured_image_url); ?>" width="242" height="317" alt="<?php the_title_attribute(); ?>" class="w-full rounded-xl rounded-xl">
      </a>
    <?php } ?>

    <div class="border-t border-primary mt-6 pt-3">
      <?php foreach ($child_categories  as $category) { ?>
        <a href="<?php echo get_category_link($category->term_id); ?>"><span class="xl:text-sm text-xs text-primary font-medium uppercase inline-block mr-1"><?php echo esc_html($category->name); ?></span></a>
      <?php } ?>
      <span class="xl:text-sm text-xs text-primary font-medium uppercase inline-block ml-3 relative after:content-[''] after:absolute after:-left-3 after:top-[50%] after:translate-y-[-50%] after:bg-secondary after:h-2 after:w-2 after:rounded-full">
        <?php echo esc_html($author_name); ?></span>
    </div>
    <h3> <a href="<?php the_permalink(); ?>" class="xl:text-[32px] text-2xl bagdoll-display text-primary lg:!leading-10 xl:my-4 my-2 block">
        <?php echo $short_title; ?></a></h3>

    <p class="xl:text-lg md:text-base text-sm font-medium text-grey xl:mb-5 mb-3">
      <?php echo $short_description; ?></p>

    <a href="<?php the_permalink(); ?>" class="btn text-sm font-semibold text-light-black text-center inline-block uppercase">read more <i class="fa-solid fa-arrow-right ml-2"></i></a>

  </div> 
<?php endwhile; else: ?> <h1>No Posts Found</h1> <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>