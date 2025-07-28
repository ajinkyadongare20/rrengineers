<?php
/**
 * The main template file
 * Template Name: Gallery
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
    <h1 class="display-3 text-uppercase text-white mb-3">Gallery</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
        <h6 class="text-white m-0 px-3">/</h6>
        <h6 class="text-uppercase text-white m-0">Gallery</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- Our Videos Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h3>Our Videos</h3>
            <p>
                Explore our project showcases, ducting solutions, and engineering excellence – RR Engineers and
                Contractors is committed to quality, innovation, and precision in every build.
            </p>
        </div>
    </div>

    <!-- Video Grid -->
    <div class="row mt-4 g-4">

        <!-- Google Drive Video 1 -->
        <div class="col-md-6">
            <div>
                <iframe src="https://drive.google.com/file/d/1_7wK_XXDlqM9I5fx3qOX2gNHInEN_9xn/preview"
                    title="Alpha Ducts Video" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Google Drive Video 2 -->
        <div class="col-md-6">
            <div>
                <iframe src="https://drive.google.com/file/d/1uuzzilOgxWqsX5TtNVJq0Kw4Jpqw1zNw/preview"
                    title="PIR and Phenolic Fire Test Video" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Google Drive Video 3 -->
        <div class="col-md-6">
            <div>
                <iframe src="https://drive.google.com/file/d/1gQAvKw-eWc6ZBdFf9OAVaGFH5c3HCE4V/preview"
                    title="Waterproof Tapes Video" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Google Drive Video 4 -->
        <div class="col-md-6">
            <div>
                <iframe src="https://drive.google.com/file/d/12aRfM-wrQfBTzKLv3VbzCDp7ZZbmLlfB/preview"
                    title="RR Engineers Video 4" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Google Drive Video 5 -->
        <div class="col-md-6">
            <div>
                <iframe src="https://drive.google.com/file/d/1m0eos1eCkrgK7GV4VDRUPSeorwtCW7et/preview"
                    title="RR Engineers Video 5" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Google Drive Video 6 -->
        <div class="col-md-6">
            <div>
                <iframe src="https://drive.google.com/file/d/1DQ5svHkzGE2bDSlTIAzVJ2VUAl8Ncbfz/preview"
                    title="RR Engineers Video 6" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Google Drive Video 7 -->
        <div class="col-md-6">
            <div>
                <iframe src="https://drive.google.com/file/d/1OCECittKvuTYCoVEO2ap8zVf4152frU3/preview"
                    title="RR Engineers Video 7" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- End Videos Section -->



<!-- Appointment Start -->
<div class="container-fluid py-6 px-5">
    <div class="row gx-5">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-4">
                <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span></h1>
            </div>
            <p class="mb-5">
                Looking for expert solutions in Pre-Insulated Ducting, HVAC systems, CNC Fabrication, or Ventilation
                Projects?
                Fill out the form and our team will get in touch to discuss your project and offer the best service and
                pricing options.
            </p>
            <a class="btn btn-primary py-3 px-5" href="<?php echo site_url('/contact'); ?>">Contact Us</a>
        </div>
        <div class="col-lg-8">
            <?php echo do_shortcode('[contact-form-7 id="a32a9d4" title="Contact form 2 - Quote"]'); ?>
        </div>
    </div>
</div>
<!-- Appointment End -->


<?php
// get_sidebar();
get_footer();