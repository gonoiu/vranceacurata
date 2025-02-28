<?php
/**
 * Template Name: Containere
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
<!-- Strat Echofy About Area -->
<!--==================================================-->
<div class="about-area home-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="about-thumb">
                    <?php 
                        $image = the_post_thumbnail('');
                    ?>
                    <img src="<?php echo $image;?>" alt="<?php the_field('alt-image', 'options'); ?>">
				</div>
			</div>

			<div class="col-lg-6 col-md-12">
				<div class="about-right">
					<div class="section-title left">
						<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/home1/section-shape.png" alt="">ASOCIAȚIA DE DEZVOLTARE INTERCOMUNITARĂ</h4>
					
						<h1><?php the_title(); ?></h1>

                        
                        <h4>
                            In  
                            <?php
                                $culoare = get_field('culoare');
                                if( $culoare ): ?>
                                    <?php foreach( $culoare as $culori ): ?>
                                        <?php echo $culori; ?>
                                    <?php endforeach; ?>
                            <?php endif; ?>
                            se colecteaza:
                        </h4>
					</div>
				    <div class="about-text">
                        <?php if(have_rows('ce_punem')):?>
                            <?php while(have_rows('ce_punem')): the_row();
                                $text = get_sub_field('continut');
                            ?>
                                
                                    <li><i class="bi bi-check"></i><?php echo $text; ?></li>
                                
                            <?php endwhile;?>
                        <?php endif;?>
				    </div>
					<h3>Indrumari</h3>
				    <p class="about-desc">
                        <?php if(have_rows('indicatii')):?>
                            <?php while(have_rows('indicatii')): the_row();
                                $text = get_sub_field('continut');
                            ?>
                                
                                    <li><i class="bi bi-check"></i><?php echo $text; ?></li>
                                
                            <?php endwhile;?>
                        <?php endif;?>
                    </p>   
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy About Area -->
<!--==================================================-->


<?php
    get_footer();
?>

