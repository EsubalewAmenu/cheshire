<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cheshire
 */

?>



<!-- ******************** Footer Starts Here ******************* -->
<div class="footer-ablove">
	<div class="container">
		<div class="row">
			<p>Looking For Exclusive Services?
				<button class="btn btn-default">Donate Now</button>
			</p>
		</div>
	</div>
</div>
<footer class="container-fluid footer-cont">
	<div class="container">
		<div class="footer-top row">
			<div class="col-md-4 foot-logo">
				<h2>Charity for Educaton</h2>
			</div>
			<div class="col-md-8 foot-addr">
				<p>Donec venenatis metus at diam condimentum pretiuteger aliquet a turpis quis pel len tesque ueta turpis quis venenatissolelementum</p>
				<ul>
					<li><i class="fas fa-map-marker-alt"></i> Antonya Street, 23/H-2, Building, TA, AUS </li>
					<li><i class="fas fa-mobile-alt"></i> +177 (089) 987665 </li>
					<li><i class="far fa-envelope"></i> support@smarteyeapps.com </li>
				</ul>
			</div>
		</div>
		<div class="foot-botom row">
			<div class="col-md-3">
				<div class="fotter-coo">
					<h5>IMPORTANT LINKS</h5>
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
					<ul>
						<li><i class="fas fa-caret-right"></i> ABOUT US</li>
						<li><i class="fas fa-caret-right"></i> COMPANY PROFILE</li>
						<li><i class="fas fa-caret-right"></i> OUR SERVICES</li>
						<li><i class="fas fa-caret-right"></i> CONTACT US</li>
						<li><i class="fas fa-caret-right"></i> READ BLOG</li>
					</ul>
				</div>

			</div>
			<div class="col-md-4">
				<div class="fotter-coo">
					<h5>GLOBAL UPDATE NEWS</h5>
					<ul>
						<li><i class="fas fa-caret-right"></i> 100 CHILDREN RESCUE FROM WAR ZONE</li>
						<li><i class="fas fa-caret-right"></i> THR FRESH HOUSE CHILD</li>
						<li><i class="fas fa-caret-right"></i> CREATE AWARENESS IN EDUCATON</li>
						<li><i class="fas fa-caret-right"></i> WHAT HAPPEN WHEN WE LIVE!</li>
						<li><i class="fas fa-caret-right"></i> READ BLOG</li>
					</ul>
				</div>

			</div>
			<div class="col-md-5">
				<div class="fotter-coo">
					<h5>PHOTO GALLERY</h5>
					<div class="gallery-row row">
						<div class="col-md-4 col-6 gall-col">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/g1.jpg" alt="">
						</div>
						<div class="col-md-4 col-6 gall-col">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/g2.jpg" alt="">
						</div>
						<div class="col-md-4 col-6 gall-col">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/g3.jpg" alt="">
						</div>
						<div class="col-md-4 col-6 gall-col">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/g4.jpg" alt="">
						</div>
						<div class="col-md-4 col-6 gall-col">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/g1.jpg" alt="">
						</div>
						<div class="col-md-4 col-6 gall-col">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/g2.jpg" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>

<div class="copy">
	<div class="container">
		<a href="https://datascienceplc.com/">2022 &copy; All Rights Reserved | Designed and Developed by Micky</a>

		<span>
			<a><i class="fab fa-github"></i></a>
			<a><i class="fab fa-google-plus-g"></i></a>
			<a><i class="fab fa-pinterest-p"></i></a>
			<a><i class="fab fa-twitter"></i></a>
			<a><i class="fab fa-facebook-f"></i></a>
		</span>
	</div>

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>