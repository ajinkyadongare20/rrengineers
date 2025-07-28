<?php
/**
 * The main template file
 * Template Name: Awards
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rrengineers
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Awards</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a href="<?php echo home_url(); ?>">Home</a></h6>
        <h6 class="text-white m-0 px-3">/</h6>
        <h6 class="text-uppercase text-white m-0">Awards</h6>
    </div>
</div>
<!-- Page Header End -->


<!-- Awards & Recognition Section Start -->
<div class="container px-3 px-lg-0">
    <div class="py-5">
        <h2 class="text-dark fw-bold text-start mb-4 mb-lg-5">Awards & Recognition</h2>

        <div class="row g-4 g-lg-5 portfolio-container">
            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award1.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: fill;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">PrimaVerse</p>
                        <span class="text-body"><i class="fa fa-industry text-primary me-2"></i>Recognition for early
                            office delivery – 30,000 SQFT in just 45 days.</span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award2.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">ISHRAE Pune</p>
                        <span class="text-body"><i class="fa fa-flask text-primary me-2"></i>Sports Chair appreciation
                            for Mr. R Shashidhar (2024–25).</span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award3.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">ACR Trendz 2017</p>
                        <span class="text-body"><i class="fa fa-hotel text-primary me-2"></i>Recognition as a Table
                            Partner during ISHRAE's National Event.</span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award4.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">25 Years of Service</p>
                        <span class="text-body"><i class="fa fa-hotel text-primary me-2"></i> Honoring Mr. Shashidhar
                            for 25 years in the HVAC&R industry (2024).</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Awards & Recognition Section End -->


<!-- Contact / Quote Section Start -->
<div class="container-fluid py-6 px-5">
    <div class="row gx-5">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-4">
                <h1 class="display-5 text-uppercase mb-4">
                    Request A <span class="text-primary">Call Back</span>
                </h1>
            </div>
            <p class="mb-5">
                Looking for expert solutions in Pre-Insulated Ducting, HVAC systems, CNC Fabrication, or Ventilation Projects?
                Fill out the form and our team will get in touch to discuss your project and offer the best service and pricing options.
            </p>
            <a class="btn btn-primary py-3 px-5" href="<?php echo site_url('/contact'); ?>">Contact Us</a>
        </div>

        <div class="col-lg-8">
            <?php echo do_shortcode('[contact-form-7 id="a32a9d4" title="Contact form 2 - Quote"]'); ?>
        </div>
    </div>
</div>
<!-- Contact / Quote Section End -->

<?php get_footer(); ?>