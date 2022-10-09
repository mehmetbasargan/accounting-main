<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'accounting'); ?></a>

		<header id="masthead" class="site-header">

			<?php if (true == get_theme_mod('top_bar_setting', true)) : ?>

				<div class="wrap">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="bg-wrap">
									<div class="row">

										<div class="col-md-8 col-sm-8 ">
											<p class="mb-0 phone pl-md-2">
												<!-- Section Phone -->
												<?php
												$user_phone = get_theme_mod('accounting_phone', '+90 0000 000 00 00');
												if (!empty($user_phone)) : ?>
													<a href="tel:<?php echo get_theme_mod('accounting_phone'); ?>" class="mr-2">
														<span class="fa fa-phone mr-1"></span>
														<?php echo esc_attr($user_phone); ?>
													</a>
												<?php endif; ?>
												<!-- Section E-Mail -->
												<?php
												$user_mail = get_theme_mod('accounting_mail', 'youremail@email.com');
												if (!empty($user_mail)) : ?>
													<a href="mailto: <?php get_theme_mod('accounting_mail'); ?>">
														<span class="fa fa-paper-plane mr-1"></span>
														<?php echo esc_attr($user_mail); ?>
													</a>
												<?php endif; ?>
											</p>
										</div>

										<div class="col-md-4 col-sm-4 text-center d-flex justify-content-center justify-content-lg-end">
											<div class="social-media">
												<p class="mb-0 d-flex">
													<!-- Section Social İcons -->
													<?php $settings = get_theme_mod('social_icon_setting'); ?>
													<?php foreach ($settings as $setting) : ?>
														<a class="d-flex align-items-center justify-content-center" href="<?php echo $setting['social_url']; ?>" target="_blank">
															<span class="fa <?php echo $setting['social_icon']; ?>">
																<i class="sr-only">Facebook</i>
															</span>
														</a>
													<?php endforeach; ?>
												</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php endif; ?>

			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
				<div class="container">
					<!-- Site logo -->
					<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
						<?php
						$logo_image_id = get_theme_mod('custom_logo');
						echo wp_get_attachment_image($logo_image_id, 'full');
						?>
					</a>
					<!-- Seach Box -->
					<?php search_content(); ?>
					<!---------->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fa fa-bars"></span> <?php esc_html_e('Menu', 'accounting') ?>
					</button>
					<div class="collapse navbar-collapse" id="ftco-nav">
						<?php if (has_nav_menu("menu-1")) {
							$menu_args = array(
								'menu' => "menu-1",
								'container' => "ul",
								'menu_class' => "navbar-nav m-auto",
							);
							wp_nav_menu($menu_args);
						} else {
							printf(__('Henüz bir menü Oluşturmadınız. Oluşturmak için <a href="%s">Tıklayın</a>', "accounting"), admin_url() . 'nav-menus.php');
						}
						?>
					</div>
				</div>
			</nav>

		</header>