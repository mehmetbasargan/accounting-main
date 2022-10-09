<?php get_header(); ?>

<?php
$blog_page = get_option('page_for_posts');
$image = get_post_thumbnail_id($blog_page);
$image = wp_get_attachment_image_src($image, 'full');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo $image['0']; ?>)" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs mb-2">
					<span class="mr-2">
						<a href="<?php echo home_url('/'); ?>"><?php esc_html_e('Home', 'accounting') ?>
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

<section class="ftco-section">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 ftco-animate">
				<div class="row">

					<?php $post_args = array('post_type' => 'post', 'posts_per_page' => -1,);
					$post_query = new WP_Query($post_args); ?>
					<?php if ($post_query->have_posts()) : ?>

						<!-- the loop -->
						<?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
							<div class="col-md-6 d-flex ftco-animate">
								<div class="blog-entry align-self-stretch">
									<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
									<a href="<?php the_permalink(); ?>" class="block-20 rounded" style="background-image: url('<?php echo $thumb['0']; ?>')"></a>
									<div class="text p-4">
										<div class="meta mb-2">
											<div>
												<p><?php echo get_the_date('d M Y'); ?></p>
											</div>
											<div>
												<a href="<?php the_author_meta() ?>">
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
						<!-- end of the loop -->
						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php _e('Üzgünüz, kriterlerinize uygun gönderi bulunamadı.', 'accounting'); ?></p>
					<?php endif; ?>
				</div>

			</div>

			<!-- Sidebar -->
			<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>