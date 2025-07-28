<?php
/**
 * The main template file
 * Template Name: Career
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
    <h1 class="display-3 text-uppercase text-white mb-3">Career</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
        <h6 class="text-white m-0 px-3">/</h6>
        <h6 class="text-uppercase text-white m-0">Career</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- Careers Start -->
<div class="container-fluid careers py-5">
    <div class="container py-5">
        <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
            style="max-width: 800px;">
            <h4 class="text-primary">Careers at RR Engineers</h4>
            <h1 class="display-6 mb-4">Grow With Our Expert Team</h1>
            <p class="mb-0">We’re on the lookout for skilled and driven professionals in HVAC, Ducting, and MEP
                Projects. Join us to build sustainable infrastructure for tomorrow.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/carousel/carousel-1.jpg"
                            class="career-img-fluid w-100" alt="Ducting Site Supervisor">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Ducting Site Supervisor</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Project Locations, India</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Supervise ducting project execution with 3–6 years experience. Knowledge of PAL ducting and
                            on-site installation a must.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Ducting Site Supervisor">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/carousel/carousel-2.jpg"
                            class="career-img-fluid w-100" alt="HVAC Project Manager">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">HVAC Project Manager</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune / Across India</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            6+ years experience in large-scale HVAC projects. Capable of managing timelines, teams, and
                            technical documentation.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn" data-position="HVAC Project Manager">Apply
                            Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/carousel/carousel-3.jpg"
                            class="career-img-fluid w-100" alt="Junior HVAC Draughtsman">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Junior HVAC Draughtsman</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune, India</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Freshers with AutoCAD knowledge and a basic understanding of HVAC systems are welcome to
                            apply.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Junior HVAC Draughtsman">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/carousel/carousel-3.jpg"
                            class="career-img-fluid w-100" alt="Project Billing Executive">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Project Billing Executive</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Head Office – Pune</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Responsible for billing & documentation of MEP projects. Experience in BOQ, vendor bills &
                            GST invoicing preferred.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Project Billing Executive">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/carousel/carousel-2.jpg"
                            class="career-img-fluid w-100" alt="Site Safety Officer">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Site Safety Officer</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Project Sites</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Ensure safety protocols on-site. Certification in industrial safety and experience in HVAC
                            or ducting projects required.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Site Safety Officer">Apply
                            Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/carousel/carousel-1.jpg"
                            class="career-img-fluid w-100" alt="Procurement & Logistics">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Procurement & Logistics</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune Office</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Manage materials, vendor follow-up, and site delivery for MEP supplies. 2–5 years relevant
                            experience preferred.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Procurement & Logistics">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Careers End -->


<!-- Application Modal Start -->
<div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="applicationModalLabel">Apply for Position</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <?php echo do_shortcode('[contact-form-7 id="f77318b" title="Contact form 1 - Career"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Application Modal End -->


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