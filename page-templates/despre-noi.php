<?php
/**
 * Template Name: Despre noi
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('page');
?>



<!--==================================================-->
<!-- Strat Echofy About Area -->
<!--==================================================-->
<div class="about-area home-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="about-thumb">
					<img src="<?php echo get_field('imagine_despre_noi'); ?>" alt="imagine despre noi">
					<?php
						$video = get_field('video_despre_noi');
					?>
					<?php if(!empty($video)): ?>
						<div class="about-video">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $video; ?>"><i class="bi bi-play"></i></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="about-right">
					<div class="section-title left">
						<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">ASOCIAȚIA DE DEZVOLTARE INTERCOMUNITARĂ</h4>
					
						<h1>VRANCEA CURATĂ</h1>
					</div>
				    <div class="about-text">
						<?php the_content(); ?>
				    </div>
					<h3>Scop</h3>
				    <p class="about-desc"><?php the_field('scop'); ?></p>   
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12">
			<h3>Obiective</h3>
			<p class="about-desc">
				<div class="about-list-item">
					<ul>
						<?php if(have_rows('obiective')):?>
							<?php while(have_rows('obiective')): the_row();
								$text = get_sub_field('obiectiv');
							?>
								<li><i class="bi bi-check"></i><?php echo $text; ?></li>
								
							<?php endwhile;?>
						<?php endif;?>
					</ul>
                </div>
			</p>   

			</div>
		</div>	
	</div>
</div>
<!--==================================================-->
<!-- End Echofy About Area -->
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
		    			<p>Team Member</p>
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
		    			<p>Complete Works</p>
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
		    			<p>Award Wining</p>
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
<!-- Start Echofy Process Area Home-Two -->
<!--==================================================-->
<div class="process-area">
	<div class="container">
		<div class="row align-items-center" id="poress-row">
			
			<div class="col-lg-6">
				<div class="process-left">
					<div class="section-title left">
						<h1>Membrii</h1>
						<p class="section-desc">
							<?php the_field('membrii_text'); ?>
						</p>
					</div>
				</div>
			</div>
            <div class="col-lg-6">
				<div class="porcess-thumb">
                    <?php
                        $img = get_field('imagine_membrii')
                    ?>
					<img src="<?php echo $img; ?>" alt="imagine membrii">
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Process Area Home-Two -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Echofy Service Area Home Four -->
<!--==================================================-->
<div class="service-area home-four">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h1>Structura</h1>
				</div>
			</div>
		</div>
		<div class="row">
            <?php if(have_rows('structura')):?>
                <?php while(have_rows('structura')): the_row();
                    $titlu = get_sub_field('titlu');
                    $imagine = get_sub_field('imagine');
                    $text = get_sub_field('descriere');
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-box">
                            <div class="services-content">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home7/choose-us-icon.png" alt="">
                                <h4><?php echo $titlu; ?></h4>
                                <p><?php echo $text; ?></p>
                            </div>
                        </div>
                    </div>	
                <?php endwhile;?>
            <?php endif;?>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Service Area Home Four -->
<!--==================================================-->


<?php get_footer(); ?>