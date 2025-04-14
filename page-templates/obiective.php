<?php
/**
 * Template Name: Obiective
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page');

?>

<div class="about-area home-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12">
			<h3><?php the_title(); ?></h3>
			<p class="about-desc">
				<?php the_content(); ?>
			</p>   

			</div>
		</div>	
		<div class="faqs-area inner">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title center">
						<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">VranceaCurata.Ro</h4>
						<h3>Mesaj de interes public</h3>
					</div>
				</div>
			</div>
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="faqs-container">
							<?php if(have_rows('mip')):?>
								<?php while(have_rows('mip')): the_row();
									$titlu = get_sub_field('titlu');
									$mesaj = get_sub_field('mesaj');
									$img = get_sub_field('imagine');
									$img_2 = get_sub_field('imagine_2');
									$file = get_sub_field('fisier');
								?>
									<div class="faq-singular">
										<h2 class="faq-question"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt=""><?php echo $titlu; ?></h2>
										<div class="faq-answer">
											<div class="row">
												<div class="col-lg-3">
												<?php
														if(!empty($img)):
													?>
													<a href="<?php echo $img; ?>" class="venobox" data-gall="gallery" data-title="<?php echo $titlu; ?>">
														<img src="<?php echo $img; ?>" alt="<?php echo $titlu; ?>" width ="200px" height="auto">
													</a>
													<?php endif; ?>
												</div>
												<div class="col-lg-3">
													<?php
														if(!empty($img_2)):
													?>
														<a href="<?php echo $img_2; ?>" class="venobox" data-gall="gallery" data-title="<?php echo $titlu; ?>">
															<img src="<?php echo $img_2; ?>" alt="<?php echo $titlu; ?>" width ="200px" height="auto">
														</a>
													<?php endif; ?>
												</div>
												<div class="col-lg-6">
													<div class="desc">
														<?php echo $mesaj; ?>
													</div>	
													<br/>
													<p class="text-center">
														<?php if(!empty($file)): ?>
															<a href="<?php echo $file; ?>" class="btn btn-success">Descarca cerere sistare servicii</a>
														<?php endif; ?>
													</p>	
												</div>
											</div>
										</div>
									</div>	
									
								<?php endwhile;?>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
    get_footer(); 
?>
