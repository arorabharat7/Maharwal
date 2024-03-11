<?php

/**Template Name: Create Template

 */

get_header(); ?>

<section class="hero hero-service corporate relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog-inner.webp" alt="create-menu" class="w-full min-h-[200px] object-cover">




    <div class="absolute top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5 justify-center w-[90%]">
        <?php custom_astra_breadcrumbs(); ?>
    </div>

</section>

<section class="create-list  md:mb-[120px] lg:mt-[70px] md:mt-12 mt-8 mb-[80px] lg:pb-100 md:pb-10">
    <div class="container m-auto md:px-4 !px-0">

        <div class="text-center">
            <h2 class="lg:text-[42px] text-3xl bagdoll-display text-primary">Create your lists</h2>

            <p class="lg:text-xl md:text-lg text-base text-dark-grey font-medium md:w-[50%] m-auto mt-4">Start adding your
                favourite food items, beverages, starters and so many things.</p>
        </div>


        <div class="menu-content-list md:rounded-lg md:bg-white lg::mt-16 md:mt-12 mt-8">
            <div class="bg-primary md:rounded-tl-lg md:rounded-tr-lg py-2.5 lg:mb-14 md:mb-8">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_logo.svg" alt="logo" class="md:w-28 md:h-28 w-14 h-14 m-auto">
            </div>


            <div class="md:flex hidden gap-2 items-center justify-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
                <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">menu</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
            </div>

            <div id="form-container">
                <form id="custom-form" method="post" action="<?php echo home_url(); ?>/menu-list-items/">
                    <div class="menu-item-list lg:px-14 md:px-8 px-4 lg:pt-14 md:pt-10 pt-7">
                        <div class="flex items-center md:gap-5 gap-4 ">

                            <label for="price-range" class="lg:text-xl md:text-lg text-base text-dark-grey font-semibold">
                                Number Of People:</label>
                            <select id="price-range" name="price-range" class="md:text-base text-xs text-dark-grey font-semibold py-2 px-5 border border-dark-grey rounded-large appearance-none focus-visible:outline-none bg-transparent">

                                <?php if (have_rows('menu_create_list_option_details')) :
                                    while (have_rows('menu_create_list_option_details')) : the_row();

                                        // Load sub field value.
                                        $menu_create_list_option_details_value = get_sub_field('menu_create_list_option_details_value');
                                        $menu_create_list_option_details_option_text = get_sub_field('menu_create_list_option_details_option_text');


                                ?>
                                        <option value="<?php echo $menu_create_list_option_details_value; ?>">
                                            <?php echo $menu_create_list_option_details_option_text; ?></option>
                                <?php endwhile;
                                endif; ?>

                            </select>
                        </div>
                        <div class="grid grid-cols-12 xl:gap-24 md:gap-10 pt-2.5  lg:pb-16 md:pb-10">

                            <div class="md:col-span-4 col-span-12">

                                <div class="beverage-list md:mt-10 mt-6">
                                    <?php if (have_rows('menues_all_details')) :
                                        $current_category = '';
                                        $i = 1;
                                        while (have_rows('menues_all_details')) : the_row();

                                            // Load sub field value.
                                            $menus_value = get_sub_field('menus_value');
                                            $menus_name = get_sub_field('menus_name');
                                            $menus_category_fields = get_sub_field('menus_category_fields');

                                    ?>
                                            <?php if ($menus_category_fields !== $current_category) { ?>
                                                <h3 class="md:text-3xl text-2xl bagdoll-display text-primary lg:my-8 md:my-6 my-4">
                                                    <?php echo $menus_category_fields; ?></h3>
                                            <?php $current_category = $menus_category_fields;
                                            } ?>
                                            <div class="flex items-center justify-between md:mb-5 mb-2.5">
                                                <div class="flex items-center gap-2.5">

                                                    <!-- Sample items with prices -->
                                                    <input type="checkbox" class="check-in" id="item<?php echo $i; ?>" name="items[]"
                                                     value="<?php echo $menus_value; ?>" data-category="<?php echo $menus_category_fields; ?>"
                                                      data-price="<?php echo $menus_value; ?>" class="md:w-5 md:h-5 w-[14px] h-[14px] input-list">
                                                    <label for="item<?php echo $i; ?>" class="md:text-base text-xs font-semibold text-dark-grey uppercase">
                                                    <?php echo $menus_name; ?> </label>
                                                </div>
                                                <h4 class="item<?php echo $i; ?> ml-auto md:text-base text-xs font-semibold text-dark-grey uppercase">
                                                    ₹</h4><br>
                                            </div>
                                    <?php $i++; endwhile;
                                    endif; ?>

                                   
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
            <div class="text-center bg-white relative">
                <button type="submit" class="btn md:relative md:left-auto md:top-0 md:translate-x-0 fixed bottom-7 left-[50%] translate-x-[-50%] z-20 md:text-sm text-xs font-semibold hover:text-primary hover:bg-white transition text-white bg-primary border border-primary md:px-11 px-7 md:py-5 py-2 rounded-large inline-block uppercase whitespace-nowrap">Submit</button>
                <!-- Hidden input field to store selected items -->
                <input type="hidden" id="selected-items" name="selected-items">

                <div class="relative md:block hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-gradient-to-b before:from-white before:to-[rgb(255, 255, 255, 0.2)]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues-bottom.webp" alt="venues-bottom" class="w-full">
                </div>
            </div>

            </form>
        </div>
    </div>

    </div>
</section>


<?php get_footer(); ?>
