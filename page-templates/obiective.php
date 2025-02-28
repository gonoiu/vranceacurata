<?php
/**
 * Template Name: Obiective
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page');

?>

<div class="about-area home-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12">
			<h3><?php the_title(); ?></h3>
			<p class="about-desc">
				<?php the_content(); ?>
			</p>   

			</div>
		</div>	
	</div>
</div>


<?php
    get_footer(); 
?>
