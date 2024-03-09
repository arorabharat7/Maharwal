<?php do_action('uwp_template_before', 'reset');
$css_class = !empty($args['css_class']) ? esc_attr($args['css_class']) : '';
$form_title = !empty($args['form_title']) ? esc_attr__($args['form_title'], 'userswp') : __('Reset Password', 'userswp');
?>
</div>
</div>
</div>
</div>

<section class="maharwal-login">

    <div class="uwp-content-wrap <?php echo esc_attr($css_class); ?>">
        <div class="uwp-login grid grid-cols-12">

            <!-- <div class="uwp-lf-icon"><i class="fas fa-key fa-fw"></i></div> -->
            <?php //do_action('uwp_template_form_title_before', 'reset'); ?>
            <!-- <h2><?php
                        // echo apply_filters('uwp_template_form_title', $form_title, 'reset');
                        ?>
            </h2> -->
            <div class="lg:col-span-5 md:col-span-4 md:block hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_login.webp" alt="login" class="w-full h-full object-cover">
            </div>
            <div class=" lg:col-span-7 md:col-span-8 col-span-12 ">
                <div class="text-center xl:py-16 lg:py-12 py-10 pb-24 ">
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_logo.svg" alt="logo" class="m-auto"></a>

                    <h2 class="lg:text-[42px] md:text-3xl text-2xl font-bold text-dark-grey lg:mt-10 mt-6 lg:mb-4 mb-2">Welcome
                        <span class="text-primary">Back!</span>
                    </h2>
                    <p class="text-grey md:text-base text-sm ">Let’s Get Started</p>
                    <?php do_action('uwp_template_display_notices', 'reset'); ?>
                    <?php if (isset($_GET['key']) && isset($_GET['login'])) { ?>
                        <form id="loginform" class="uwp-reset-form uwp_form lg:w-[70%] md:w-[80%] w-[90%] m-auto login-form lg:mt-12 mt-8" method="post">
                            <?php do_action('uwp_template_fields', 'reset'); ?>
                            <input class="btn text-sm font-semibold hover:text-primary hover:bg-white transition text-white bg-primary px-20 rounded-md md:py-5 py-4 my-8 inline-block uppercase" name="uwp_reset_submit" value="<?php echo __('Submit', 'userswp'); ?>" type="submit"><br>
                        </form>
                    <?php } else {
                        echo sprintf(__('You can not access this page directly. Follow the password reset link you received in your email. To request new password reset link <a href="%s">visit here</a>.', 'userswp'), uwp_get_page_link('forgot'));
                    } ?>

                    <div class="uwp-footer-link uwp-resetpsw"><?php _e('Already a member?', 'userswp'); ?><a rel="nofollow" href="<?php echo uwp_get_login_page_url(); ?>"><?php echo uwp_get_option("login_link_title") ? uwp_get_option("login_link_title") : __('Login here', 'userswp'); ?></a></div>
                    <div class="clfx"></div>
                    <div class="uwp-footer-link uwp-register-now"><?php _e('Not a member?', 'userswp'); ?> <a rel="nofollow" href="<?php echo uwp_get_register_page_url(); ?>"><?php echo uwp_get_option("register_link_title") ? uwp_get_option("register_link_title") : __('Create account', 'userswp'); ?></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php do_action('uwp_template_after', 'reset'); ?>