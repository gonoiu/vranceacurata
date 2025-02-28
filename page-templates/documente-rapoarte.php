<?php
/**
 * Template Name: Documente Rapoarte
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
<!-- Start Documente -->
<!--==================================================-->
<div class="faqs-area inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="faqs-left">
					<div class="section-title left">
						<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">VranceaCurata.Ro</h4>
						<h1><?php the_title(); ?></h1>
					</div>	
                    <div class="faqs-container">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Document</th>
                                    <th scope="col">Fisier</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(have_rows('documente-rapoarte')):?>
                                    <?php while(have_rows('documente-rapoarte')): the_row();
                                      /**
                                       * implementare afisare
                                       * extragem field
                                       * extragem valoarea 0 din array pentru fiecare camp in parte
                                       */
                                      $afisare = get_sub_field('field_675da536dfa58')[0];


                                        $titlu = get_sub_field('titlu_document');
                                        $fisier = get_sub_field('fisier_document');
                                        /** 
                                         * Conditia de afisare
                                         *  da / nu ca si valorea din variabila
                                         */
                                        if($afisare == 'da'){
                                    ?>
                                        <tr>
                                            <th></th>
                                            <td>
                                                <?php if(!empty($titlu)):  ?>
                                                    <?php echo $titlu; ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(!empty($fisier)):  ?>
                                                    <a href="<?php echo $fisier ;?>" target="_blank">
                                                        <i class="fa fa-2x fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>



                                    <?php

                                 
                                     }
                                        /**
                                     *  inchidem conditia de afisare
                                     */
                                 endwhile;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>		                 
                </div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Documente -->
<!--==================================================-->



<?php get_footer(); ?>
