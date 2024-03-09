<?php do_action('uwp_template_before', 'register');
$css_class = !empty($args['css_class']) ? esc_attr($args['css_class']) : '';
$form_title = !empty($args['form_title']) ? esc_attr__($args['form_title'], 'userswp') : __('Register', 'userswp');
$form_title = apply_filters('uwp_template_form_title', $form_title, 'register');
?>
</div>
</div>
</div>
</div>
</div>
<section class="maharwal-login">

    <div class="uwp-content-wrap grid grid-cols-12 <?php echo esc_attr($css_class); ?>">

        <div class="lg:col-span-5 md:col-span-4 md:block hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_sign-up.webp" alt="login" class="w-full h-full object-cover">
        </div>

        <div class="uwp-registration lg:col-span-7 md:col-span-8 col-span-12">
            <div class="text-center xl:py-16 lg:py-12 py-10">
                <!-- <div class="uwp-rf-icon"><i class="fas fa-pencil-alt fa-fw"></i></div> -->
                <?php do_action('uwp_template_form_title_before', 'register'); ?>
                <!-- <h2><?php
                            //echo apply_filters( 'uwp_template_form_title', $form_title, 'register' );
                            ?>
            </h2> -->
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_logo.svg" alt="logo" class="m-auto"></a>

                <h2 class="lg:text-[42px] md:text-3xl text-2xl font-bold text-dark-grey lg:mt-10 mt-6 lg:mb-4 mb-2">Create
                    your <span class="text-primary">Account</span></h2>
                <p class="text-grey md:text-base text-sm ">Initiate the Process</p>

                <?php do_action('uwp_template_display_notices', 'register'); ?>

                <form id="loginform" class="uwp-registration-form uwp_form lg:w-[70%] md:w-[80%] w-[90%] m-auto login-form lg:mt-12 mt-8" method="post" enctype="multipart/form-data">
                    <?php do_action('uwp_template_fields', 'register', $args); ?>
                    <input class="btn text-sm font-semibold hover:text-primary hover:bg-white transition text-white bg-primary px-20 rounded-md md:py-5 py-4 my-8 inline-block uppercase" name="uwp_register_submit" value="<?php _e('Create Account', 'userswp'); ?>" type="submit">
                </form>
                <div class="uwp-footer-link uwp-login-now text-grey md:text-base text-sm">
                    <?php _e('Already a member?', 'userswp'); ?>
                     <a class="md:text-base text-sm text-primary font-semibold" rel="nofollow" href="<?php echo uwp_get_login_page_url(); ?>">
                     <?php echo uwp_get_option("login_link_title") ? uwp_get_option("login_link_title") : __('Login here', 'userswp'); ?></a>
                </div>
                <?php do_action('uwp_social_fields', 'register', $args); ?>
            </div>
        </div>
    </div>


</section>
<?php do_action('uwp_template_after', 'register'); ?>