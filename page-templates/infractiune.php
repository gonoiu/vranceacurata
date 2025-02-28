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
        <form id="contactForm" enctype="multipart/form-data" class="needs-validation" novalidate>
            <h2 class="text-center mb-4">Anunta o Infractiune</h2>
            <div class="mb-3">
                <label for="name" class="form-label">Numele tău</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Introdu numele tău" required>
                <div class="invalid-feedback">Te rugăm să introduci numele tău.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresa de email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Introdu adresa ta de email" required>
                <div class="invalid-feedback">Te rugăm să introduci o adresă de email validă.</div>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subiect</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Introdu subiectul mesajului">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mesaj</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Scrie mesajul tău aici..." required></textarea>
                <div class="invalid-feedback">Te rugăm să introduci un mesaj.</div>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Încarcă imagini (maxim 6)</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
                <small class="form-text text-muted">Poți încărca până la 6 imagini.</small>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Trimite Mesaj</button>
            </div>
            <div id="responseMessage" class="mt-4"></div>
        </form>
        
    </div>
    <br/>
<?php
    get_footer(); 
?>