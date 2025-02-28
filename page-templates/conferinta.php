<?php
/**
 * Template Name: Conferinta
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page');
?>
<div class="blog-grid-area">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">VranceaCurata.Ro</h4>
					<h3><?php the_title();?></h3>
				</div>
			</div>
		</div>
		<div class="row"><?php the_content(); ?></div>
		<div class="row">
			<?php if(have_rows('conferinte')):?>
				<?php while(have_rows('conferinte')): the_row();
					$text = get_sub_field('descriere');
				?>
					<div class="row" style="border-bottom: solid 1px #4aae44;">
						<?php if(have_rows('perioada')):?>
							<?php while(have_rows('perioada')): the_row();
								$data1 = get_sub_field('data_inceput');
								$data2 = get_sub_field('data_sfarsit');
							?>
								<div class="col-lg-3 col">In perioada <?php echo $data1; ?> 
									<?php if(!empty($data2)): ?>
										- <?php echo $data2; ?>
									<?php endif; ?>
								</div>
							<?php endwhile;?>
						<?php endif;?>
						
						<div class="col-lg-9 col">
							<a href="">
								<?php echo $text; ?>
							</a>
						</div>
						
						<?php if(have_rows('galerie')):?>
							<?php while(have_rows('galerie')): the_row();
								$img = get_sub_field('imagine');
							?>
								<div class="col-lg-2 col" style="margin: 20px 0 20px 0;">
									<a href="<?php echo esc_url($img); ?>" class="venobox" data-gall="imagini-conferinta">
										<img src="<?php echo $img; ?>" alt="" width="150px" height="auto" style=" border-radius: 10px; border:solid 1px #4aae44; padding: 2px">
									</a>
								</div>
							<?php endwhile;?>
						<?php endif;?>
						
					</div>
					
				<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</div>




<?php
	get_footer();
?>