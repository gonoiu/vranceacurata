<!--==================================================-->
<!-- Start Echofy Breadcumb Area -->
<!--==================================================-->
<?php
	$image = get_field('banner_pagini'); 
?>

<div class="breadcumb-area" style="background-image: url( <?php echo esc_url($image['url']); ?> )">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 text-center">
				<div class="breadcumb-content">
					<div class="breadcumb-title">
						<h4><?php the_title(); ?></h4>
					</div>
					<!-- <ul>
						<li>
							<a href="/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/inner-images/breadcumb-text-shape.png" alt="">Acasa
							</a>
						</li>
						<li><?php the_title(); ?></li>
					</ul> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Breadcumb Area -->
<!--==================================================-->
