<article <?php post_class('ftco-section ftco-no-pt bg-light') ?> id="welcome-<?php the_ID(); ?>">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex">
                <?php $image = get_theme_mod('welcome_img', ''); ?>
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image: url(<?php echo esc_url($image); ?>)"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="heading-section pl-md-4 pt-md-5">
                    <span class="subheading">
                        <?php echo get_theme_mod('welcome_little_title'); ?>
                    </span>
                    <h2 class="mb-4">
                        <?php echo get_theme_mod('welcome_big_title'); ?>
                    </h2>

                    <?php echo get_theme_mod('welcome_text_edit'); ?>
                </div>
            </div>
        </div>
    </div>
</article>