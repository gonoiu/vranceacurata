<?php
/**
 * Template Name: Stiri
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

            <?php if(have_rows('comunicate_presa')):?>
                <?php while(have_rows('comunicate_presa')): the_row();
                    $titlu = get_sub_field('titlu');
                    $imagine = get_sub_field('imagine');
                    $link = get_sub_field('link');
                    $data = get_sub_field('data');
                    $sursa = get_sub_field('sursa_stire');
					$fisier = get_sub_field('fisier');
                ?>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-box">
							<?php if(!empty($fisier)) :?>
								<a href="<?php echo $fisier; ?>">
									<div class="single-blog-thumb">
										<img src="<?php echo $imagine; ?>" alt="">
									</div>
								</a>
							<?php endif;?>

							<?php if(!empty($link)) :?>
								<a href="<?php echo $link; ?>">
									<div class="single-blog-thumb">
										<img src="<?php echo $imagine; ?>" alt="">
									</div>
								</a>
							<?php endif;?>

                            <div class="blog-content">
                                <a href="<?php echo $link; ?>" target="_blank"><?php echo $titlu; ?> ...</a>
                                <p>Sursa: <?php echo $sursa; ?>
                                <?php if(!empty($data)): ?>
                                    / <?php echo $data; ?>
                                <?php endif;?></p>
                            </div>
                            <div class="blog-arthor">
                                
								<?php if(!empty($link)) :?>
									<div class="blog-author-title">
										<h6><span>ADI</span><a href="<?php echo $link; ?>" target="_blank">Vezi Stire ...</h6></a>
									</div>
									<div class="blog-button">
										<a href="<?php echo $link; ?>" target="_blank">
											<i class="bi bi-arrow-right-short"></i>
										</a>
									</div>
								<?php endif;?>

								<?php if(!empty($fisier)) :?>
									<div class="blog-author-title">
										<h6><span>ADI</span><a href="<?php echo $fisier; ?>" target="_blank">Vezi Stire ...</h6></a>
									</div>
									<div class="blog-button">
										<a href="<?php echo $fisier; ?>" target="_blank">
											<i class="bi bi-arrow-right-short"></i>
										</a>
									</div>
								<?php endif;?>
                            </div>
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