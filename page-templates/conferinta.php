<?php
/**
 * Template Name: Conferinta
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header('page');
?>
<div class="blog-grid-area">
	<div class="container">

		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png"
							alt="">VranceaCurata.Ro</h4>
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
		</div>
		<div class="row"><?php the_content(); ?></div>

	</div>

</div>
<div class="faqs-area inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="faqs-container">
				<?php if (have_rows('conferinte')): ?>
					<?php while (have_rows('conferinte')):
						the_row();
						$text = get_sub_field('descriere');
						$titlu = get_sub_field('titlu');
						$video = get_sub_field('video');
						?>
						<div class="faq-singular">
							<h5 class="faq-question"><img
									src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png"
									alt=""><?php echo $titlu; ?> ... :
								<?php if (have_rows('perioada')): ?>
									<?php while (have_rows('perioada')):
										the_row();
										$data1 = get_sub_field('data_inceput');
										$data2 = get_sub_field('data_sfarsit');
										?>
										Perioada <?php echo $data1; ?>
										<?php if (!empty($data2)): ?>
											- <?php echo $data2; ?>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</h5>

							<div class="faq-answer">
								<p><?php echo $text; ?></p>
								<div class="row">
									<?php
									$images = get_sub_field('Imagini');
									if ($images):
										foreach ($images as $image_id):
											// Get full URL, thumbnail and alt text from ID
											$image_url = wp_get_attachment_url($image_id);
											$thumb = wp_get_attachment_image_src($image_id, 'thumbnail');
											$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
											?>
											<div class="col-lg-2">
												<div class="col-lg-2 col" style="margin: 20px 0 20px 0;">
													<a href="<?php echo esc_url($image_url); ?>" class="venobox"
														data-gall="imagini-conferinta">
														<img src="<?php echo esc_url($thumb[0]); ?>" alt="<?php echo esc_attr($alt); ?>"
															width="150px" height="auto"
															style="border-radius: 10px; border:solid 1px #4aae44; padding: 2px">
													</a>
												</div>
											</div>
										<?php endforeach;
									endif;
									?>
								</div>
								<?php if (!empty($video)): ?>
									<div class="col-lg-6">
										<?php echo $video; ?>
									</div>
								<?php endif; ?>
							</div>

						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>




<?php
get_footer();
?>
