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




	<div class="absolute top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5 justify-center w-[90%]">
		<?php custom_astra_breadcrumbs(); ?>
	</div>

</section>

<div class="container m-auto">
	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_archive_header(); ?>

		<?php astra_content_loop(); ?>

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->
</div>

<?php if (astra_page_layout() == 'right-sidebar') : ?>

	<?php get_sidebar(); ?>

<?php endif ?>


<?php get_footer(); ?>