<?php
/**
 * Template Name: Colaborator
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header('page');
?>


<div class="about-area home-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="about-thumb">
					<img src="<?php echo get_field('imagine_colaborator'); ?>" alt="colaborator">
					<?php
						$video = get_field('video_despre_noi');
					?>
					<?php if (!empty($video_colaborator)): ?>
						<div class="about-video">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $video_colaborator; ?>"><i class="bi bi-play"></i></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="about-right">
					<div class="section-title left">
						<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt=""><?php the_field('companie', 'options'); ?></h4>
						<h1><?php the_field('titlu_1') ?></h1>
					</div>
					<div class="about-text">
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt=""></span><a href="javascript:void(0)"><?php the_field('subtitlu'); ?></a>
					</div>

					<br /><br />

					<div class="about-list-item">
						<div class="about-text">
							<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt=""></span><a href="javascript:void(0)">Localitati Arondate:</a>
						</div>

						<?php
							$localitati = the_field('localitati_arondate');
						?>

						<?php if (!empty($localitati)): ?>
							<p class="about-text"><?php echo $localitati; ?></p>
						<?php endif; ?>

						<div class="about-text">
							<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt=""></span><a href="javascript:void(0)">Contractare:</a>
							<p>
								<?php
								$legitimatie = get_field('legitimatie_polaris');
								?>
								Reprezentanții Polaris M Holding care se vor prezenta la adresa persoanelor fizice se
								vor legitima cu documentul eliberat de companie
								(documentul îl regăsiți <a href="<?php echo $legitimatie; ?>" class="venobox" data-gall="gallery" data-title="Legitimatie">aici</a>) și doar după verificarea
								acestuia va rugam sa oferiți datele personale in vederea completării contractului
								(GDPR).
							</p>
						</div>

						<div class="about-text">
							<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt=""></span><a href="javascript:void(0)">Detalii Contact:</a>
						</div>
						<ul>
							<li><i class="bi bi-check"></i> Garaj, parcare, autogunoiere: str. Fundatura Valcele, T91,
								P468 , Loc. Focsani, jud. Vrancea
							</li>
							<li><i class="bi bi-check"></i> Adresa Sediu administrativ:
								<?php the_field('adresa_colaborator'); ?>
							</li>
							<li><i class="bi bi-check"></i>
								Telefon Dispecerat: <a href="tel:<?php the_field('telefon_dispecerat'); ?>"><?php the_field('telefon_dispecerat'); ?></a>
							</li>
							<li><i class="bi bi-check"></i>
								Email: <a href="mailto:<?php the_field('email_colaborator'); ?>"><?php the_field('email_colaborator'); ?></a>
							</li>
						</ul>
					</div>

					<div class="row">
						<div class="echofy-button col-lg-5 ">
							<a href="/contact">Contact <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/button-shape.png" alt=""></a>
							<img class="two" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/button-shape-2.png" alt="">
						</div>

						<div class="echofy-button col-lg-7 ">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/DrefWCP4B_Y?si=1Ddcbbr6-RvwSI6I">Video - Incheiere contract online </a>
						</div>
					</div>
						
				</div>
			</div>
		</div>
		<hr />
		<div class="row align-items-center" style="border: solid 1px #4aaf45; padding:5px; border-radius: 20px; margin: 0 5px 50px 5px;">

			<div class="col col-md-3 col-sm-6">
				<p> 
					<?php $uc = get_field('contract_utiliator_casnic'); ?>
					Contract Utilizatori Casnici
					<a href="<?php echo $uc['url']; ?>" target="_blank">
						<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
					</a>
				</p>

				<p>
					<?php $nc = get_field('contract_utiliator_non_casnic'); ?>
					Contract Utilizatori Noncasnici
					<a href="<?php echo $nc['url']; ?>" target="_blank">
						<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
					</a>
				</p>
				
				<p>
					<?php $cd = get_field('contract_delegare'); ?>
					Contract colectare si transport Lot-1 Zona Focsani
					<a href="<?php echo $cd['url']; ?>" target="_blank">
						<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
					</a>
				</p>
			</div>
			<div class="col-md-3 col-xs-6 col text-center">
				<?php
					$qr = get_field('cod_qr');
				?>
				<p>Scanati <strong>Codul QR</strong> pentru a incheia contracte online </p>
				<img src="<?php echo $qr; ?>" alt="" width="150" height="auto">
			</div>
			<div class="col-md-3 col-xs-12 text-center">
				<h1>Sau</h1>
			</div>
			<div class="col-md-3 col-xs-12 text-center">
				<strong>Accesati website</strong> <a href="<?php the_field('link_contracte'); ?>" target="_blank"><h4 style="color: #4aaf45;">www.contract.polaris.ro</h4></a>
			</div>



		</div>
		<div class="row align-items-center">
			<div class="about-text">
				<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt=""></span><a href="javascript:void(0)">Acte necesare pentru incheiere contracte:</a>
			</div>
			<div class="about-list-item">
				<ul>
					<?php if (have_rows('documente_contracte')): ?>
						<?php
							$displayed_titles = []; // Array to track displayed titles
							while (have_rows('documente_contracte')):
								the_row();
								$titlu = get_sub_field('titlu');
								$document = get_sub_field('document');

								// Check if the title has already been displayed
								if (!in_array($titlu, $displayed_titles)):
									$displayed_titles[] = $titlu; // Mark the title as displayed
									?>
									<h5><?php echo $titlu; ?></h5>
								<?php endif; ?>
							<li>
								<i class="bi bi-check"></i><?php echo $document; ?>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>

				</ul>
			</div>
			
		</div>

		<br /><br />

		<div class="row align-items-center">
			<div class="about-text">
				<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt=""></span><a href="javascript:void(0)">Servicii:</a>
			</div>
			<br /><br />
			<div><?php the_content(); ?></div>
			<br /><br />
			<div class="about-list-item">
				<ul>
					<?php if (have_rows('servicii_prestate')): ?>
						<?php while (have_rows('servicii_prestate')):
							the_row();
							$titlu = get_sub_field('titlu_serviciu');
							?>
							<li><i class="bi bi-check"></i><?php echo $titlu; ?></li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>

		<br /><br />

		<div class="row align-items-center table-responsive">
			<table class="table table-hover border">
				<thead class="border">
					<tr>
						<th scope="col" rowspan="2" style="vertical-align: middle;">Nr. crt.</th>
						<th scope="col" rowspan="2" style="vertical-align: middle;">DENUMIRE ACTIVITATE</th>
						<th scope="col" colspan="4" class="text-center">OPERATOR SALUBRIZARE SI SERVICII PUBLICE FOCSANI
						</th>
						<th scope="col" colspan="4" class="text-center table-success">OPERATOR POLARIS M HOLDING SRL
						</th>
					</tr>
					<tr>
						<td class="text-center">TARIF PERSOANE FIZICE (LEI/PERS/LUNA FARA TVA)</td>
						<td class="text-center">TARIF PERSOANE FIZICE (LEI/PERS/LUNA CU TVA)</td>
						<td class="text-center">TARIF PERSOANE JURIDICE (LEI/PERS/LUNA FARA TVA)</td>
						<td class="text-center">TARIF PERSOANE JURIDICE (LEI/PERS/LUNA CU TVA)</td>
						<td class="text-center table-success">TARIF PERSOANE FIZICE (LEI/PERS/LUNA FARA TVA)</td>
						<td class="text-center table-success">TARIF PERSOANE FIZICE (LEI/PERS/LUNA CU TVA)</td>
						<td class="text-center table-success">TARIF PERSOANE JURIDICE (LEI/PERS/LUNA FARA TVA)</td>
						<td class="text-center table-success">TARIF PERSOANE JURIDICE (LEI/PERS/LUNA CU TVA)</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row" class="text-center" style="vertical-align: middle;">1</th>
						<td>Utilizatori casnici LOT 1 - Zona Focsani</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="table-success"></td>
						<td class="table-success"></td>
						<td class="table-success"></td>
						<td class="table-success"></td>
					</tr>
					<tr>
						<th scope="row" class="text-center" style="vertical-align: middle;">1.1</th>
						<td>Tarif gestionare deseuri municipale <strong>Urban</strong></td>
						<td class="text-center" style="vertical-align: middle;">21.26</td>
						<td class="text-center" style="vertical-align: middle;">25.29</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">20.78</td>
						<td class="text-center table-success" style="vertical-align: middle;">24.73</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
					</tr>
					<tr>
						<th scope="row" class="text-center" style="vertical-align: middle;">1.2</th>
						<td>Tarif gestionare deseuri municipale <strong>Rural</strong></td>
						<td class="text-center" style="vertical-align: middle;">14.51</td>
						<td class="text-center" style="vertical-align: middle;">17.27</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">10.24</td>
						<td class="text-center table-success" style="vertical-align: middle;">12.19</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
					</tr>
					<tr>
						<th scope="row" class="text-center" style="vertical-align: middle;">2</th>
						<td>Utilizatori non-casnici LOT 1 - Zona Focsani <br />(Tarif unic <strong>Urban</strong> si
							<strong>Rural</strong>)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="table-success"></td>
						<td class="table-success"></td>
						<td class="table-success"></td>
						<td class="table-success"></td>
					</tr>
					<tr>
						<th scope="row" class="text-center" style="vertical-align: middle;">2.1</th>
						<td>Tarif gestionare deseuri reciclabile</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">104.63</td>
						<td class="text-center table-success" style="vertical-align: middle;">124.51</td>
					</tr>
					<tr>
						<th scope="row" class="text-center" style="vertical-align: middle;">2.2</th>
						<td>Tarif gestionare deseuri reziduale</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">251.67</td>
						<td class="text-center" style="vertical-align: middle;">299.49</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">260.63</td>
						<td class="text-center table-success" style="vertical-align: middle;">310.27</td>
					</tr>
					<tr>
						<th scope="row" class="text-center" style="vertical-align: middle;">2.3</th>
						<td>Tarif gestionare deseuri biodegradabile</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">x</td>
						<td class="text-center" style="vertical-align: middle;">211.61</td>
						<td class="text-center" style="vertical-align: middle;">251.82</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">x</td>
						<td class="text-center table-success" style="vertical-align: middle;">297.43</td>
						<td class="text-center table-success" style="vertical-align: middle;">353.94</td>
					</tr>
				</tbody>
			</table>
		</div>
		<hr />
		<div class="row align-items-center">
			<?php if (have_rows('flayere')): ?>
				<?php while (have_rows('flayere')):
					the_row(); ?>
					<div class="col-lg-2 col-md-6">
						<?php
						$img = get_sub_field('imagine_flayer'); // URL directly
						?>
						<a href="<?php echo esc_url($img); ?>" class="venobox" data-gall="flayere-gallery">
							<img src="<?php echo esc_url($img); ?>" alt="Flayer Image" class="img-fluid"
								style="width: 150px; height: auto;">
						</a>
					</div>
				<?php endwhile; ?>
			<?php else: ?>
				<p>No images found in 'flayere'.</p>
			<?php endif; ?>
		</div>
		<hr />
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6"><?php get_field('harta_garaj'); ?></div>
			<div class="col-lg-6 col-md-6"><?php get_field('harta_punct_lucru'); ?></div>
		</div>


	</div>



</div>

<?
get_footer();
?>
