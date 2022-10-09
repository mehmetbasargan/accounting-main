<?php get_header(); ?>

<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo $thumb['0']; ?>)" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2">
                    <span class="mr-2">
                        <a href="<?php echo home_url('/'); ?>">Home
                            <span class="iconify" data-icon="ic:twotone-arrow-forward-ios"></span>
                        </a>
                    </span>
                    <span><?php echo the_title(); ?></span>
                </p>
                <h1 class="mb-0 bread"><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">

                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">

                                <h3 class="mb-4">
                                    <?php echo get_theme_mod('contact_form_title'); ?>
                                </h3>

                                <div id="form-message-success" class="mb-4">
                                    <?php echo get_theme_mod('contact_form_text'); ?>
                                </div>

                                <!-- Contact Form 7 -->
                                <?php echo do_shortcode('[contact-form-7 id="244" title="İletişim formu" html_class="contactForm"]'); ?>
                                <!-- Contact Form 7 -->

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                <h3>
                                    <?php echo get_theme_mod('contact_title'); ?>
                                </h3>
                                <p class="mb-4">
                                    <?php echo get_theme_mod('contact_text'); ?>
                                </p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p>
                                            <span><?php esc_html_e('Address:', 'accounting') ?></span> <?php echo get_theme_mod('contact_address'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p>
                                            <span><?php esc_html_e('Phone:', 'accounting') ?></span>
                                            <a href="tel:<?php echo get_theme_mod('contact_phone'); ?>"><?php echo get_theme_mod('contact_phone'); ?></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p>
                                            <span><?php esc_html_e('Email:', 'accounting') ?></span>
                                            <a href="mailto:<?php echo get_theme_mod('contact_mail'); ?>">
                                                <?php echo get_theme_mod('contact_mail'); ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span><?php esc_html_e('Website:', 'accounting') ?></span>
                                            <a href="<?php echo get_theme_mod('contact_website'); ?>"> <?php echo get_theme_mod('contact_website'); ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="map" class="map">
    <?php echo get_theme_mod('google_map'); ?>
</div>

<?php get_footer(); ?>