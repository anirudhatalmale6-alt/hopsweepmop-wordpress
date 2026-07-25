<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$uri  = get_template_directory_uri();
$slug = is_front_page() ? 'home' : ( is_page() ? get_post_field( 'post_name', get_queried_object_id() ) : '' );
function hsm_active( $s, $slug ) { return $s === $slug ? ' class="active"' : ''; }
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="topbar"><div class="wrap">
  <div>Office: <b>+971 4 876 7588</b> &nbsp;·&nbsp; Mobile &amp; WhatsApp: <b>+971 55 985 8136</b></div>
  <div class="soc"><a href="#">📘</a><a href="#">📸</a><a href="#">▶️</a><a href="#">✉️</a></div>
</div></div>

<header class="site"><div class="wrap">
  <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $uri ); ?>/assets/logo.gif" alt="Hop Sweep Mop Cleaning Services LLC"></a>
  <nav class="menu">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo hsm_active( 'home', $slug ); ?>>Home</a>
    <a href="<?php echo esc_url( home_url( '/cleaning-services.html' ) ); ?>"<?php echo hsm_active( 'cleaning-services', $slug ); ?>>Cleaning Services</a>
    <a href="<?php echo esc_url( home_url( '/cleaning-pricing.html' ) ); ?>"<?php echo hsm_active( 'cleaning-pricing', $slug ); ?>>Pricing</a>
    <a href="<?php echo esc_url( home_url( '/about-cleaning.html' ) ); ?>"<?php echo hsm_active( 'about-cleaning', $slug ); ?>>About Us</a>
    <a href="<?php echo esc_url( home_url( '/contact-cleaning.html' ) ); ?>"<?php echo hsm_active( 'contact-cleaning', $slug ); ?>>Contact Us</a>
    <a href="<?php echo esc_url( home_url( '/contact-cleaning.html' ) ); ?>" class="navbtn">Book Now</a>
  </nav>
</div></header>
