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
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Careers at RR Engineers</h4>
                <h1 class="display-6 mb-4">Grow With Our Expert Team</h1>
                <p class="mb-0">We’re on the lookout for skilled and driven professionals in HVAC, Ducting, and MEP Projects. Join us to build sustainable infrastructure for tomorrow.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/service-1.jpg" class="career-img-fluid w-100" alt="Ducting Site Supervisor">
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
                                Supervise ducting project execution with 3–6 years experience. Knowledge of PAL ducting and on-site installation a must.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Ducting Site Supervisor">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/service-2.jpg" class="career-img-fluid w-100" alt="HVAC Project Manager">
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
                                6+ years experience in large-scale HVAC projects. Capable of managing timelines, teams, and technical documentation.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="HVAC Project Manager">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/service-3.jpg" class="career-img-fluid w-100" alt="Junior HVAC Draughtsman">
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
                                Freshers with AutoCAD knowledge and a basic understanding of HVAC systems are welcome to apply.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Junior HVAC Draughtsman">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/service-4.jpg" class="career-img-fluid w-100" alt="Project Billing Executive">
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
                                Responsible for billing & documentation of MEP projects. Experience in BOQ, vendor bills & GST invoicing preferred.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Project Billing Executive">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/service-5.jpg" class="career-img-fluid w-100" alt="Site Safety Officer">
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
                                Ensure safety protocols on-site. Certification in industrial safety and experience in HVAC or ducting projects required.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Site Safety Officer">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/service-6.jpg" class="career-img-fluid w-100" alt="Procurement & Logistics">
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
                                Manage materials, vendor follow-up, and site delivery for MEP supplies. 2–5 years relevant experience preferred.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Procurement & Logistics">Apply Now</button>
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
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <form id="applicationForm">
                        <div class="row g-3">
                            <!-- Position Name (autofilled) -->
                            <div class="col-12">
                                <input type="text" class="form-control border-0" id="positionApplied" name="position" readonly style="height: 55px;">
                            </div>
                            <!-- Name -->
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" required style="height: 55px;">
                            </div>
                            <!-- Email -->
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" required style="height: 55px;">
                            </div>
                            <!-- Phone -->
                            <div class="col-12 col-sm-6">
                                <input type="tel" class="form-control border-0" placeholder="Your Phone Number" required style="height: 55px;">
                            </div>
                            <!-- Resume Upload -->
                            <div class="col-12 col-sm-6">
                                <input type="file" class="form-control border-0" accept=".pdf" required style="height: 55px;">
                            </div>
                            <!-- Message -->
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="4" placeholder="Why should we hire you?"></textarea>
                            </div>
                            <!-- Submit -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Application</button>
                            </div>
                        </div>
                    </form>
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
                <div class="bg-light text-center p-1 px-lg-5">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="tel" class="form-control border-0" placeholder="Your Phone Number" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <!-- Dropdown field added here -->
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected disabled>Select Service Type</option>
                                    <option value="ducting">Pre-Insulated Ducting</option>
                                    <option value="hvac">HVAC System</option>
                                    <option value="cnc">CNC Fabrication</option>
                                    <option value="ventilation">Ventilation Project</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5"
                                    placeholder="How can we help you? (e.g., ducting project, insulation, ventilation design)"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->





<?php
// get_sidebar();
get_footer();
