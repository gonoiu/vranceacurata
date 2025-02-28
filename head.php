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
	<title><?php the_field('companie', 'options');?></title>
	<meta name="description" content="">
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
</head>
<body>