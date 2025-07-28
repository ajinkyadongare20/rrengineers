<?php
/**
 * The main template file
 * Template Name: Blog
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
    <h1 class="display-3 text-uppercase text-white mb-3">Blog</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
        <h6 class="text-white m-0 px-3">/</h6>
        <h6 class="text-uppercase text-white m-0">Blog</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- Blog Start -->
<div class="container-fluid py-6 px-3 px-lg-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-6 text-uppercase mb-4">Latest <span class="text-primary">Insights</span> From Our Projects
        </h1>
    </div>
    <div class="row g-4 g-lg-5">
        <div class="col-lg-4 col-md-6">
            <div class="bg-light">
                <img class="img-fluid blog-img"
                    src="<?php bloginfo('template_directory'); ?>/img/blog/blog-1 banner.jpg"
                    alt="Kingspan PalDuct Technology">
                <div class="p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2"
                                src="<?php bloginfo('template_directory'); ?>/img/about.jpg" width="35" height="35"
                                alt="Admin Avatar">
                            <span>Admin</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>04 Jul, 2025</span>
                        </div>
                    </div>
                    <h4 class="mb-3">What is Kingspan PalDuct Technology?</h4>
                    <a class="text-uppercase fw-bold" href="<?php echo site_url('/blog-1'); ?>">Read More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="bg-light">
                <img class="img-fluid blog-img"
                    src="<?php bloginfo('template_directory'); ?>/img/blog/blog-2 banner.jpg" alt="Alpha Ducts Blog">
                <div class="p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2"
                                src="<?php bloginfo('template_directory'); ?>/img/about.jpg" width="35" height="35"
                                alt="Admin">
                            <span>Admin</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>27 Jun, 2025</span>
                        </div>
                    </div>
                    <h4 class="mb-3">ALPHA DUCTS: Growth, Innovation & Global Certifications</h4>
                    <a class="text-uppercase fw-bold" href="<?php echo site_url('/blog-2'); ?>">Read More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="bg-light">
                <img class="img-fluid blog-img"
                    src="<?php bloginfo('template_directory'); ?>/img/blog/blog-3 banner.jpg"
                    alt="Alpha Ducts PIR Panels">
                <div class="p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2"
                                src="<?php bloginfo('template_directory'); ?>/img/about.jpg" width="35" height="35"
                                alt="Admin">
                            <span>Admin</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>18 Jun, 2025</span>
                        </div>
                    </div>
                    <h4 class="mb-3">Why ALPHA-PIR Duct Systems Outperform Traditional Metal Ducts</h4>
                    <a class="text-uppercase fw-bold" href="<?php echo site_url('/blog-3'); ?>">Read More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Blog End -->


<!-- Blog FAQs Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs – Insights from Our Blog</h4>
                <h1 class="display-4 mb-4">Readers Frequently Ask</h1>
                <p class="mb-4">
                    These FAQs address common queries inspired by our blog topics, including ducting innovations, HVAC
                    trends,
                    ventilation design strategies, and MEPF execution best practices.
                </p>
                <a class="btn btn-primary py-3 px-5" href="#contact">Still Have Questions?</a>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionBlogFAQ">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blogOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBlogOne" aria-expanded="true"
                                    aria-controls="collapseBlogOne">
                                    Q: Why is PAL ducting preferred in modern projects?
                                </button>
                            </h2>
                            <div id="collapseBlogOne" class="accordion-collapse collapse show" aria-labelledby="blogOne"
                                data-bs-parent="#accordionBlogFAQ">
                                <div class="accordion-body">
                                    A: PAL ducting offers excellent thermal insulation, is lightweight,
                                    corrosion-resistant, and speeds up on-site installation—making it ideal for
                                    energy-efficient and space-constrained environments.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blogTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBlogTwo" aria-expanded="false"
                                    aria-controls="collapseBlogTwo">
                                    Q: What are key factors in efficient HVAC installation?
                                </button>
                            </h2>
                            <div id="collapseBlogTwo" class="accordion-collapse collapse" aria-labelledby="blogTwo"
                                data-bs-parent="#accordionBlogFAQ">
                                <div class="accordion-body">
                                    A: Proper duct routing, accurate load calculations, leak testing, and expert
                                    commissioning are essential to ensure long-term HVAC efficiency and indoor air
                                    quality.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blogThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBlogThree" aria-expanded="false"
                                    aria-controls="collapseBlogThree">
                                    Q: How does CNC fabrication help improve ducting precision?
                                </button>
                            </h2>
                            <div id="collapseBlogThree" class="accordion-collapse collapse" aria-labelledby="blogThree"
                                data-bs-parent="#accordionBlogFAQ">
                                <div class="accordion-body">
                                    A: CNC machines ensure tight tolerances, clean cuts, and consistent dimensions,
                                    reducing on-site rework and improving airflow performance in fabricated duct
                                    systems.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blogFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBlogFour" aria-expanded="false"
                                    aria-controls="collapseBlogFour">
                                    Q: What’s involved in a turnkey MEPF project?
                                </button>
                            </h2>
                            <div id="collapseBlogFour" class="accordion-collapse collapse" aria-labelledby="blogFour"
                                data-bs-parent="#accordionBlogFAQ">
                                <div class="accordion-body">
                                    A: Turnkey MEPF involves complete planning, procurement, installation, and
                                    certification of mechanical, electrical, plumbing, and fire systems—executed by one
                                    accountable contractor for smoother project flow.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blogFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBlogFive" aria-expanded="false"
                                    aria-controls="collapseBlogFive">
                                    Q: How do I choose the right ventilation design?
                                </button>
                            </h2>
                            <div id="collapseBlogFive" class="accordion-collapse collapse" aria-labelledby="blogFive"
                                data-bs-parent="#accordionBlogFAQ">
                                <div class="accordion-body">
                                    A: Consider factors like room size, air changes per hour (ACH), contaminant load,
                                    airflow direction, and energy savings. Our team uses CFD modeling and site audits to
                                    design optimal ventilation plans.
                                </div>
                            </div>
                        </div>

                    </div> <!-- end accordion -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog FAQs End -->


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