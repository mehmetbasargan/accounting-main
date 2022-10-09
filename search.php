<?php get_header(); ?>


<section class="ftco-section">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 ftco-animate">
				<div class="row">
					<main id="primary" class="site-main">
						<?php if (have_posts()) : ?>

							<header class="page-header">
								<h1 class="page-title">
									<?php
									/* translators: %s: search query. */
									printf(esc_html__('Search Results for: %s', 'accounting'), '<span>' . get_search_query() . '</span>');
									?>
								</h1>
							</header><!-- .page-header -->

						<?php
							while (have_posts()) : the_post();
								get_template_part('template-parts/content', 'search');
							endwhile;
							the_posts_navigation();
						else :
							get_template_part('template-parts/content', 'none');
						endif; ?>

					</main><!-- #main -->
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