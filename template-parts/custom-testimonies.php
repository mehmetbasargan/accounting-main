<article <?php post_class('ftco-section testimony-section bg-light') ?> id="testimonies-<?php the_ID(); ?>">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-5 mt-4">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">
                    <?php echo get_theme_mod('testimonies_little_title'); ?>
                </span>
                <h2><?php echo get_theme_mod('testimonies_big_title'); ?></h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">

                    <?php $testimonials = get_theme_mod('testimonies_setting'); ?>
                    <?php foreach ($testimonials as $testimonial) : ?>

                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4"><?php echo $testimonial['testimonies_text']; ?></p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(<?php echo wp_get_attachment_url($testimonial['testimonies_img']); ?>)"></div>
                                        <div class="pl-3">
                                            <p class="name">
                                                <?php echo $testimonial['testimonies_title']; ?>
                                            </p>
                                            <span class="position">
                                                <?php echo $testimonial['testimonies_sub_title']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</article>