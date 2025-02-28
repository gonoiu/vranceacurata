<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php the_field('titlu_website', 'options'); ?></title>
	<meta name="description" content="<?php the_field('descriere_website', 'options'); ?>">
	<meta name="keywords" content="<?php the_field('cuvinte_cheie', 'options'); ?>">
	<meta name="author" content="WebEtwas">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/fav-icon/icon.png">

	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/bootstrap.min.css" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/owl.carousel.min.css" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/animate.css" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/animated-text.css" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/all.min.css" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/flaticon.css" type="text/css" media="all">
	<!-- font-ICON awesome CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/font-awesome/css/font-awesome.css" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/theme-default.css" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/meanmenu.min.css" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/owl.transitions.css" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/venobox/venobox.css" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/bootstrap-icons.css" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/style.css" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/responsive.css" type="text/css" media="all">	
	<!-- modernizr js -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/vendor/modernizr-3.5.0.min.js"></script>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/meniudreapta/css/meniudreapta.css">

	<style>
		.icon-contact{
			color: white;
			border: solid 3px white;
			width: 90px;
			height: 90px;
			border-radius: 50%;
			padding: 20px;
		}
	</style>
</head>
<body>

	<!-- loder -->
	<div class="loader-wrapper">
		<span class="loader"></span>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>

	<!-- <div class="col-lg-12 text-center">
		<img class="top-images-long" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-uri-vrancea-curata.png" alt="<?php the_field('alt-image', 'options'); ?>">
	</div> -->
<!--==================================================-->
<!-- Start Echofy Top Header Area -->
<!--==================================================-->
<div class="top-header-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-md-4">
				<div class="top-header-info">
					<ul>
						<li><i class="bi bi-geo-alt"></i><?php the_field('adresa', 'options'); ?></li>
						<li><i class="bi bi-envelope-open"></i> <?php the_field('email', 'options'); ?></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-8 col-md-8">
				<div class="top-header-right">
					<div class="top-header-contact">
						<span>
							<i class="bi bi-telephone-fill"></i>
							<a href="tel:<?php the_field('telefon_1', 'options'); ?>" style="color: white">
								<?php the_field('telefon_1', 'options'); ?>
							</a> / 
							<a href="tel:<?php the_field('telefon_2', 'options'); ?>" style="color: white">
								<?php the_field('telefon_2', 'options'); ?>
							</a>
						</span>
					</div>
					<div class="top-header-social-icon">
						<ul>
							<?php if(!empty($facebook)): ?>
								<li>
									<a href="<?php the_field('facebook', 'options'); ?>">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								
							<?php endif; ?>
						</ul>
					</div>
					<div class="header-button">
						<a href="/campanie-constientizare">Campanie</a>
					</div>
					<div class="header-button">
						<a href="/calendar-colectare">Calendar colectare</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Top Header Area -->
<!--==================================================-->



<?php include_once 'meniu.php';?>

<?php include_once 'breadcrumb.php';?>