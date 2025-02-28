<?php
/**
 * Template Name: Calendar Colectare
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page');
?>

<div class="faqs-area inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
                <div class="faqs-container">
                    <?php if(have_rows('calendare_colectare')):?>
                        <?php while(have_rows('calendare_colectare')): the_row();
                            $localitate = get_sub_field('localitate');
                            $img = get_sub_field('imagine');
                        ?>
                            <?php if(!empty($img)): ?>
                                
                                <div class="faq-singular">
                                    <h2 class="faq-question"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home2/shape.png" alt=""><?php echo $localitate; ?></h2>
                                    
                                    <div class="faq-answer">
                                        <div class="row">
                                            <?php if(have_rows('traseu')):?>
                                                <?php while(have_rows('traseu')): the_row();
                                                    $titlu = get_sub_field('titlu');
                                                    $fisier = get_sub_field('fisier');
                                                ?>
                                                    <?php if($fisier): ?>
                                                        <div class="col-lg-2 col-md-4 col-sm-6 col text-center">
                                                            <p class="text-center"><?php echo $titlu; ?></p>
                                                            <a href="<?php echo $fisier['url']; ?>" target="_blank">
                                                                <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #4aae44"></i>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endwhile;?>
                                            <?php endif;?>
                                        </div>
                                        <div class="desc center">
                                                <img src="<?php echo $img; ?>" alt="" width="100%" height="auto">
                                        </div>
                                    </div>
                                </div>	

                            <?php endif; ?>
                            
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
			</div>
		</div>
	</div>
</div>


<?php
    get_footer();
?>