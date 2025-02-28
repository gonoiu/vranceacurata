<?php
/**
 * Template Name: Documente
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
                        <div class="faq-singular">
                            <?php if(have_rows('documente') ):?>
                                <?php while(have_rows('documente') ): the_row();?>
                                    <h2 class="faq-question">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt="">
                                        <?php get_sub_field('an_documente'); ?>aici trebuie sa apara anul 2024
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
                                                    <?php if(get_row_layout() == 'documente'):
                                                        $documente = get_sub_field('documente');
                                                    ?>
                                                        <?php foreach($documente as $document):?>
                                                            <tr>
                                                                <th>x</th>
                                                                <td><?php echo $document['data_document']; ?></td>
                                                                <td><?php echo $document['titlu_document']; ?></td>
                                                                <td>
                                                                    <?php if($document['link_document']):?>
                                                                        <a href="<?php echo $document['link_document']; ?>" target="_blank">
                                                                            <i class="fa fa-2x fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                                        </a>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                    </tbody>
                                                </table>
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
<!--==================================================-->
<!-- End Documente -->
<!--==================================================-->


<?php get_footer(); ?>