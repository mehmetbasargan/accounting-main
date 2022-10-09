<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-faqs w-100">
                    <?php $image1 = get_theme_mod('faqs_img1', ''); ?>
                    <?php $image2 = get_theme_mod('faqs_img2', ''); ?>
                    <div class="img mb-4 mb-sm-0" style="background-image:url(<?php echo esc_url($image1); ?>)"></div>
                    <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(<?php echo esc_url($image2); ?>)"></div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="heading-section mb-5 mt-5 mt-lg-0">
                    <span class="subheading">
                        <?php echo get_theme_mod('faqs_little_title'); ?>
                    </span>
                    <h2 class="mb-3">
                        <?php echo get_theme_mod('faqs_big_title'); ?>
                    </h2>
                    <p><?php echo get_theme_mod('faqs_content'); ?></p>
                </div>
                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">

                    <?php $faqs = get_theme_mod('faqs_setting'); ?>
                    <?php
                    $i = 1;
                    foreach ($faqs as $faq) : ?>
                        <div class="card">
                            <div class="card-header p-0" id="<?php echo $i; ?>">
                                <h2 class="mb-0">
                                    <button href="#collapse<?php echo $i; ?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                        <p class="mb-0">
                                            <?php echo $faq['faqs_section_title']; ?>
                                        </p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse  <?php if ($i == 1) echo 'show' ?>" id="collapse<?php echo $i; ?>" role="tabpanel" aria-labelledby="1">
                                <div class="card-body py-3 px-0">
                                    <?php echo $faq['faqs_section_content']; ?>
                                </div>
                            </div>
                        </div>

                    <?php $i++;
                    endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>