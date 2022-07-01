<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cheshire
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav.jpg">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/slider/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/slider/css/owl.theme.default.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<!-- ******************** Header Starts Here ******************* -->
	<header>
		<div class="container-fluid header-top">
			<div class="container">
				<div class="row">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$cheshire_description = get_bloginfo('description', 'display');
						if ($cheshire_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $cheshire_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
														?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
					<!-- <div class="col-md-3 logo-dv">
                        <img src="assets/images/logo.jpg" alt="">
                    </div> -->
					<div class="col-md-9 bonto">
						<ul>
							<li>
								<div class="donta-btn">
									<p>Please make your</p>
									<strong>Dontatin</strong>
								</div>
							</li>
							<li>
								<div class="voltterr-btn">
									<p>Time to Becom a</p>
									<strong>Volunteer</strong>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



		<!-- ******************** Nav Starts Here ******************* -->

		<div id="menu-jk" class="headwe-nav container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 nav-div">
						<nav class="navbar navbar-expand-lg navbar-light     ">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<!-- 'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu', -->
								<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
								<?php
								$menu_name = 'Primary Menu';
								// primary-menu
								$menu_items = wp_get_nav_menu_items($menu_name);
								
								$menu_list = '	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
								foreach ((array) $menu_items as $key => $menu_item) {
									$title = $menu_item->title;
									$url = $menu_item->url;
									$menu_list .= '<li class="nav-item">';
									// if (str_ends_with($url, $_SERVER['REQUEST_URI']) && !str_ends_with(home_url('/'), $_SERVER['REQUEST_URI'])) $menu_list .= "mp-active-nav";
									// $menu_list .= '';
									$menu_list .= '<a class="nav-link" href="' . $url . '">' . $title . '</a>
									</li>';
								}
								$menu_list .= '</ul>';
								echo $menu_list;
								?>
							</div>
							<!-- <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
								<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
									<li class="nav-item">
										<a class="nav-link" href="about_us.html">About Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="causes.html">Causes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="events.html">Events</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="blog.html">Blog</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="contact_us.html">Contact US</a>
									</li>
								</ul>

							</div> -->
						</nav>
					</div>
					<div class="col-lg-3 d-none d-lg-block social-div">
						<ul class="ulright">
							<li>
								<i class="fab fa-facebook-square"></i>
							</li>
							<li>
								<i class="fab fa-twitter-square"></i>
							</li>
							<li>
								<i class="fab fa-instagram"></i>
							</li>
							<li>
								<i class="fab fa-linkedin"></i>
							</li>
							<li>
								<i class="fab fa-pinterest-square"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- ******************** Nav Starts Here ******************* -->

		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'cheshire'); ?></a>

			<!-- <header id="masthead" class="site-header">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$cheshire_description = get_bloginfo('description', 'display');
					if ($cheshire_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $cheshire_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'cheshire'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
			</header> -->