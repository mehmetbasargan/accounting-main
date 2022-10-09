<?php get_header(); ?>

<?php
$blog_page = get_option('page_for_posts');
$image = get_post_thumbnail_id($blog_page);
$image = wp_get_attachment_image_src($image, 'full');
?>

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
					<span><?php echo get_the_title($blog_page); ?></span>
				</p>
				<h1 class="mb-0 bread"><?php echo get_the_title($blog_page); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 ftco-animate">
				<?php while (have_posts()) : the_post();

					get_template_part('template-parts/content');

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle"> <i class="fa fa-angle-double-left"></i> ' . esc_html__('Previous', 'accounting') . '</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next', 'accounting') . ' <i class="fa fa-angle-double-right"></i> ' . '</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; ?>

			</div>

			<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>