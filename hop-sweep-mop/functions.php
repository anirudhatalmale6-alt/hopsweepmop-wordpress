<?php
/**
 * Hop Sweep Mop theme functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'HSM_BOOKING_EMAIL', 'info@hopsweepmop.com' );

/* ---------------------------------------------------------------------------
 * Theme setup
 * ------------------------------------------------------------------------- */
function hsm_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array( 'height' => 60, 'width' => 240, 'flex-height' => true, 'flex-width' => true ) );
	register_nav_menus( array( 'primary' => 'Primary Menu' ) );
}
add_action( 'after_setup_theme', 'hsm_setup' );

/* ---------------------------------------------------------------------------
 * Styles & fonts
 * ------------------------------------------------------------------------- */
function hsm_assets() {
	wp_enqueue_style( 'hsm-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'hsm-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'hsm_assets' );

/* ---------------------------------------------------------------------------
 * Preserve the exact .html page URLs (tied to the client's Google Ads).
 * Maps the 4 inner pages to /slug.html and 301-redirects the clean slug.
 * NOTE: after activating the theme, visit Settings > Permalinks once to flush.
 * ------------------------------------------------------------------------- */
function hsm_html_pages() {
	// slug => true
	return array(
		'cleaning-services' => true,
		'cleaning-pricing'  => true,
		'about-cleaning'    => true,
		'contact-cleaning'  => true,
	);
}

function hsm_rewrites() {
	foreach ( array_keys( hsm_html_pages() ) as $slug ) {
		add_rewrite_rule( '^' . preg_quote( $slug ) . '\.html$', 'index.php?pagename=' . $slug, 'top' );
	}
}
add_action( 'init', 'hsm_rewrites' );

// Output page links with the .html suffix.
function hsm_page_link( $link, $post_id ) {
	$post = get_post( $post_id );
	if ( $post && isset( hsm_html_pages()[ $post->post_name ] ) ) {
		return home_url( '/' . $post->post_name . '.html' );
	}
	return $link;
}
add_filter( 'page_link', 'hsm_page_link', 10, 2 );

// 301-redirect the clean slug (/cleaning-services) to the .html version.
function hsm_redirect_to_html() {
	if ( is_page() && ! is_front_page() ) {
		$slug = get_post_field( 'post_name', get_queried_object_id() );
		if ( isset( hsm_html_pages()[ $slug ] ) ) {
			$req = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';
			if ( strpos( $req, '.html' ) === false ) {
				wp_safe_redirect( home_url( '/' . $slug . '.html' ), 301 );
				exit;
			}
		}
	}
}
add_action( 'template_redirect', 'hsm_redirect_to_html' );

/* ---------------------------------------------------------------------------
 * Booking form -> email to the business (info@hopsweepmop.com).
 * Works with the built-in booking form on the Home and Contact pages.
 * ------------------------------------------------------------------------- */
function hsm_handle_booking() {
	if ( ! isset( $_POST['hsm_booking_nonce'] ) || ! wp_verify_nonce( $_POST['hsm_booking_nonce'], 'hsm_booking' ) ) {
		wp_safe_redirect( home_url( '/' ) );
		exit;
	}
	$f = function( $k ) { return isset( $_POST[ $k ] ) ? sanitize_text_field( wp_unslash( $_POST[ $k ] ) ) : ''; };

	$service  = $f( 'service' );
	$date     = $f( 'date' );
	$cleaners = $f( 'cleaners' );
	$materials= $f( 'materials' );
	$hours    = $f( 'hours' );
	$name     = $f( 'name' );
	$phone    = $f( 'phone' );
	$email    = sanitize_email( isset( $_POST['email'] ) ? wp_unslash( $_POST['email'] ) : '' );
	$notes    = isset( $_POST['notes'] ) ? sanitize_textarea_field( wp_unslash( $_POST['notes'] ) ) : '';

	$body  = "New cleaning booking request from the website:\n\n";
	$body .= "Service:   $service\n";
	$body .= "Date:      $date\n";
	$body .= "Cleaners:  $cleaners\n";
	if ( $materials ) $body .= "Materials: $materials\n";
	if ( $hours )     $body .= "Hours:     $hours\n";
	$body .= "\nName:   $name\n";
	$body .= "Phone:  $phone\n";
	$body .= "Email:  $email\n";
	if ( $notes ) $body .= "\nNotes:\n$notes\n";

	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	if ( is_email( $email ) ) $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';

	wp_mail( HSM_BOOKING_EMAIL, 'New booking request — ' . ( $service ? $service : 'Cleaning' ), $body, $headers );

	$back = wp_get_referer() ? wp_get_referer() : home_url( '/' );
	wp_safe_redirect( add_query_arg( 'booked', '1', $back ) );
	exit;
}
add_action( 'admin_post_nopriv_hsm_booking', 'hsm_handle_booking' );
add_action( 'admin_post_hsm_booking', 'hsm_handle_booking' );

/* Booking form <form> open tag helper */
function hsm_form_open() {
	echo '<form method="post" action="' . esc_url( admin_url( 'admin-post.php' ) ) . '">';
	echo '<input type="hidden" name="action" value="hsm_booking">';
	wp_nonce_field( 'hsm_booking', 'hsm_booking_nonce' );
}

/* Simple success banner after a booking is submitted */
function hsm_booking_notice() {
	if ( isset( $_GET['booked'] ) ) {
		return '<div style="background:#eefcec;border:1px solid #cdefc9;color:#1f7a2e;padding:12px 16px;border-radius:10px;margin-bottom:16px;font-weight:600;text-align:center">Thanks! Your booking request has been sent — we\'ll confirm shortly.</div>';
	}
	return '';
}
