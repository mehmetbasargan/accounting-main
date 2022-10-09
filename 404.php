<?php get_header(); ?>
<main id="primary" class="site-main-404">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<section class="error-404 not-found text-center">

					<div class="error-404-text">
						<header class="page-header">
							<h1 class="error-404-content">404</h1>
							<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'accounting'); ?></h1>
						</header>

						<div class="page-content">
							<p>
								<?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'accounting'); ?>
							</p>
							<a href="<?php echo home_url('/'); ?>" class="btn-home"><?php esc_html_e('Home Page', 'accounting') ?></a>
						</div>
					</div>

				</section>

			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>