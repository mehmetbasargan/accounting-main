<footer id="colophon" class="footer site-footer">
	<div class="container px-lg-5">
		<div class="row">
			<div class="col-md-12 py-5">
				<div class="row">

					<div class="col-md-5 mb-md-0 mb-4 text-center">
						<h2 class="footer-heading"><?php esc_html_e('About us', 'accounting'); ?></h2>
						<p><?php esc_html_e('A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'accounting'); ?></p>

						<ul class="ftco-footer-social p-0">
							<!-- Section Social İcons -->
							<?php $settings = get_theme_mod('social_icon_setting'); ?>
							<?php foreach ($settings as $setting) : ?>
								<li class="ftco-animate">
									<a href="<?php echo $setting['social_url']; ?>" data-toggle="tooltip" data-placement="top" title="Twitter" target="_blank">
										<span class="fa <?php echo $setting['social_icon']; ?>"></span>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>

					</div>

					<div class="col-md-7">
						<div class="row justify-content-center">
							<div class="col-md-12 col-lg-10">
								<div class="row">
									<div class="col-md-12 mb-md-0 mb-4  text-center">
										<h2 class="footer-heading">
											<?php esc_html_e('Menu', 'accounting'); ?>
										</h2>

										<?php if (has_nav_menu("menu-1")) {
											$menu_args = array(
												'menu' => "menu-1",
												'container' => "ul",
												'menu_class' => "list-unstyled",
											);
											wp_nav_menu($menu_args);
										} else {
											printf(__('Henüz bir menü Oluşturmadınız. Oluşturmak için <a href="%s">Tıklayın</a>', "accounting"), admin_url() . 'nav-menus.php');
										}
										?>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row mt-md-5">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright &copy; <?php the_date('Y'); ?> <?php esc_html_e('All rights reserved | This template is made with', 'accounting'); ?> <i class="fa fa-heart" aria-hidden="true"></i> <?php esc_html_e('by', 'accounting'); ?> <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
	<svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>