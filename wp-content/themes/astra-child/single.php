<?php

/**

 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="hero hero-service corporate relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog-inner.webp" alt="blog" class="w-full min-h-[200px] object-cover">


    <div class=" absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] flex items-center md:gap-2.5 gap-1.5 w-[90%] justify-center">
        <?php custom_astra_breadcrumbs(); ?>
    </div>

</section>


<section class="venue-location lg:py-100 md:py-60 py-10 lg:mb-[100px] md:mb-[60px] mb-10">
    <div class="container m-auto">


        <div class="grid grid-cols-12 xl:gap-12 md:gap-6  md:gap-y-0 gap-y-12">

            <div class="xl:col-span-8 lg:col-span-7 md:col-span-7 col-span-12">

                <div class="lg:mb-16 lg:pb-16 md:pb-10 md:mb-10 pb-7 mb-7 border-b border-primary">
                    <h2 class="lg:text-[42px] text-3xl text-primary bagdoll-display"><?php the_title(); ?></h2>


                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog-inner-one.webp" width="870" height="380" alt="blog-inner" class="w-full lg:mt-12 md:mt-8 mt-4 lg:mb-7 md:mb-5 mb-3">

                    <p class="lg:text-lg md:text-base text-sm text-grey font-medium">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit,
                        sed do eiusmod tempor incididunt tempor incididunt.tempor incididunt.</p>



                    <p class="lg:text-lg md:text-base text-sm text-grey font-medium mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>


                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog-inner-two.webp" width="870" height="380" alt="blog-inner" class="w-full my-7">

                    <p class="lg:text-lg md:text-base text-sm text-grey font-medium">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit,
                        sed do eiusmod tempor incididunt tempor incididunt.tempor incididunt.</p>



                    <p class="lg:text-lg md:text-base text-sm text-grey font-medium mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>


                    <div class="flex lg:flex-row flex-col justify-between lg:gap-0 gap-5 lg:items-center mt-5">

                        <div>
                            <?php
                            // Get the ID of the current post
                            $id = get_the_id();

                            // Get the tags associated with the current post
                            $post_tags = get_the_tags($id);

                            // Check if tags are available
                            if ($post_tags) {
                                // Loop through each tag
                                foreach ($post_tags as $tag) {
                                    // Generate tag URL
                                    $tag_url = get_tag_link($tag->term_id);
                            ?>
                                    <a href="<?php echo esc_url($tag_url); ?>"><span class="text-xs font-medium text-light-grey uppercase border border-light-grey px-4 py-2 rounded mx-1 my-2 inline-block">
                                            <?php echo esc_html($tag->name); ?>
                                        </span></a>
                            <?php
                                }
                            } else {
                            }
                            ?>

                        </div>


                        <ul class="flex gap-4 items-center">
                            <li><a href="#" class="lg:text-lg md:text-base text-sm font-medium text-light-grey">Share</a></li>
                            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_facebook.svg" width="20" height="20" alt="facebook"></a></li>
                            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_instagram.svg" width="20" height="20" alt="instagram"></a></li>
                            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_twitter-x.svg" width="20" height="20" alt="twitter-x"></a></li>
                        </ul>
                    </div>


                </div>


                <div class="user-comments">

                <?php
        // Include comments template
        comments_template();
        ?>
                    <!-- <h3 class="text-[32px] text-primary bagdoll-display">15 Comments</h3>

                    <div class="flex md:gap-4 gap-2 items-start lg:py-10 md:py-7 py-5 border-b border-primary">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_User-comment.svg" width="72" height="72" alt="User-comment" class="md:w-auto w-10">
                        <div>
                            <a href="#" class="lg:text-lg text-base font-semibold text-light-grey block lg:mb-1">John Gabriel</a>
                            <span class="text-xs text-grey font-medium">October 5, 2024</span>
                            <p class="lg:text-lg md:text-base text-sm font-medium text-grey md:mt-4 mt-2 md:mb-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis libero vitae arcu interdum ultrices. Duis auctor magna nec velit suscipit, sit amet blandit tortor lacinia. Integer nec ipsum id velit mollis tincidunt. Nulla facilisi. Sed ac velit vitae sem vehicula bibendum. Quisque nec risus ac justo consectetur tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec scelerisque purus quis nulla tempor, nec fermentum lectus consequat.</p>


                            <a href="#" class="text-sm font-semibold text-[#303030] uppercase border-b border-[#303030]">view reply</a>

                        </div>
                    </div>


                    <div class="flex md:gap-4 gap-2 items-start lg:py-10 md:py-7 py-5 border-b border-primary lg:px-20 md:px-10 px-5">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_User-comment.svg" width="72" height="72" alt="User-comment" class="md:w-auto w-10">
                        <div>
                            <a href="#" class="lg:text-lg text-base font-semibold text-light-grey block lg:mb-1">John Gabriel</a>
                            <span class="text-xs text-grey font-medium">October 5, 2024</span>
                            <p class="lg:text-lg md:text-base text-sm font-medium text-grey md:mt-4 mt-2 md:mb-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis libero vitae arcu interdum ultrices. Duis auctor magna nec velit suscipit, sit amet blandit tortor lacinia. Integer nec ipsum id velit mollis tincidunt. Nulla facilisi. Sed ac velit vitae sem vehicula bibendum. Quisque nec risus ac justo consectetur tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec scelerisque purus quis nulla tempor, nec fermentum lectus consequat.</p>


                            <a href="#" class="text-sm font-semibold text-[#303030] uppercase border-b border-[#303030]">view reply</a>

                        </div>
                    </div>



                    <div class="flex md:gap-4 gap-2 items-start lg:py-10 md:py-7 py-5 border-b border-primary">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_User-comment.svg" width="72" height="72" alt="User-comment" class="md:w-auto w-10">
                        <div>
                            <a href="#" class="lg:text-lg text-base font-semibold text-light-grey block lg:mb-1">John Gabriel</a>
                            <span class="text-xs text-grey font-medium">October 5, 2024</span>
                            <p class="lg:text-lg md:text-base text-sm font-medium text-grey md:mt-4 mt-2 md:mb-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis libero vitae arcu interdum ultrices. Duis auctor magna nec velit suscipit, sit amet blandit tortor lacinia. Integer nec ipsum id velit mollis tincidunt. Nulla facilisi. Sed ac velit vitae sem vehicula bibendum. Quisque nec risus ac justo consectetur tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec scelerisque purus quis nulla tempor, nec fermentum lectus consequat.</p>


                            <a href="#" class="text-sm font-semibold text-[#303030] uppercase border-b border-[#303030]">view reply</a>

                        </div>
                    </div>

                </div>


                <form id="blog-request" class="lg:mt-16 md:mt-10 mt-7">

                    <h4 class="text-[32px] text-primary bagdoll-display">Leave A Reply</h4>

                    <p class="lg:text-lg md:text-base text-sm text-grey font-medium md:mt-4 mt-2 md:mb-12 !mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>


                    <label for="Comments" class="text-sm font-semibold text-[#303030] uppercase mb-2.5 block">comment</label>
                    <textarea id="coments" class="bg-[#F5F5F5] text-base text-light-grey placeholder:text-light-grey font-medium md:px-7 px-4 md:py-5 py-3 w-full rounded-3xl h-[160px] focus-visible:outline-none"></textarea>

                    <div class="flex lg:flex-row flex-col gap-7 items-center mt-7">

                        <div class="w-full">
                            <label for="name" class="text-sm font-semibold text-[#303030] uppercase mb-2.5 block">your name</label>
                            <input type="text" class="bg-[#F5F5F5] text-base text-light-grey placeholder:text-light-grey font-medium md:px-7 px-4 md:py-5 py-3 w-full  rounded-large focus-visible:outline-none">
                        </div>

                        <div class="w-full">
                            <label for="email" class="text-sm font-semibold text-[#303030] uppercase mb-2.5 block">email address</label>
                            <input type="text" class="bg-[#F5F5F5] text-base text-light-grey placeholder:text-light-grey font-medium md:px-7 px-4 md:py-5 py-3 w-full rounded-large focus-visible:outline-none">
                        </div>


                    </div>

                    <a href="#" class="btn text-sm font-semibold hover:text-light-grey hover:bg-secondary transition text-white bg-primary px-11 md:py-5 py-4 rounded-large inline-block uppercase lg:mt-12 md:mt-9 mt-6">Book now <i class="fa-solid fa-arrow-right ml-2"></i></a>
                </form> -->

                </div>

            </div>


            <div class="xl:col-span-4 lg:col-span-5 md:col-span-5 col-span-12 border-l border-primary lxl:px-7 lg:px-5 px-3">
                <form role="search" method="get" id="search-categories" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="flex items-center bg-white rounded-large px-7 py-2">
                        <input type="search" placeholder="Search..." class="text-sm text-light-grey font-medium w-full py-3 focus-visible:outline-none placeholder:text-light-grey" name="s" value="<?php echo get_search_query(); ?>">
                        <input type="hidden" name="post_type" value="post">
                        <button type="submit" class="search-submit">
                            <img src="<?php echo  get_stylesheet_directory_uri(); ?>/assets/images/maharwal_search.svg" width="20" height="20" alt="search">
                        </button>
                    </div>
                </form>



                <div class="mt-10">

                    <div class="lg:py-10 py-5 border-t border-primary">
                        <details class="group" open>
                            <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                <h5 class="lg:text-3xl text-2xl text-light-grey bagdoll-display">Blog Categories</h5>
                                <span class="transition group-open:rotate-180 md:p-1 rounded-full md:w-7 md:h-7 w-6 h-6 flex justify-center items-center">

                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_arrow-up-grey.svg" alt="arrow-up">

                                </span>


                            </summary>

                            <ul class="flex flex-col gap-4 lg:mt-7 mt-5">
                                <?php
                                $all_categories = get_categories();
                                foreach ($all_categories  as $category) {
                                ?>
                                    <li class="flex justify-between items-center">
                                        <a href="<?php echo get_category_link($category->term_id); ?>" class="text-sm font-semibold text-light-grey uppercase"><?php echo esc_html($category->name); ?></a>
                                        <span class="text-sm font-semibold text-light-grey uppercase">(2)</span>
                                    </li>
                                <?php } ?>



                            </ul>

                        </details>
                    </div>

                    <div class="lg:py-10 py-5 border-t border-primary">
                        <details class="group" open>
                            <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                <h5 class="lg:text-3xl text-2xl text-light-grey bagdoll-display">Popular Posts</h5>
                                <span class="transition group-open:rotate-180 md:p-1 rounded-full md:w-7 md:h-7 w-6 h-6 flex justify-center items-center">

                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_arrow-up-grey.svg" alt="arrow-up">

                                </span>


                            </summary>

                            <div class="flex items-center gap-4 lg:mt-7 mt-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog-inner-post.svg" width="100" height="100" alt="post">
                                <div>
                                    <h6><a href="" class="text-xl text-light-grey bagdoll-display">Creative Serving : With full Quality Assurance</a></h6>
                                    <span class="text-xs text-grey font-medium">October 5, 2024</span>

                                </div>
                            </div>

                            <div class="flex items-center gap-4 lg:mt-7 mt-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog-inner-post.svg" width="100" height="100" alt="post">
                                <div>
                                    <h6><a href="" class="text-xl text-light-grey bagdoll-display">Creative Serving : With full Quality Assurance</a></h6>
                                    <span class="text-xs text-grey font-medium">October 5, 2024</span>

                                </div>
                            </div>
                        </details>
                    </div>



                    <div class="lg:py-10 py-5 border-t border-primary">

                        <h5 class="lg:text-3xl text-2xl text-light-grey bagdoll-display">Tags</h5>

                        <div class="lg:mt-7 mt-5">
                            <?php
                            // Check if the post has tags
                            $tags = get_terms(array(
                                'taxonomy' => 'post_tag', // Specify the taxonomy as 'post_tag' for tags
                                'hide_empty' => false, // Include tags even if they are not assigned to any posts
                            ));

                            // Check if tags are available
                            if (!empty($tags)) {
                                // Loop through each tag
                                foreach ($tags as $tag) {
                                    $tag_url = get_tag_link($tag->term_id);
                            ?>
                                    <a href="<?php echo esc_url($tag_url); ?>"><span class="text-xs font-medium text-light-grey uppercase border border-light-grey px-4 py-2 rounded mx-1 my-2 inline-block">
                                            <?php echo esc_html($tag->name); ?>
                                        </span></a>
                            <?php
                                }
                            } else {
                                echo 'No tags found.';
                            }
                            ?>
                        </div>




                    </div>

                </div>



            </div>

        </div>




    </div>
</section>

<?php get_footer(); ?>