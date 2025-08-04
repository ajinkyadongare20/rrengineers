<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rrengineers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <title>RREngineers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/index/logo-rrengineer.jpg" type="image/x-icon">

    <!-- Font Stylesheet Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory'); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet">

</head>

   <body>

   <!-- Navbar Start -->
   <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm py-2 px-3 px-lg-3">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0 justify-content-center">
        <a href="<?php echo site_url('/index'); ?>" class="navbar-brand d-flex align-items-center mx-auto ms-0 ms-lg-5">
            <img src="<?php bloginfo('template_directory'); ?>/img/rr_logo.png" alt="RR Engineers Logo" style="height: 60px;">
            <!-- <h1 class="m-0 fs-5 text-white">RREngineers & Contractors</h1> -->
        </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                 <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'menu-1',
                            'container'         => false,
                            'container_class'   => '',
                            'menu_class'        => 'navbar-nav ms-auto me-0',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'depth'             => 3,
                            'walker'            => new wp_bootstrap_navwalker()
                        ));
                    ?>
                <a href="<?php echo site_url('/quote'); ?>" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Full Screen Search End -->
    <div class="clearfix"></div>