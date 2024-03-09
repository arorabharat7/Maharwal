

<?php do_action('uwp_template_before', 'forgot'); ?>

</div>
</div>
</div>
</div>
</div>

<section class="maharwal-login">
    <div class="uwp-content-wrap">
        <div class="uwp-login grid grid-cols-12">
            <div class="lg:col-span-5 md:col-span-4 md:block hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_sign-forgot-password.webp" alt="login" class="w-full h-full object-cover">
            </div>

            <div class="lg:col-span-7 md:col-span-8 col-span-12 ">
                <div class="text-center xl:py-16 lg:py-12 py-10">
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_logo.svg" alt="logo" class="m-auto"></a>

                    <h2 class="lg:text-[42px] md:text-3xl text-2xl font-bold text-dark-grey lg:mt-10 mt-6 lg:mb-4 mb-2">Forgot <span class="text-primary">Password</span></h2>
                    <p class="text-grey md:text-base text-sm ">Initiate the Process</p>
                    <!-- <div class="uwp-lf-icon"><i class="fas fa-user fa-fw"></i></div> -->
                    <?php do_action('uwp_template_form_title_before', 'forgot'); ?>
                    <!-- <h2>
                <?php // $form_title = !empty($args['form_title']) ? esc_attr__($args['form_title'], 'userswp') : __('Forgot Password?', 'userswp');
                // echo apply_filters('uwp_template_form_title', $form_title, 'forgot'); 
                ?>
                     </h2> -->
                    <?php do_action('uwp_template_display_notices', 'forgot'); ?>
                    <form  id="loginform" class="uwp-login-form uwp_form lg:w-[70%] md:w-[80%] w-[90%] m-auto login-form lg:mt-12 mt-8" method="post">
                        <?php do_action('uwp_template_fields', 'forgot'); ?>
                        <input class="btn text-sm font-semibold hover:text-primary hover:bg-white transition text-white bg-primary md:px-20 px-10 rounded-md md:py-5 py-4 my-8 inline-block uppercase" name="uwp_forgot_submit" value="<?php _e('Submit', 'userswp'); ?>" type="submit"><br>
                    </form>
                    <div class="uwp-footer-link uwp-forgotpsw text-grey md:text-base text-sm"><?php _e('Already a member?', 'userswp'); ?> <a class="md:text-base text-sm text-primary font-semibold" rel="nofollow" href="<?php echo uwp_get_login_page_url(); ?>"><?php echo uwp_get_option("login_link_title") ? uwp_get_option("login_link_title") : __('Login here', 'userswp'); ?></a></div>
                    <div class="clfx"></div>
                    <div class="uwp-footer-link uwp-register-now text-grey md:text-base text-sm">
                        <?php _e('Not a member?', 'userswp'); ?> <a class="md:text-base text-sm text-primary font-semibold" rel="nofollow" href="<?php echo uwp_get_register_page_url(); ?>"><?php echo uwp_get_option("register_link_title") ? uwp_get_option("register_link_title") : __('Create account', 'userswp'); ?></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php do_action('uwp_template_after', 'forgot'); ?>