<?php
/**
 * Template Name: Comunicate ADI
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
<!-- Strat Stiri-->
<!--==================================================-->
<div class="blog-grid-area">
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
			<?php if(have_rows('comunicate_adi')):?>
				<?php while(have_rows('comunicate_adi')): the_row();
					$titlu = get_sub_field('titlu');
					$data = get_sub_field('data');
					$fisier = get_sub_field('fisier');
				?>
					<div class="row">
						
						<div class="col-lg-12 col">
							<?php echo $data; ?> / 
							<a href="<?php echo $fisier; ?>" target="_blank">
								<?php echo $titlu; ?>
							</a>
						</div>

					</div>
					
				<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Stiri-->
<!--==================================================-->



<?php
    get_footer();
?>