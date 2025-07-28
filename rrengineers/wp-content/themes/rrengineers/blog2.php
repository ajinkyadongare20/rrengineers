<?php
/**
 * The main template file
 * Template Name: Blog 2
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


<!-- Blog Details Start  -->
<div class="container pt-5 pb-0 py-lg-5">
    <!-- Company Profile Section -->
    <div class="text-start mb-5 wow fadeIn" data-wow-delay="0.1s">
        <img src="<?php bloginfo('template_directory'); ?>/img/blog/blog-2 banner.jpg"
            style="width: 450px; height: 250px; object-fit: cover;" alt="Alpha Ducts Logo" class="border">
        <h5 class="mt-3 fs-2">Company Profile</h5>
        <p class="mt-4" style="font-size: 16px; line-height: 1.6;">
            ALPHA DUCTS LLC is one of the most advanced manufacturers of insulation foam panels, pre-insulated air duct
            systems, and accessories in the Middle East and surrounding regions.
            Established in 2004 to cater to local market needs, the company expanded rapidly.
        </p>
        <ul style="font-size: 16px; line-height: 2;">
            <li><strong>2004:</strong> Established as a small manufacturing facility.</li>
            <li><strong>2005:</strong> Upgraded to a large capacity plant with advanced automated machinery for global
                supply.</li>
            <li><strong>2006:</strong> DCL Certification for PIR panels.</li>
            <li><strong>2008:</strong> New facility in Jebel Ali and installation of new Phenolic (PF) line with 3.5
                million sqm annual capacity.</li>
            <li><strong>2009:</strong> Achieved ISO 9001 Certification.</li>
            <li><strong>2012:</strong> Certified with ISO 14001 and OHSAS 18001.</li>
            <li><strong>2013:</strong> Received Certifire certification for PIR & PF panels and UL listing for PF duct
                systems.</li>
            <li><strong>2016:</strong> DCL Certification for PF panels.</li>
            <li><strong>2018:</strong> Joined the FJ Group.</li>
        </ul>
        <p style="font-size: 16px; line-height: 1.6;">
            ALPHA DUCTS LLC manufactures premium-quality insulation panels and pre-insulated air duct systems under the
            brand name ALPHA, aligning with the highest global standards for quality, health, safety, environment, and
            fire resistance.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            Certified to ISO 9001, ISO 14001, and ISO 45001, and recognized by UL (Underwriters Laboratories), Certifire
            (Warringtonfire), DCL (Dubai Municipality), and BSRIA (air leakage certification).
        </p>
    </div>

    <!-- Product Introduction Section -->
    <div class="wow fadeIn" data-wow-delay="0.2s">
        <h5 class="mb-4 fs-2">Product Introduction</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            The ALPHA-PIR air duct system is a high-performance, lightweight, pre-insulated Polyisocyanurate ducting
            solution for efficient air distribution. It includes ALPHA-PIR panels, joint systems, accessories, and
            recommended fabrication/installation practices.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            These ducts are manufactured in sections up to 4 meters long, significantly reducing installation cost and
            energy consumption compared to traditional sheet metal ducts. The system is fully compatible with standard
            dampers, access doors, and support structures.
        </p>
    </div>

    <!-- Range & Limitations Section -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="mb-4 fs-2">Range and Limitations</h5>
        <ul style="font-size: 16px; line-height: 2;">
            <li><strong>Maximum Pressure:</strong> 2000 Pa</li>
            <li><strong>Maximum Air Velocity:</strong> 20 m/s</li>
            <li><strong>Temperature Range:</strong> Based on PIR specifications</li>
            <li><strong>Usage:</strong> Suitable for supply, return, fresh air, and exhaust in HVAC systems</li>
        </ul>
    </div>

    <!-- Environmental & Quality Commitment -->
    <div class="wow fadeIn" data-wow-delay="0.4s">
        <h5 class="mb-4 fs-2">Commitment to Quality and Environment</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            ALPHA DUCTS LLC stands for global excellence in insulation. Its PIR and PF systems ensure hygienic air
            quality, thermal efficiency, and environmental sustainability, aligning with ISO, UL, DCL, and Certifire
            standards.
        </p>
    </div>
</div>
<!-- Blog Details End  -->


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


<!-- Blog 2 FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs – Ducting & HVAC Systems</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Explore essential insights into ducting types, HVAC system planning, ventilation design, and
                    standards
                    followed across industrial and commercial projects.
                </p>
                <a class="btn btn-primary py-3 px-5" href="#contact">Still Have Questions?</a>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionServices">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceOne" aria-expanded="true"
                                    aria-controls="collapseServiceOne">
                                    Q: What are the different types of ducting used in HVAC systems?
                                </button>
                            </h2>
                            <div id="collapseServiceOne" class="accordion-collapse collapse show"
                                aria-labelledby="serviceOne" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: GI ducts, PAL pre-insulated ducts, flexible ducts, and stainless steel ducts are
                                    commonly used. The choice depends on application, insulation, corrosion resistance,
                                    and installation constraints.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceTwo" aria-expanded="false"
                                    aria-controls="collapseServiceTwo">
                                    Q: Why is ventilation planning important in HVAC projects?
                                </button>
                            </h2>
                            <div id="collapseServiceTwo" class="accordion-collapse collapse"
                                aria-labelledby="serviceTwo" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: Ventilation ensures removal of heat, pollutants, and CO₂ buildup. Proper planning
                                    supports health, energy savings, and regulatory compliance in commercial and
                                    industrial environments.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceThree" aria-expanded="false"
                                    aria-controls="collapseServiceThree">
                                    Q: Which standards are followed for ducting and HVAC design in India?
                                </button>
                            </h2>
                            <div id="collapseServiceThree" class="accordion-collapse collapse"
                                aria-labelledby="serviceThree" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: ISHRAE, ASHRAE, NBC, and SMACNA guidelines are typically used. These cover air
                                    flow rates, duct sizing, material specs, insulation levels, and pressure drop
                                    tolerances.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceFour" aria-expanded="false"
                                    aria-controls="collapseServiceFour">
                                    Q: How does PAL ducting compare with traditional GI ducts?
                                </button>
                            </h2>
                            <div id="collapseServiceFour" class="accordion-collapse collapse"
                                aria-labelledby="serviceFour" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: PAL ducts are lightweight, pre-insulated, and corrosion-resistant. They offer
                                    faster installation, energy efficiency, and reduced maintenance in contrast to
                                    traditional GI systems requiring external insulation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceFive" aria-expanded="false"
                                    aria-controls="collapseServiceFive">
                                    Q: What testing is done before HVAC systems go live?
                                </button>
                            </h2>
                            <div id="collapseServiceFive" class="accordion-collapse collapse"
                                aria-labelledby="serviceFive" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: Testing includes air balancing, leakage detection, insulation checks,
                                    noise/vibration control, and safety validations. All outcomes are documented in
                                    commissioning reports before client handover.
                                </div>
                            </div>
                        </div>
                    </div> <!-- end accordion -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog 2 FAQ End -->


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