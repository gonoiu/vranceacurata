<?php
/**
 * Template Name: Acasa
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>


<!--==================================================-->
<!-- Start Echofy Hero Area -->
<!--==================================================-->
<div class="hero-slides owl-carousel" >	
	<?php if(have_rows('banner_acasa')):?>
		<?php while(have_rows('banner_acasa')): the_row();
			$banner = get_sub_field('imagine');
			$facebook = the_field('facebook', 'options');
			$twitter = the_field('twitter', 'options');
			$linkedin = the_field('linkedin', 'options');
			$titlu1 = get_sub_field('titlu_1');
			$titlu2 = get_sub_field('titlu_2');
			$text = get_sub_field('text');
			$buton1 = get_sub_field('buton_1');
			$buton2 = get_sub_field('buton_2');
			$link_buton_1 = get_sub_field('link_buton_1');
			$link_buton_2 = get_sub_field('link_buton_2');
		?>
		
			
			<div class="hero-area d-flex align-items-center" style="background-image: url( <?php echo esc_url($banner); ?> )">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">
							<div class="hero-content">
								<h4 class="sub-title" data-animation="fadeInUp" data-delay="100ms">VranceaCurata.Ro</h4>
								<h1 class="main-title" data-animation="fadeInUp" data-delay="400ms"><?php echo $titlu1; ?></h1>
								<h1 class="main-title-2" data-animation="fadeInUp" data-delay="600ms" data-duration="1000ms"><?php echo $titlu2; ?></h1>
								<p class="hero-desc" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms"><?php echo $text; ?></p>
							</div>
							<div class="echofy-button" data-animation="fadeInUp" data-delay="1000ms">
								<a href="<?php echo $link_buton_1; ?>"><?php echo $buton1; ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/button-shape.png" alt="button vranceacurata"></a>
								<img class="two" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/button-shape-2.png" alt="">

							</div>		
							<div class="echofy-button two" data-animation="fadeInUp" data-delay="1200ms">
								<a href="<?php echo $link_buton_2; ?>"><?php echo $buton2; ?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-social-icon" data-animation="fadeInLeft" data-delay="1000ms">
					<ul>
						<?php if(!empty('$facebook')): ?>
							<li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
						<?php endif; ?>

						<?php if(!empty('$twitter')): ?>
							<li><a href="<?php the_field('twitter', 'options'); ?>"><i class="fab fa-twitter"></i></a></li>
						<?php endif; ?>

						<?php if(!empty('$linkedin')): ?>
							<li><a href="<?php the_field('linkedin', 'options'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
						<?php endif; ?>
						
						<li class="text">Fii Sociabil !</li>
					</ul>
				</div>
			</div>	
			
		<?php endwhile;?>
	<?php endif;?>
</div>
<!--==================================================-->
<!-- End Echofy Hero Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Echofy Text Area -->
<!--==================================================-->

<!-- Modal TLS -->
<!-- Trigger Link -->


<!-- Modal Structure -->


<section class="echofy-text-section"  data-cues="zoomIn">
	<div class="inner-container">
		<div class="marquee">
			<div class="marquee-block"> 
				<!-- content-box -->
				<div class="content-box">
					<h6 class="title"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/text-shape.png" alt="">Deseuri Voluminoase</span></h6>
				</div>
				<!-- content-box -->
				<div class="content-box">
					<h6 class="title"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/text-shape.png" alt="">Deseuri Plastic si metal</span></h6>
				</div>
				<!-- content-box -->
				<div class="content-box">
					<h6 class="title"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/text-shape.png" alt="">Deseruri din constructii si demolari</span></h6>
				</div>
				<!-- content-box -->
				<div class="content-box">
					<h6 class="title"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/text-shape.png" alt="">Deseuri Biodegradabile (compost)</span></h6>
				</div>
				<!-- content-box -->
				<div class="content-box">
					<h6 class="title"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/text-shape.png" alt="">Deseuri electrice, electronica si electrocasnice (DEEE)</span></h6>
				</div>
			<!-- </div>
			<div class="marquee-block">  -->
				<!-- content-box -->
				<div class="content-box">
					<h6 class="title"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/text-shape.png" alt="">Deseuri reciclabile din sticla</span></h6>
				</div>
				<!-- content-box -->
				<div class="content-box">
					<h6 class="title"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/text-shape.png" alt="">Deseuri menajere</span></h6>
				</div>
				<!-- content-box -->
				<div class="content-box">
					<h6 class="title"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/text-shape.png" alt="">Deseuri hartie si carton</span></h6>
				</div>
			</div>
	  	</div>
	</div>
</section>

<!--==================================================-->
<!-- End Echofy Text Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Strat Echofy About Area -->
<!--==================================================-->
<div class="about-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-thumb">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sortare.jpg" alt="">
					<!-- <img class="about-thumb-shape" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/about-award.png" alt=""> -->
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-right">
					<div class="section-title left">
						<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">Cine suntem?</h4>
						<p><?php the_content(); ?></p>	
					</div>
					<div class="single-about-box">
						<div class="about-box-icon">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/about-icon-1.png" alt="">
						</div>
						<div class="about-box-content">
							<h4>Protejăm natura și resursele naturale</h4>
							<!-- <p>mica descriere</p> -->
						</div>
					</div>					
					<div class="single-about-box">
						<div class="about-box-icon">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/about-icon-2.png" alt="">
						</div>
						<div class="about-box-content">
							<h4>Reducem poluarea solului, apei, aerului</h4>
							<!-- <p>mica descriere</p> -->
						</div>
					</div>
					<div class="echofy-button">
						<a href="/despre-noi">Citeste mai mult <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/button-shape.png" alt="<?php the_field('alt_image', 'options'); ?>"></a>
						<img class="two" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/button-shape-2.png" alt="<?php the_field('alt_image', 'options'); ?>">
					</div>	
                    <div class="about-shape-1">
                    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/about-shape-1.png" alt="<?php the_field('alt_image', 'options'); ?>">
                    </div>                   
                    <div class="about-shape-2">
                    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/about-shape-2.png" alt="<?php the_field('alt_image', 'options'); ?>">
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy About Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Strat Echofy Service Area -->
<!--==================================================-->
<div class="service-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="section-title left">
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">Containere colectoare </h4>
					<h1>Colectare selectiva</h1>
					<h1>Cele mai bune servicii de colectare</h1>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
		<div class="row">
			<div class="service-list-1 owl-carousel">
				<?php if(have_rows('container')):?>
					<?php while(have_rows('container')): the_row();
						$titlu = get_sub_field('titlu');
						$imagine = get_sub_field('imagine');
						$link = get_sub_field('link_pagina');
					?>
						<div class="col-lg-12">
							<div class="single-service-box">
								<div class="service-content">
									<div class="service-content-icon">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/service-icon1.png" alt="<?php the_field('alt_image', 'options'); ?>">
									</div>
									<h4><?php echo $titlu; ?></h4>
									<p>
										In 
										<strong>
											<a href="<?php echo $link['url']; ?>">
												<?php echo $titlu; ?>
											</a>
										</strong>
										se colecteaza ...
									</p>
								</div>
								<div class="service-thumb">
									<a href="<?php echo $link['url']; ?>">
										<img src="<?php echo $imagine; ?>" alt="">
									</a>
								</div>
								<div class="service-box-shape">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/service-box-shape.png" alt="">
								</div>
							</div>
						</div>		
					<?php endwhile;?>
				<?php endif;?>		  
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Service Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Strat Echofy Skill Area -->
<!--==================================================-->
<div class="skill-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title left">
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">Deserurile le colectam </h4>
					<h2>De ce este important să reciclăm?</h2>
						<div class="about-list-item">
						<ul>
							<?php if(have_rows('de_ce_reciclam')):?>
								<?php while(have_rows('de_ce_reciclam')): the_row();
									$text = get_sub_field('reciclam');
								?>
									
									<li>
										<i class="bi bi-check"></i><?php echo $text; ?>
									</li>
									
								<?php endwhile;?>
							<?php endif;?>
						</ul>
					</div>
				</div>
				
     		</div>
     		<div class="col-lg-6">
				<div class="skills-item">
					<div class="skills-item-content">
						<div class="skills-item-icon">
							<i class="bi bi-check"></i>
						</div>
						<div class="skills-item-title">
							<h4>Mediu sigur</h4>
						</div>
					</div>
				</div>			
				<div class="skills-item">
					<div class="skills-item-content">
						<div class="skills-item-icon">
							<i class="bi bi-check"></i>
						</div>
						<div class="skills-item-title">
							<h4>Reciclare</h4>
						</div>
					</div>
				</div>
				<div class="skills-content">
				  <p>Reciclare</p>
				  <div class="skill-bg"></div>
				  <div class="skills html"><span class="number">90%</span></div>
				</div>

				<div class="skills-content">
					<p>Paduri Curate</p>
					<div class="skill-bg"></div>
				  	<div class="skills css"><span class="number">80%</span></div>
				</div>
     		</div>
		</div>

		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="gallery-images">
					<div class="row gallery-row" style="margin-bottom: 10px;">
						<?php if(have_rows('reciclare_deseuri')):?>
							<?php while(have_rows('reciclare_deseuri')): the_row();
								$afis = get_sub_field('afise_deseuri');
							?>
								
								<div class="col-lg-3 col-md-4 col-sm-6 gallery-item" style="margin-bottom:20px;">
									<a href="<?php echo $afis; ?>" class="venobox" data-gall="gallery" data-title="Your Image Caption">
										<img src="<?php echo $afis; ?>">
									</a>
								</div>
							<?php endwhile;?>
						<?php endif;?>
					</div>	
				</div>									
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Skill Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Strat Echofy Counter Area -->
<!--==================================================-->
<div class="counter-area">
	<div class="container">
		<div class="row">
		    <div class="col-lg-3 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/counter-icon-1.png" alt="">
		    		</div>
		    		<div class="counter-content">
		    			<h4 class="counter">100</h4>
		    			<span>+</span>
		    			<p>Echipa Noastra</p>
		    		</div>
		    	</div>
		    </div>		  
		    <div class="col-lg-3 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/counter-icon-2.png" alt="">
		    		</div>
		    		<div class="counter-content">
		    			<h4 class="counter">960</h4>
		    			<span>+</span>
		    			<p>Statii de colectare</p>
		    		</div>
		    	</div>
		    </div>		   
		    <div class="col-lg-3 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/counter-icon-3.png" alt="">
		    		</div>
		    		<div class="counter-content">
		    			<h4 class="counter">38</h4>
		    			<p>Statii de transfer</p>
		    		</div>
		    	</div>
		    </div>		   
		    <div class="col-lg-3 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/counter-icon-4.png" alt="">
		    		</div>
		    		<div class="counter-content">
		    			<h4 class="counter">4.7</h4>
		    			<p>Avg Ratings</p>
		    		</div>
		    	</div>
		    </div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Counter Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Strat Echofy Process Area -->
<!--==================================================-->
<div class="process-area">
	<div class="container">
		<div class="row align-items-center" id="poress-row">
			<div class="col-lg-6 col-md-12">
				<div class="porcess-thumb">
					<?php 
						$img_colaborator = get_field('imagine'); 
					?>
					<img src="<?php echo $img_colaborator; ?>" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="process-left">
					<div class="section-title left">
						<?php if(!empty('subtitlu')): ?>
							<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>" alt=""><?php the_field('subtitlu'); ?> </h4>
						<?php endif; ?>

						<?php if(!empty('titlu')): ?>
							<h1><?php the_field('titlu'); ?></h1>
						<?php endif; ?>

						<?php if(!empty('descriere')): ?>
							<p class="section-desc">
								<?php the_field('descriere'); ?>
							</p>
						<?php endif; ?>
					</div>
					<?php if(!empty('link')): ?>
						<div class="echofy-button">
							<a href="<?php the_field('link'); ?>">Detalii ... <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/button-shape.png" alt=""></a>
							<img class="two" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/button-shape-2.png" alt="">
						</div>
					<?php endif; ?>

					<div class="echofy-button col-lg-7 col">
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/DrefWCP4B_Y?si=1Ddcbbr6-RvwSI6I">Video - Incheiere contract online </a>
					</div>	

				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Process Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Strat Echofy Process Area Two-->
<!--==================================================-->
<div class="process-area-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">Obiective in desfasurare</h4>
					<h1>Construim un Viitor mai Verde</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<a href="/constientizare">
					<div class="single-process-box-two style-one">
						<div class="process-icon-thumb-two">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/process-two-icon1.png" alt="">
						</div>
						<div class="process-two-content">
							<h4>Constientizare</h4>
							<!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit netus consequat, rutrum nisi lectus -->
							</p>
						</div>
					</div>
				</a>
			</div>			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<a href="/curatare-mediu">
					<div class="single-process-box-two">
						<div class="process-icon-thumb-two">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/process-two-icon2.png" alt="">
						</div>
						<div class="process-two-content">
							<h4>Curatare Mediu</h4>
							<!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit netus consequat, rutrum nisi lectus -->
							</p>
						</div>
					</div>
				</a>
			</div>			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<a href="/mentinere-mediu">
					<div class="single-process-box-two style-three">
						<div class="process-icon-thumb-two">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/process-two-icon3.png" alt="">
						</div>
						<div class="process-two-content">
							<h4>Mentinere Mediu</h4>
							<!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit netus consequat, rutrum nisi lectus -->
							</p>
						</div>
					</div>
				</a>	
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Process Area Two-->
<!--==================================================-->

<!--==================================================-->
<!-- Strat Echofy Brand Area-->
<!--==================================================-->
<div class="brand-area">
	<div class="container">
		<div class="row" id="brand-bg">
			<div class="col-lg-12">
				<div class="brand-content">
					<div class="row">
						<div class="col-lg-3">
							<img width="150" height="150" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/avertizare.png" style="border:solid 2px white; border-radius:50%" alt="">
						</div>
						<div class="col-lg-9">
							<h4 style="padding-top: 30px">Nerespectarea regulilor privind colectarea selectivă atrage 
							după sine aplicarea de sancţiuni drastice din partea autorităţilor 
							abilitate, în conformitate cu legile în vigoare.</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-shape">
		   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/brand-shape.png" alt="">
	    </div>
	</div>
</div>
						</br></br>
<!--==================================================-->
<!-- End Echofy Brand Area-->
<!--==================================================-->

<?php get_footer();?>