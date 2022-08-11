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
			<a href="<?php echo home_url('/donation') ?>">
				<p>Looking For Exclusive Services?
					<button class="btn btn-default">Donate Now</button>
				</p>
			</a>
		</div>
	</div>
</div>
<footer class="container-fluid footer-cont">
	<div class="container">
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
						<li><i class="fas fa-map-marker-alt"></i> Mekanisa</li>
						<li><i class="fas fa-map-marker-alt"></i> Addis Ababa, Ethiopia</li>
						<li><i class="fas fa-mobile-alt"></i> +251 113 21 3869</li>
						<li><i class="fas fa-mobile-alt"></i> +251 113 21 3879</li>
						<li><i class="fas fa-envelope"></i> info@cheshirefai.org</li>
					</ul>
				</div>

			</div>
			<div class="col-md-5">
				<div class="fotter-coo">
					<h5>PHOTO GALLERY</h5>
					<div class="gallery-row row">

						<?php
						$args = array(
							'post_type'      => 'galleries',
							'post_status'    => 'publish',
						);

						$galleries = get_posts($args);
						foreach ($galleries as $gallery) { ?>

							<div class="col-md-4 col-6 gall-col">
								<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($gallery->ID), 'thumbnail_size'); ?>
								<img src="<?php echo $src[0] ?>" alt="">
							</div>
						<?php } ?>

					</div>
				</div>

			</div>
		</div>
	</div>
</footer>

<div class="copy">
	<div class="container">
		<a href="https://datascienceplc.com/">2022 &copy; All Rights Reserved | Designed and Developed by Help Desk</a>

		<span>
			<a href="https://www.facebook.com/Cheshire-Foundation-Action-for-Inclusion-107485298724827" target="_blank"><i class="fab fa-facebook-f"></i></a>
			<a href="https://twitter.com/CfaiCheshire?t=aDAhzVXh-2phO6-N-qDDkw&s=35" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="https://instagram.com/cfaicheshire?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="https://www.linkedin.com/company/cheshire-foundation-action-for-inclusion" target="_blank"><i class="fab fa-linkedin"></i></a>
		</span>
	</div>

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

</html>