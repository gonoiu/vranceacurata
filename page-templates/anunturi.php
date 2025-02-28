<?php
/**
 * Template Name: Anunturi
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
<!-- Strat Anunturi -->
<!--==================================================-->
<div class="project-area inner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt=""><?php the_field('titlu_website', 'options'); ?> </h4>
					<h1><?php the_title(); ?></h1>
					<!-- <h1>Get Echofy Benifits</h1> -->
				</div>
			</div>
		</div>
		
		<div class="row">

			<?php if(have_rows('anunturi')):?>
				<?php while(have_rows('anunturi')): the_row();
					$titlu = get_sub_field('titlu_anunt');
					$img = get_sub_field('imagine');
					$afisare = get_sub_field('afisare_acasa');
					$file = get_sub_field('fisier');
				?>
					<div class="col-lg-4 col-md-6">
						<div class="single-project-box">
							<div class="project-thumb">
								<img src="<?php echo $img; ?>" alt="">
							</div>
							<div class="project-content">
								<a href="javascript:void(0)"><?php echo $titlu; ?></a>
								<?php if(!empty($file)):?>
									<a class="project-button" href="<?php echo $file; ?>" target="_blank">
										Detalii<i class="bi bi-arrow-right-short"></i>
									</a>
								<?php endif;?>

								<div class="project-shape">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/project-shape.png" alt="">
								</div>
							</div>
						</div>
					</div>	
					
				<?php endwhile;?>
			<?php endif;?>

		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Anunturi -->
<!--==================================================-->


<?php
	get_footer();
?>