<?php
/**
 * The main template file
 * Template Name: Blog 3
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


<!-- Blog Details Start -->
<div class="container pt-5 pb-0 py-lg-5">
    <!-- Title Section -->
    <div class="text-start mb-5 wow fadeIn" data-wow-delay="0.1s">
        <img src="<?php bloginfo('template_directory'); ?>/img/blog/blog-3 banner.jpg"
            style="width: 450px; height: 250px; object-fit: cover;" alt="Alpha PIR vs Metal Ducts" class="border">
        <h5 class="mt-3 fs-2">Why ALPHA-PIR Duct Systems Outperform Traditional Metal Ducts</h5>
        <p class="mt-4" style="font-size: 16px; line-height: 1.6;">
            In an evolving HVAC industry, ALPHA DUCTS LLC has redefined air distribution with its ALPHA-PIR duct systems
            — offering revolutionary advantages over conventional sheet metal ducting. This blog explores why building
            professionals and HVAC contractors are shifting to ALPHA-PIR for modern infrastructure projects.
        </p>
    </div>

    <!-- Performance Comparison -->
    <div class="wow fadeIn" data-wow-delay="0.2s">
        <h5 class="mb-4 fs-2">Superior Performance & Efficiency</h5>
        <ul style="font-size: 16px; line-height: 2;">
            <li><strong>Thermal Insulation:</strong> Integrated PIR insulation reduces energy losses significantly.</li>
            <li><strong>Weight:</strong> Up to 80% lighter than traditional galvanized metal ducts—ideal for high-rise
                and retrofitting projects.</li>
            <li><strong>Installation Speed:</strong> Prefabricated panels allow fast-track assembly, reducing labor and
                project time.</li>
            <li><strong>Leakage Control:</strong> High air-tightness lowers operating costs and maintains HVAC system
                performance.</li>
        </ul>
    </div>

    <!-- Hygiene and Sustainability -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="mb-4 fs-2">Hygienic, Safe & Environmentally Friendly</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            ALPHA-PIR ducts have smooth, anti-fungal internal surfaces and are fiber-free, ensuring clean air delivery
            in hospitals, data centers, and cleanrooms. Their CFC/HCFC-free PIR foam core is environmentally responsible
            and contributes to LEED certifications and green building goals.
        </p>
    </div>

    <!-- Compatibility & Flexibility -->
    <div class="wow fadeIn" data-wow-delay="0.4s">
        <h5 class="mb-4 fs-2">Fully Compatible with Conventional Systems</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            ALPHA-PIR systems are designed to work seamlessly with conventional accessories including fire dampers,
            access doors, and hangers. Engineers can use familiar hardware while enjoying the modern performance of PIR
            technology.
        </p>
    </div>

    <!-- Certified Quality -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.5s">
        <h5 class="mb-4 fs-2">Tested. Trusted. Certified.</h5>
        <ul style="font-size: 16px; line-height: 2;">
            <li>UL Listed – Fire safety compliance for international projects.</li>
            <li>Certifire – Assures durability and safety in high-risk environments.</li>
            <li>ISO 9001, 14001, 45001 – Quality, environmental, and occupational health management systems.</li>
            <li>DCL Certified – Approved by Dubai Municipality for construction use.</li>
        </ul>
    </div>

    <!-- Final Thoughts -->
    <div class="wow fadeIn" data-wow-delay="0.6s">
        <h5 class="mb-4 fs-2">Conclusion</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            ALPHA-PIR duct systems are shaping the future of HVAC by combining efficiency, safety, and speed. For
            projects that demand more than just airflow—think ALPHA.
        </p>
    </div>
</div>
<!-- Blog Details End -->


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


<!-- Blog 3 FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs – Project Execution & Delivery</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Understand how we execute complex HVAC, ducting, and MEPF projects — from planning and safety to
                    on-site coordination and final handover.
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
                                    Q: How do you manage execution timelines on industrial projects?
                                </button>
                            </h2>
                            <div id="collapseServiceOne" class="accordion-collapse collapse show"
                                aria-labelledby="serviceOne" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: We plan through Gantt charts, daily progress tracking, and synchronized work
                                    fronts across teams. Dedicated project managers ensure timely completion without
                                    compromising on quality or safety.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceTwo" aria-expanded="false"
                                    aria-controls="collapseServiceTwo">
                                    Q: What documentation is provided during and after execution?
                                </button>
                            </h2>
                            <div id="collapseServiceTwo" class="accordion-collapse collapse"
                                aria-labelledby="serviceTwo" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: We provide work completion certificates, commissioning checklists, QC reports,
                                    handover files, and safety compliance logs, all signed by our team and the client
                                    for full transparency.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceThree" aria-expanded="false"
                                    aria-controls="collapseServiceThree">
                                    Q: How do you coordinate multiple MEPF disciplines on-site?
                                </button>
                            </h2>
                            <div id="collapseServiceThree" class="accordion-collapse collapse"
                                aria-labelledby="serviceThree" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: Our execution is coordinated through BIM layouts, service priority mapping, joint
                                    inspections, and pre-finalization of routing. We ensure clash-free installation
                                    among HVAC, electrical, plumbing, and fire-fighting systems.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceFour" aria-expanded="false"
                                    aria-controls="collapseServiceFour">
                                    Q: What safety measures are followed on your project sites?
                                </button>
                            </h2>
                            <div id="collapseServiceFour" class="accordion-collapse collapse"
                                aria-labelledby="serviceFour" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: All workers are equipped with PPE, and we enforce toolbox talks, site safety
                                    inductions, work-at-height procedures, and safety signage. Our safety officers
                                    monitor adherence to ISO and NFPA protocols.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="serviceFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseServiceFive" aria-expanded="false"
                                    aria-controls="collapseServiceFive">
                                    Q: Do you support phased execution or accelerated handovers?
                                </button>
                            </h2>
                            <div id="collapseServiceFive" class="accordion-collapse collapse"
                                aria-labelledby="serviceFive" data-bs-parent="#accordionServices">
                                <div class="accordion-body">
                                    A: Yes, we support phased handovers (floor-wise, system-wise) to align with client
                                    operations. In critical cases, we deploy additional manpower and shift-based work to
                                    fast-track execution and avoid downtime.
                                </div>
                            </div>
                        </div>
                    </div> <!-- end accordion -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog 3 FAQ End -->



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