<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('page');
?>

<!--==================================================-->
<!-- Contact Area-->
<!--==================================================-->
<div class="contact-area">
	<div class="container">
		<div class="row contact-info-bg">

			<div class="col-lg-3 col-md-6">
				<div class="contact-info-box">
					<div class="contact-info-icon">
						<i class="fa fa-university fa-3x icon-contact" aria-hidden="true"></i>
					</div>
					<div class="contact-info-content">
						<p><strong><?php the_field('companie', 'options'); ?></strong></p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="contact-info-box">
					<div class="contact-info-icon">
						<i class="fa fa-map-marker fa-3x icon-contact" aria-hidden="true"></i>
					</div>
					<div class="contact-info-content">
						<h4>Adresa</h4>
						<p><?php the_field('adresa', 'options'); ?></p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="contact-info-box">
					<div class="contact-info-icon">
						<i class="fa fa-phone fa-3x icon-contact" aria-hidden="true"></i>
					</div>
					<div class="contact-info-content">
						<h4>Telefon</h4>
						<p><a href="tel:<?php the_field('telefon_1', 'options'); ?>"
								style="color: white; "><?php the_field('telefon_1', 'options'); ?></a></p>
						<p><a href="tel:<?php the_field('telefon_2', 'options'); ?>"
								style="color: white; "><?php the_field('telefon_2', 'options'); ?></a></p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="contact-info-box two">
					<div class="contact-info-icon">
						<i class="fa fa-envelope fa-3x icon-contact" aria-hidden="true"></i>
					</div>
					<div class="contact-info-content">
						<h4>Email</h4>
						<p><a href="mail:<?php the_field('email', 'options'); ?>"
								style="color: white; "><?php the_field('email', 'options'); ?></a></p>
					</div>
				</div>
			</div>

		</div>

		<div class="row pagla-shahin align-items-center">
			<?php
			$harta = get_field('harta_contact');
			?>
			<?php if (!empty($harta)): ?>
				<div class="col-lg-6">
					<div class="google-map"><?php echo $harta; ?></div>
				</div>
			<?php endif; ?>

			<div class="col-lg-6">
				<div class="section-title left">
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png"
							alt="">Formular contact</h4>
					<h1>Scrieti un mesaj</h1>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="453515c" title="Formular de contact 1"]');
				?>
			</div>
		</div>
	</div>
</div>

<style>
	.wpcf7-form label {
		color: #333;
		/* Adjust to your preferred text color */
	}

</style>
<!--==================================================-->
<!-- Contact Area-->
<!--==================================================-->


<?php get_footer(); ?>
