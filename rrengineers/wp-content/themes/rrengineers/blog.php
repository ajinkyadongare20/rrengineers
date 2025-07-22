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
    <div class="container py-6 px-3 px-lg-0">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-6 text-uppercase mb-4">Latest <span class="text-primary">Insights</span> From Our Projects</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/blog-1.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="<?php bloginfo('template_directory'); ?>/img/user.jpg" width="35" height="35" alt="">
                                <span>Admin</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>04 Jul, 2025</span>
                            </div>
                        </div>
                        <h4 class="mb-3">How PAL Ducting is Changing Industrial HVAC Efficiency</h4>
                        <a class="text-uppercase fw-bold" href="#">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/blog-2.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="<?php bloginfo('template_directory'); ?>/img/user.jpg" width="35" height="35" alt="">
                                <span>Admin</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>27 Jun, 2025</span>
                            </div>
                        </div>
                        <h4 class="mb-3">Top 5 Challenges in Duct Fabrication — And How We Solve Them</h4>
                        <a class="text-uppercase fw-bold" href="#">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/blog-3.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="<?php bloginfo('template_directory'); ?>/img/user.jpg" width="35" height="35" alt="">
                                <span>Admin</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>18 Jun, 2025</span>
                            </div>
                        </div>
                        <h4 class="mb-3">Smart Construction: Integrating Eco Panels for Sustainable Buildings</h4>
                        <a class="text-uppercase fw-bold" href="#">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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
