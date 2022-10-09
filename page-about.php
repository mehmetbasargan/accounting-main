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

<!-- Welcome Section -->
<?php if (true == get_theme_mod('welcome_setting', true)) : ?>
    <?php get_template_part('template-parts/custom', 'welcome'); ?>
<?php endif; ?>

<!-- Welcome Section -->
<?php if (true == get_theme_mod('welcome_setting', true)) : ?>
    <?php get_template_part('template-parts/custom', 'counter'); ?>
<?php endif; ?>

<?php get_footer(); ?>