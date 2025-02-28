<?php
/**
 * Template Name: Documente Hotarari
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
						<h3><?php the_title(); ?></h3>
					</div>	

                    <div class="faqs-container">

                        <!--2025-->
                        <div class="faq-singular active">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2025
                            </h2>
                            <div class="faq-answer">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2025
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2025) {
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2025-->

                        <!--2024-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2024
                            </h2>
                            <div class="faq-answer">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');

                                                    // filtru 2024
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2024) {
                                                        
                                                   
                                                    
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <!-- <a href="<?php echo $fisier; ?>" target="_blank"> -->
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                <!-- </a> -->
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>			
                        <!--2024-->

                        <!--2023-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2023
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');

                                                    // filtru 2023
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2023) {
                                                        
                                                   
                                                    
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <!-- <a href="<?php echo $fisier; ?>" target="_blank"> -->
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                <!-- </a> -->
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2023-->

                        <!--2022-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2022
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2022
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2022) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2022-->

                        <!--2021-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2021
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2021
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2021) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2021-->

                        <!--2020-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2020
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2020
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2020) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2020-->

                        <!--2019-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2019
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2019
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2019) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--2019-->	

                        <!--2018-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2018
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2018
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2018) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2018-->

                        <!--2017-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2017
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2017
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2017) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2017-->

                        <!--2016-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2016
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2016
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2016) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2016-->

                        <!--2015-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2015
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2015
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2015) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2015-->

                        <!--2011-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2011
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2011
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2011) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2011-->

                        <!--2009-->
                        <div class="faq-singular">
                            <h2 class="faq-question">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                2009
                            </h2>
                            <div class="faq-answer" style="display: none;">
                                <div class="desc">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Titlu</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('documente-hotarari')):?>
                                                <?php while(have_rows('documente-hotarari')): the_row();
                                                    $titlu = get_sub_field('titlu_document');
                                                    $data = get_sub_field('data_document');
                                                    $fisier = get_sub_field('fisier_document');
                                                    // filtru 2009
                                                    $an = explode(".",$data)[2];
                                                    if($an == 2009) {  
                                                ?>
                                                    <tr>
                                                        <th></th>
                                                        <td><?php if(!empty($data)):  ?><?php echo $data; ?><?php endif;?></td>
                                                        <td><?php if(!empty($titlu)):  ?><?php echo $titlu; ?><?php endif;?></td>
                                                        <td>
                                                            <?php if(!empty($fisier)):  ?>
                                                                <a href="<?php echo $fisier; ?>" target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                </a>
                                                            <?php endif;?>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    }
                                            endwhile;?>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
                        <!--2009-->
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
