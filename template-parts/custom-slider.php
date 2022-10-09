<article <?php post_class('hero-wrap') ?> id="slider-<?php the_ID(); ?>">
    <div class="home-slider owl-carousel">

        <?php $settings = get_theme_mod('slider_settings'); ?>
        <?php foreach ($settings as $setting) : ?>
            <div class="slider-item" style="background-image:url(<?php echo wp_get_attachment_url($setting['slider_img']); ?>)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">

                                <?php if (!empty($setting['little_title'])) : ?>
                                    <h2>
                                        <?php echo $setting['little_title']; ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if (!empty($setting['big_title'])) : ?>
                                    <h1 class="mb-4">
                                        <?php echo $setting['big_title']; ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if (!empty($setting['title_btn'])) : ?>
                                    <p>
                                        <a href="<?php echo site_url($setting['title_btn_link']); ?>" class="btn btn-white">
                                            <?php echo $setting['title_btn']; ?>
                                        </a>
                                    </p>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</article>