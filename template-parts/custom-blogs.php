<article <?php post_class('ftco-section'); ?> id="psot-<?php the_ID(); ?>">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <?php echo get_theme_mod('blogs_little_title'); ?>
                </span>
                <h2><?php echo get_theme_mod('blogs_big_title'); ?></h2>
            </div>
        </div>
        <div class="row d-flex">

            <?php $post_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby'   => 'rand',
            );
            $post_query = new WP_Query($post_args); ?>

            <?php if ($post_query->have_posts()) : ?>

                <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>

                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                            <a href="<?php the_permalink(); ?>" class="block-20 rounded" style="background-image: url('<?php echo $thumb['0']; ?>')"></a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo get_the_date('d M Y'); ?>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_author(); ?>
                                        </a>
                                    </div>
                                    <div>
                                        <p class="meta-chat">
                                            <span>
                                                <i class="fa fa-comment"></i>
                                                <?php echo get_comments_number(); ?>
                                            </span>

                                            <span>
                                                <i class="fa fa-eye"></i>
                                                <?php if (function_exists('the_views')) {
                                                    the_views();
                                                } ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <h3 class="heading mb-3">
                                    <a href="<?php echo the_permalink(); ?>">
                                        <strong><?php the_title(); ?></strong>
                                    </a>
                                    <p><?php the_excerpt(); ?></p>
                                </h3>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Üzgünüz, kriterlerinize uygun gönderi bulunamadı.'); ?></p>
            <?php endif; ?>

        </div>
    </div>
</article>