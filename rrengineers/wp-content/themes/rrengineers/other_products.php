<?php
/**
 * The main template file
 * Template Name: Other Products
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
        <h1 class="display-3 text-uppercase text-white mb-3">Services</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Services</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    

    <!-- Services Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Text Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">End-to-End Ducting, Ventilation & HVAC Solutions</h1>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Expert Project Execution</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Certified Quality & Safety</h5>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">
                            RR Engineers & Contractors specializes in PAL ducting systems, HVAC installation, ventilation design, under-roof insulation, descaling, and turnkey fabrication projects. We deliver smart, energy-efficient, and space-optimized air management systems for industrial and commercial spaces. Our solutions are backed by skilled engineers, advanced tools, and a deep commitment to safety and timelines.
                        </p>
                        <div class="mt-4 pt-2 border-top">
                            <p class="fw-semibold mb-0">
                                Driven by precision, powered by expertise — we bring air management excellence to every space we serve.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Image Grid -->
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s"
                                src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s"
                                src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s"
                                src="<?php bloginfo('template_directory'); ?>/img/team-3.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s"
                                src="<?php bloginfo('template_directory'); ?>/img/team-4.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Solutions Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Solutions</div>
                <h1 class="mb-5">Our Solutions</h1>
            </div>
            <div class="row g-4">
                <!-- 1 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-wrench text-primary mb-4"></i>
                            <h5>PAL Ducting Solutions</h5>
                            <p>Advanced pre-insulated ducting systems ensuring clean air, energy efficiency, and fast-track installation.</p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-snowflake text-primary mb-4"></i>
                            <h5>HVAC Project Execution</h5>
                            <p>Complete HVAC installations including ventilation, insulation, cladding, commissioning solutions.</p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-industry text-primary mb-4"></i>
                            <h5>Fabrication & Installation</h5>
                            <p>Precision duct cutting, boxing, diffuser and damper fixing, canvas setup, and under-roof installations.</p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-check-circle text-primary mb-4"></i>
                            <h5>Duct Testing Services</h5>
                            <p>Leakage detection using smoke, pressure, and light tests for quality assurance and system integrity.</p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-wind text-primary mb-4"></i>
                            <h5>Ventilation Systems</h5>
                            <p>Installation of supply and exhaust systems, chimneys, and fresh air units for industrial environments.</p>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-fire text-primary mb-4"></i>
                            <h5>Hot & Cold Insulation</h5>
                            <p>Thermal insulation for HVAC systems using GI, PI, and cladding materials to enhance energy efficiency.</p>
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-flask text-primary mb-4"></i>
                            <h5>Descaling Chemical Cleaning</h5>
                            <p>Expert descaling solutions and supply of cleaning chemicals to ensure optimal HVAC system health.</p>
                        </div>
                    </div>
                </div>
                <!-- 8 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cogs text-primary mb-4"></i>
                            <h5>Turnkey HVAC Solutions</h5>
                            <p>Design-build plant ventilation and air management systems tailored for high-efficiency project delivery.</p>
                        </div>
                    </div>
                </div>
                <!-- 9 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="solution-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-toolbox text-primary mb-4"></i>
                            <h5>HVAC Spare Parts Supply</h5>
                            <p>Reliable supply of high-quality HVAC spare parts and components for maintenance and operational needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solutions End -->


    <!-- Why Choose Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Left Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Why Clients Prefer RR Engineers & Contractors</h1>
                    <p class="mb-5">
                        We combine innovation, skilled execution, and uncompromising quality to deliver air management and ducting solutions that meet modern industrial needs. Our client-first approach and technical expertise have made us a trusted partner across industries.
                    </p>

                    <!-- Reason 1 -->
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                            <i class="fa fa-tools fa-2x text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">Precision & Quality</h5>
                            <span>
                                We use CNC machinery and advanced tools to ensure flawless fabrication, tight tolerances, and long-lasting durability for every ducting and HVAC project.
                            </span>
                        </div>
                    </div>

                    <!-- Reason 2 -->
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                            <i class="fa fa-clock fa-2x text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">Timely & Reliable Execution</h5>
                            <span>
                                Our in-house team ensures project timelines are met without compromising safety or quality, making us a dependable choice for turnkey MEPF works.
                            </span>
                        </div>
                    </div>

                    <!-- Reason 3 -->
                    <div class="d-flex mb-0">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                            <i class="fa fa-leaf fa-2x text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">Sustainable Air Solutions</h5>
                            <span>
                                We focus on energy-efficient systems, low-leakage ducting, and environment-friendly materials like PAL to reduce energy costs and improve indoor air quality.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" alt="Why Choose RR Engineers" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span></h1>
                </div>
                <p class="mb-5">
                    Looking for expert solutions in Pre-Insulated Ducting, HVAC systems, CNC Fabrication, or Ventilation Projects? 
                    Fill out the form and our team will get in touch to discuss your project and offer the best service and pricing options.
                </p>
                <a class="btn btn-primary py-3 px-5" href="contact.php">Contact Us</a>
            </div>
            <div class="col-lg-8">
                <div class="bg-light text-center p-5">
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
                                <input type="text" class="form-control border-0" placeholder="Preferred Time/Date" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5" placeholder="How can we help you? (e.g., ducting project, insulation, ventilation design)"></textarea>
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
