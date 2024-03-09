<?php do_action('uwp_template_before', 'login'); ?>
</div>
</div>
</div>
</div>
<section class="maharwal-login">
    <div class="uwp-content-wrap ">
        <div class="grid grid-cols-12 uwp-login " <?php if (!empty($uwp_login_widget_args['form_padding'])) {
                                                        echo "style='padding:" . absint($uwp_login_widget_args['form_padding']) . "px'";
                                                    } ?>>
            <div class="lg:col-span-5 md:col-span-4 md:block hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_login.webp" alt="login" class="w-full lg:h-[900px] md:h-[780px] object-cover">
            </div>

            <!-- <div class="uwp-lf-icon"><i class="fas fa-user fa-fw"></i></div> -->
            <?php //do_action('uwp_template_form_title_before', 'login'); 
            ?>
            <!-- <h2><?php
                        // $form_title = !empty($args['form_title']) || (isset($args['form_title']) && $args['form_title'] == '0') ? esc_attr__($args['form_title'], 'userswp') : __('Login', 'userswp');
                        // echo apply_filters('uwp_template_form_title',  $form_title, 'login');
                        ?></h2> -->
           

            <div class=" lg:col-span-7 md:col-span-8 col-span-12 ">
            <?php do_action('uwp_template_display_notices', 'login'); ?>
                <div class="text-center xl:pt-16 lg:pt-12 pt-10 md:pb-0 pb-20">
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_logo.svg" alt="logo" class="m-auto"></a>

                    <h2 class="lg:text-[42px] md:text-3xl text-2xl font-bold text-dark-grey lg:mt-10 mt-6 lg:mb-4 mb-2">Welcome
                        <span class="text-primary">Back!</span>
                    </h2>
                    <p class="text-grey md:text-base text-sm ">Let’s Get Started</p>

                    <form id="loginform" class="uwp-login-form uwp_form lg:w-[70%] md:w-[80%] w-[90%] m-auto login-form lg:mt-12 mt-8" method="post">
                        <?php do_action('uwp_template_fields', 'login', $args); ?>


                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="round">
                                    <div class="uwp-remember-me">
                                        <label style="display: inline-block;" for="remember_me<?php if (wp_doing_ajax()) {
                                                                                                    echo "_ajax";
                                                                                                } ?>">
                                            <input class="md:text-base text-sm font-medium text-dark-grey" name="remember_me" id="remember_me<?php if (wp_doing_ajax()) {
                                                                                                                                                    echo "_ajax";
                                                                                                                                                } ?>" value="   " type="checkbox">
                                    </div> 


                                </div>
                                <label class="md:text-base text-sm font-medium text-dark-grey"> <?php _e('Remember Me', 'userswp'); ?></label>
                                
                            </div>
                            <div class="uwp-footer-link uwp-forgotpsw"><a class="md:text-base text-sm text-primary font-semibold" rel="nofollow" href="<?php echo uwp_get_forgot_page_url(); ?>"><?php echo uwp_get_option("forgot_link_title") ? uwp_get_option("forgot_link_title") : __('Forgot password?', 'userswp'); ?></a></div>
                            </label>
                        </div>
                        <input class="btn text-sm font-semibold hover:text-primary hover:bg-white transition text-white bg-primary px-20 rounded-md md:py-5 py-4 my-8 inline-block uppercase" type="submit" name="uwp_login_submit" value="<?php _e('Login', 'userswp'); ?>">
                    </form>
                    <div class="uwp-login-links">
                        <p class="text-grey md:text-base text-sm ">Don’t have an account?
                            <a rel="nofollow" class="md:text-base text-sm text-primary font-semibold" href="<?php echo uwp_get_register_page_url(); ?>">
                                <?php echo uwp_get_option("register_link_title") ? uwp_get_option("register_link_title") : __('Register', 'userswp'); ?>
                            </a>
                        </p>
                        <!-- <div class="uwp-footer-link uwp-register-now"><?php _e('Not a member?', 'userswp'); ?> <a rel="nofollow" href="<?php echo uwp_get_register_page_url(); ?>"><?php echo uwp_get_option("register_link_title") ? uwp_get_option("register_link_title") : __('Create account', 'userswp'); ?></a></div> -->
                        <!-- <div class="uwp-footer-link uwp-forgotpsw"><a rel="nofollow" href="<?php echo uwp_get_forgot_page_url(); ?>"><?php echo uwp_get_option("forgot_link_title") ? uwp_get_option("forgot_link_title") : __('Forgot password?', 'userswp'); ?></a></div> -->
                    </div>
                    <?php do_action('uwp_social_fields', 'login', $args); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php do_action('uwp_template_after', 'login'); ?>