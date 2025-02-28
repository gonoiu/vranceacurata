<?php
/**
 * Template Name: Infractiune
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page'); 

?>
    <style>
        /* Stilizare suplimentară */
        #contactForm {
            max-width: 600px; /* Maximă lățime pentru formular */
            margin: auto; /* Centrează formularul */
            /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  */
            padding: 20px; /* Spațiu interior */
            border-radius: 8px; /* Colțuri rotunjite */
            background-color: #ffffff; /* Fundal alb */
        }
    </style>
    <br/>
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="8e4f88f" title="Infractiune 1"]'); ?>
        
    </div>
    <br/>
<?php
    get_footer(); 
?>