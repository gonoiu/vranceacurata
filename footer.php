<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<!--meniu dreapta-->
<div id="mySidenav" class="sidenav">
	<a href="/calendar-colectare" class="meniudreapta">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/meniudreapta/img/meniudreapta.jpg" alt="calendar colectare">
	</a>

	<!-- <a href="/adauga-o-infractiune" class="infractiune">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/meniudreapta/img/infractiune.jpg" alt="calendar colectare">
	</a> -->
</div>
<!--meniu dreapta-->

<!--==================================================-->
<!-- Strat Echofy Footer Area-->
<!--==================================================-->
<div class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer-social-address">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12">
							<!-- <a href="/adauga-o-infractiune">
								<div class="footer-social-address-content">
									<h4>Incheie contract online persoane fizice</h4>
								</div>
							</a> -->
							<a href="https://www.contract.polaris.ro" target="_blank">
								<div class="footer-social-address-content">
									<h4>Incheie contract online persoane fizice</h4>
								</div>
							</a>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="footer-social-icon">
								<ul>
									<a href="https://www.contract.polaris.ro" target="_blank" style="color:white"><li class="text">Vezi detalii...</li></a>
									<!-- <li class="text">Contacteaza-ne</li> -->
									<!-- <li>
										<a href="tel:<?php the_field('telefon_contact', 'options'); ?>" style="color:white">
											<i class="fa fa-phone"></i>
											<strong>
												<?php the_field('telefon_contact', 'options'); ?>
											</strong>
										</a>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row add-footer-class">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-logo">
					<a href="/"><img width="80px"
							src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-vrancea-curata.png"
							alt="logo"></a>
				</div>
				<p class="footer-desc"><?php the_field('slogan', 'options'); ?></p>
				<div class="footer-contect-info">
					<div class="footer-contact-info-title">
						<h4>Contact</h4>
					</div>
					<ul>
						<li><i class="bi bi-telephone-plus-fill"></i><?php the_field('telefon_contact', 'options'); ?></li>
						<li><i class="bi bi-envelope-open-fill"></i><?php the_field('email', 'options'); ?></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Meniu</h4>
					</div>
					<div class="footer-widget-menu">
						<ul>
							<li><a href="/"><i class="fas fa-angle-right"></i>Acasa</a></li>
							<li><a href="/despre-noi"><i class="fas fa-angle-right"></i>Despre noi</a></li>
							<li><a href="/statii-transfer"><i class="fas fa-angle-right"></i>Statii transfer</a></li>
							<li><a href="/platforme-deseuri"><i class="fas fa-angle-right"></i>Platforme pentru deseuri</a></li>
							<li><a href="/comunicate-presa"><i class="fas fa-angle-right"></i>Comunicate presa</a></li>
							<li><a href="/contact"><i class="fas fa-angle-right"></i>Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>GDPR</h4>
					</div>
					<div class="footer-widget-menu">
						<ul>
							<li><a href="/termeni-si-conditii"><i class="fas fa-angle-right"></i>Termeni si conditii</a></li>
							<li><a href="/protectia-datelor-cu-caracter-personal"><i class="fas fa-angle-right"></i>Protectia datelor cu caracter personal</a></li>
							<li><a href="/politica-cookies"><i class="fas fa-angle-right"></i>Politica Cookies</a></li>
							<li><a href="/politica-de-confidentialitate"><i class="fas fa-angle-right"></i>Politica de confidentialitate</a></li>
							<li><a href="/intrebari-si-raspunsuri"><i class="fas fa-angle-right"></i>Intrebari si raspunsuri</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Newsletter</h4>
					</div>
					<p>Inscrie-te in Newsletter</p>
					<form action="#">
						<div class="single-newsletter-box">
							<input type="text" name="Email" placeholder="Introdu e-mail" required="">
							<button type="submit">Inscrie-te acum</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="row footer-bottom">
				<div class="col-md-12 text-center">
					<div class="footer-bottom-content">
						<h4>
							© Copyright <?php echo date('Y'); ?> ADI Vrancea Curata - Toate drepturile rezervate </br> 
							website realizat de 
							<a href="https://webetwas.com">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webetwas_w.png" width="100" height="auto" alt="">
							</a>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Footer Area-->
<!--==================================================-->


<!--==================================================-->
<!-- End Echofy search-popup Area-->
<!--==================================================-->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"><i
				class="far fa-times-circle"></i></span></button>
	<button class="close-search"><i class="bi bi-arrow-up"></i></button>
	<form method="post" action="#">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Cauta in site ..." required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!--==================================================-->
<!-- End Echofy search-popup Area-->
<!--==================================================-->



<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->
<div class="prgoress_indicator active-progress">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
			style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 0;">
		</path>
	</svg>
</div>
<!--==================================================-->
<!-- End scrollup section Section -->
<!--==================================================-->




<!-- jquery js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/vendor/jquery-3.6.2.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/bootstrap.min.js"></script>
<!-- carousel js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/owl.carousel.min.js"></script>
<!-- counterup js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jquery.counterup.min.js"></script>
<!-- waypoints js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/waypoints.min.js"></script>
<!-- wow js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/wow.js"></script>
<!-- imagesloaded js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- venobox js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/venobox/venobox.js"></script>

<!--  animated-text js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/animated-text.js"></script>
<!-- venobox min js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/venobox/venobox.min.js"></script>
<!-- isotope js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/isotope.pkgd.min.js"></script>
<!-- jquery meanmenu js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jquery.meanmenu.js"></script>

<!-- jquery scrollup js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jquery.scrollUp.js"></script>
<!-- theme js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/theme.js"></script>
<!-- coustom js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/coustom.js"></script>
<!-- barfiller -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jquery.barfiller.js"></script>
<!-- barfiller -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/vanilla-tilt.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/silik-slider.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/custom.js"></script>
<script>
// Initialize Venobox
$('.popup-btn').venobox({
    share: false,
    closeClick: false // Disable closing when clicking on the backdrop
});

// Make sure click events on navigation buttons (next/prev) don't close the popup
$(document).on('click', '.vbox-next, .vbox-prev', function (e) {
    e.stopPropagation(); // Prevent the click from bubbling up and triggering closeVbox()
});

// Close the popup on outside click, but allow navigation buttons to still function
$(document).on('click', function (e) {
    if (!$(e.target).closest('.vbox-container').length && !$(e.target).closest('.vbox-next, .vbox-prev').length) {
        closeVbox(); // Close the popup if the click is outside the modal and not on navigation buttons
    }
});

</script>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcDWdwqAAAAAPUcDjU99gKUl4AVzoinHD9z5J1a"></script>
<script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LcDWdwqAAAAAPUcDjU99gKUl4AVzoinHD9z5J1a', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>

</body>

</html>
