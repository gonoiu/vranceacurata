<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

// Options ACF.
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}

add_action( 'acf/init', 'set_acf_settings' );
function set_acf_settings() {
    acf_update_setting( 'enable_shortcode', false );
}

add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );

function enqueue_venobox() {
    // Enqueue Venobox CSS
    wp_enqueue_style('venobox-css', 'https://cdn.jsdelivr.net/npm/venobox@2.0.0/venobox.min.css');

    // Enqueue jQuery if not already loaded
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }

    // Enqueue Venobox JS
    wp_enqueue_script('venobox-js', 'https://cdn.jsdelivr.net/npm/venobox@2.0.0/venobox.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_venobox');
function enqueue_custom_scripts() {
    wp_enqueue_script(
        'custom-js',
		get_stylesheet_directory_uri()."/assets/assets/js/custom.js", // Locația fișierului custom.js
        ['jquery'], // Dependență de jQuery
        null,
        true
    );

    // Transmite URL-ul admin-ajax.php către JavaScript
    wp_localize_script('custom-js', 'ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function handle_contact_form_submission() {
    // Verifică dacă este o solicitare validă
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        // Salvează fișierele încărcate
        $attachments = [];
        if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                $file = $_FILES['images'];
                $upload = wp_handle_upload(
                    [
                        'name' => $file['name'][$key],
                        'type' => $file['type'][$key],
                        'tmp_name' => $file['tmp_name'][$key],
                        'error' => $file['error'][$key],
                        'size' => $file['size'][$key],
                    ],
                    ['test_form' => false]
                );

                if (!isset($upload['error'])) {
                    $attachments[] = $upload['file'];
                }
            }
        }

        // Trimite emailul
        $to = get_option('admin_email'); // Trimite către emailul administratorului
        $email_subject = "Formular de Contact: " . $subject;
        $email_body = "Nume: $name\nEmail: $email\n\nMesaj:\n$message";

        $headers = ['Content-Type: text/plain; charset=UTF-8'];

        $mail_sent = wp_mail($to, $email_subject, $email_body, $headers, $attachments);

        // Răspuns AJAX
        if ($mail_sent) {
            wp_send_json_success('Mesajul a fost trimis cu succes.');
        } else {
            wp_send_json_error('A apărut o eroare la trimiterea mesajului.');
        }
    }

    wp_die();
}
add_action('wp_ajax_handle_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_nopriv_handle_contact_form', 'handle_contact_form_submission');

function enqueue_venobox_assets() {
    wp_enqueue_style('venobox-css', 'https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.1/venobox.min.css');
    wp_enqueue_script('venobox-js', 'https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.1/venobox.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_venobox_assets');
