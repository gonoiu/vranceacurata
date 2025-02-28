<?php
/**
 * Template Name: Articole presa
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page');
?>

<!--==================================================-->
<!-- Articole presa-->
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
                ?>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-box">
                            <div class="single-blog-thumb">
                                <img src="<?php echo $imagine; ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="<?php echo $link; ?>" target="_blank"><?php echo $titlu; ?> ...</a>
                                <p>Sursa: <?php echo $sursa; ?>
                                <?php if(!empty($data)): ?>
                                    / <?php echo $data; ?>
                                <?php endif;?></p>
                            </div>
                            <div class="blog-arthor">
                                <div class="blog-author-title">
                                    <h6><span>ADI</span><a href="<?php echo $link; ?>" target="_blank">Vezi Stire ...</h6></a>
                                </div>
                                <div class="blog-button">
                                    <a href="<?php echo $link; ?>" target="_blank">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile;?>
            <?php endif;?>
			<!-- <div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home1/blog-1.jpg" alt="">
					</div>
					<div class="blog-content">
						<a href="#">Top 10 Recycling tips for Environment</a>
						<p>Competently cultivate worldwide to e-tailers professionally engineer high</p>
					</div>
			       <div class="blog-arthor">
						<div class="blog-author-title">
							<h6><span>J</span>John D. Alexon</h6>
						</div>
						<div class="blog-button">
							<a href="#"><i class="bi bi-arrow-right-short"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home1/blog-2.jpg" alt="">
					</div>
					<div class="blog-content">
						<a href="#">How Every Individual Can Make a Difference</a>
						<p>Competently cultivate worldwide to e-tailers professionally engineer high</p>
					</div>
			       <div class="blog-arthor">
						<div class="blog-author-title">
							<h6><span>A</span>Anjelina Watson</h6>
						</div>
						<div class="blog-button">
							<a href="#"><i class="bi bi-arrow-right-short"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home1/blog-3.jpg" alt="">
					</div>
					<div class="blog-content">
						<a href="#">Innovations in Renewable Energy Technology</a>
						<p>Competently cultivate worldwide to e-tailers professionally engineer high</p>
					</div>
			       <div class="blog-arthor">
						<div class="blog-author-title">
							<h6><span>D</span>David Watson</h6>
						</div>
						<div class="blog-button">
							<a href="#"><i class="bi bi-arrow-right-short"></i></a>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home1/blog-4.jpg" alt="">
					</div>
					<div class="blog-content">
						<a href="#">Completely Leverage Existing Customer Directed</a>
						<p>Competently cultivate worldwide to e-tailers professionally engineer high</p>
					</div>
			       <div class="blog-arthor">
						<div class="blog-author-title">
							<h6><span>M</span>Masrafi</h6>
						</div>
						<div class="blog-button">
							<a href="#"><i class="bi bi-arrow-right-short"></i></a>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home1/blog-5.jpg" alt="">
					</div>
					<div class="blog-content">
						<a href="#">Progressively Syndicate Vista Seamless Natural</a>
						<p>Competently cultivate worldwide to e-tailers professionally engineer high</p>
					</div>
			       <div class="blog-arthor">
						<div class="blog-author-title">
							<h6><span>H</span>Hasan Kaku</h6>
						</div>
						<div class="blog-button">
							<a href="#"><i class="bi bi-arrow-right-short"></i></a>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home1/blog-6.jpg" alt="">
					</div>
					<div class="blog-content">
						<a href="#">Dramatically Architect new model before flexible</a>
						<p>Competently cultivate worldwide to e-tailers professionally engineer high</p>
					</div>
			       <div class="blog-arthor">
						<div class="blog-author-title">
							<h6><span>A</span>Alex Song</h6>
						</div>
						<div class="blog-button">
							<a href="#"><i class="bi bi-arrow-right-short"></i></a>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Articole presa -->
<!--==================================================-->



<?php
    get_footer();
?>