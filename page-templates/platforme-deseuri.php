<?php
/**
 * Template Name: Platforme Deseuri
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
<!-- Strat Echofy Event Area Home Five-->
<!--==================================================-->
<div class="event-area home-five">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home5/title-shape.png"
							alt="">VranceaCurata.Ro</h4>
					<h3>Platforme pentru deseuri din judetul Vrancea si localitatile arondate.</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="tab-main-area">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

						<?php
						if (have_rows('localitati_arondate')):
							$count = 0;

							while (have_rows('localitati_arondate')):
								the_row();

								$main_title = get_sub_field('platforma-deseuri');
								$main_title_sani = strtolower(str_replace(' ', '', $main_title));

								// Create a unique ID for each tab by appending the counter.
								$unique_id = $main_title_sani . '-' . $count;

								// Set the first tab as active by checking if count is 0.
								$class = ($count === 0) ? 'nav-link active' : 'nav-link ';
								$class2 = ($count % 2 == 0) ? '' : 'style-two';
								?>

								<li class="nav-item" role="presentation">
									<button class="<?php echo $class . ' ' . $class2; ?>" id="<?php echo $unique_id; ?>-tab"
										data-bs-toggle="pill" data-bs-target="#<?php echo $unique_id; ?>" type="button"
										role="tab" aria-controls="<?php echo $unique_id; ?>"
										aria-selected="<?php echo $count === 0 ? 'true' : 'false'; ?>">
										<?php echo $main_title; ?>
									</button>
								</li>

								<?php
								$count++;
							endwhile;

						else:
							// Optional: handle if there are no rows...
						endif;
						?>

					</ul>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="tab-content" id="pills-tabContent">
					<?php if (have_rows('localitati_arondate')):
						$count = 0;
						while (have_rows('localitati_arondate')):
							the_row();

							$main_title = get_sub_field('platforma-deseuri');
							$main_title_sani = strtolower(str_replace(' ', '', $main_title));
							$unique_id = $main_title_sani . '-' . $count;
							$pane_class = ($count === 0) ? 'tab-pane fade active show' : 'tab-pane fade';
							?>
							
							<div class="<?php echo $pane_class; ?>" id="<?php echo $unique_id; ?>" role="tabpanel"
								aria-labelledby="<?php echo $unique_id; ?>-tab" tabindex="0">
								<div class="row">
									<div class="col-lg-12">
									
										<div class="single-event">
											<div class="single-event-box">
												<div class="row align-items-center">
												<h4><?php echo $main_title; ?></h4>
													<!-- First Column - 30% Width -->
													<div class="col-lg-4 column-20">
														<div class="event-thumb">
															<?php echo get_sub_field('harta'); ?>
														</div>
													</div>

													<!-- Middle Column - 40% Width -->
													<div class="col-lg-4 column-50">
														<div class="event-content">
															<div class="event-titel">
																<div class="event-date">
																	<span><i class="bi bi-clock"></i>Program Lucru:
																		<?php echo get_sub_field('program_lucru'); ?></span>
																</div>
																
																<p>Telefon: <?php echo get_sub_field('telefon'); ?></p>
															</div>
														</div>
													</div>

													<!-- Third Column - 30% Width -->
													<div class="col-lg-4 column-30">
														<div class="gallery-images">
															<?php
															$images = get_sub_field('galerie_imagini');
															if ($images && is_array($images)):
																$chunked_images = array_chunk($images, 3);
																foreach ($chunked_images as $row_index => $image_row): ?>
																	<div class="row gallery-row" style="margin-bottom: 10px;">
																		<?php foreach ($image_row as $image_id): ?>
																			<div class="col-lg-4 col-md-4 col-sm-6 gallery-item">
																				<?php
																				$image_url = wp_get_attachment_image_url($image_id, 'medium');
																				$full_image_url = wp_get_attachment_image_url($image_id, 'full');
																				?>
																				<a href="<?php echo esc_url($full_image_url); ?>"
																					class="venobox" data-gall="gallery"
																					data-title="Your Image Caption">
																					<img src="<?php echo esc_url($image_url); ?>"
																						class="img-fluid">
																				</a>
																			</div>
																		<?php endforeach; ?>
																	</div>
																<?php endforeach; ?>
															<?php endif; ?>
														</div>
													</div>

													<div class="event-desc-box">
														<span><strong>Localitati arondate: </strong>
															<p class="event-desc">
																<?php echo get_sub_field('localitati_arondate'); ?>
															</p>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
							$count++;
						endwhile;
					else: ?>
						<p>Nu s-au gasit date pentru localitati arondate Platforme deseuri.</p>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>
<!--==================================================-->
<!-- Strat Echofy Event Area Home Five-->
<!--==================================================-->


<?php get_footer(); ?>
