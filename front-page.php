<?php get_header(); ?>

<!-- Slider Section -->
<?php get_template_part('template-parts/custom', 'slider'); ?>

<!-- Welcome Section -->
<?php if (true == get_theme_mod('welcome_setting', true)) : ?>
    <?php get_template_part('template-parts/custom', 'welcome'); ?>
<?php endif; ?>

<!-- Counter Section -->
<?php if (true == get_theme_mod('counter_setting', true)) : ?>
    <?php get_template_part('template-parts/custom', 'counter'); ?>
<?php endif; ?>

<!-- Testimony Section -->
<?php if (true == get_theme_mod('testimonies_switch_setting', true)) : ?>
    <?php get_template_part('template-parts/custom', 'testimonies'); ?>
<?php endif; ?>

<!-- FAQ -->
<?php if (true == get_theme_mod('faqs_switch_setting', true)) : ?>
    <?php get_template_part('template-parts/custom', 'faqs'); ?>
<?php endif; ?>

<!-- Blog Section -->
<?php if (true == get_theme_mod('blogs_switch_setting', true)) : ?>
    <?php get_template_part('template-parts/custom', 'blogs'); ?>
<?php endif; ?>

<?php get_footer(); ?>