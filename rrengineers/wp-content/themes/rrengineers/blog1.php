<?php
/**
 * The main template file
 * Template Name: Blog 1
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
    <!-- About the Client Section -->
    <div class="text-start mb-5 wow fadeIn" data-wow-delay="0.1s">
        <img src="<?php bloginfo('template_directory'); ?>/img/blog/blog-1 banner.jpg"
            style="width: 450px; height: 250px; object-fit: cover;" alt="Kingspan PalDuct Logo" class="border"
            style="width: 150px; height: 100px; object-fit: contain;">
        <h5 class="mt-3 fs-2">About the Client</h5>
        <p class="mt-4" style="font-size: 16px; line-height: 1.6;">
            Kingspan PalDuct Systems is a globally recognized leader in HVAC ductwork solutions. Their pre-insulated
            duct panels and systems have revolutionized the air distribution industry by providing energy-efficient,
            hygienic, and quick-to-install alternatives to traditional ducting. Kingspan is known for its continuous
            innovation, industry-leading technical support, and specialized training for HVAC fabricators and
            installers.
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <h6>Country</h6>
                <p>Global</p>
            </div>
            <div class="col-md-4">
                <h6>Industry</h6>
                <p>HVAC & Insulation</p>
            </div>
            <div class="col-md-4">
                <h6>Solutions Provided</h6>
                <p>
                    <span class="badge badge-warning text-white bg-primary">Pre-Insulated Ducting Systems</span>
                    <span class="badge badge-warning text-white bg-primary">Training & Technical Support</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Business Situation Section -->
    <div class="wow fadeIn" data-wow-delay="0.2s">
        <h5 class="mb-4 fs-2">Business Situation</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            The HVAC industry has faced rising demand for efficient, space-saving, and hygienic ducting systems.
            Traditional sheet metal ducts, often bulky and time-consuming to fabricate, do not meet the speed or
            insulation requirements of modern buildings. Kingspan recognized this challenge and introduced their PalDuct
            PIR Panel technology to redefine ductwork installation.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            In addition to performance, clients were demanding solutions that supported sustainability, lower carbon
            footprints, and ease of on-site customization. Kingspan responded with a system that delivered environmental
            responsibility, high performance, and reduced fabrication time.
        </p>
    </div>

    <!-- The Solution Section -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="mb-4 fs-2">The Solution</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            Kingspan PalDuct Technology provides a full suite of offerings, including:
        </p>
        <ul style="font-size: 16px; line-height: 2;">
            <li>Complete line of components and accessories for ductwork.</li>
            <li>Professional hand tools and automated machinery.</li>
            <li>Specialised training courses for duct fabricators and contractors.</li>
            <li>“Duct Design Software” to calculate duct sizes and material quantities accurately.</li>
            <li>Ongoing technical support to ensure top-quality fabrication and installation.</li>
        </ul>
        <p style="font-size: 16px; line-height: 1.6;">
            Kingspan's system ensures fast-track installation, space savings with flush fitting, and robust structural
            performance with high rigidity and compressive strength.
        </p>
    </div>

    <!-- Key Advantages -->
    <div class="wow fadeIn" data-wow-delay="0.4s">
        <h5 class="mb-4 fs-2">Advantages of Kingspan PalDuct</h5>
        <ul style="font-size: 16px; line-height: 2;">
            <li>Hygienic and easy-to-clean surfaces.</li>
            <li>Fibre-free PIR insulation core for clean air delivery.</li>
            <li>CFC/HCFC-free: environmentally friendly with low Global Warming Potential (GWP).</li>
            <li>Resistance to fungal and microbial growth.</li>
            <li>On-site fabrication possible – no limits to duct size or shape.</li>
            <li>High integrity, moisture-resistant base material.</li>
            <li>Low leakage and improved energy efficiency with low air leakage values (Low A value).</li>
        </ul>
    </div>

    <!-- Certifications Section -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.5s">
        <h5 class="mb-4 fs-2">Certifications & Compliance</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            Kingspan PalDuct PIR System is produced to the highest global standards, certified under:
        </p>
        <ul style="font-size: 16px; line-height: 2;">
            <li>ISO 9001:2015 – Quality Management System</li>
            <li>ISO 14001:2015 – Environmental Management System</li>
            <li>ISO 45001:2018 – Occupational Health & Safety</li>
            <li>ISO 37301:2021 – Compliance Management System</li>
        </ul>
        <p style="font-size: 16px; line-height: 1.6;">
            These certifications assure clients that every panel is manufactured with a focus on performance, safety,
            and sustainability.
        </p>
    </div>

    <!-- Environmental Commitment -->
    <div class="wow fadeIn" data-wow-delay="0.6s">
        <h5 class="mb-4 fs-2">Environmental Responsibility</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            Kingspan PalDuct is fully aligned with global sustainability goals. Its insulation panels use
            polyisocyanurate (PIR) cores with zero Ozone Depletion Potential (ODP) and low GWP blowing agents. This
            makes it a strong choice for eco-conscious building professionals.
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


<!-- Blog 1 FAQs Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs – Blog 1: CNC Fabrication in HVAC</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Dive deeper into the topics covered in our blog on CNC-driven HVAC solutions, PAL ducting systems,
                    and smart fabrication practices for modern industrial environments.
                </p>
                <a class="btn btn-primary py-3 px-5" href="#contact">Still Have Questions?</a>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionBlog1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blog1Q1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#blog1A1" aria-expanded="true" aria-controls="blog1A1">
                                    Q: What is the advantage of CNC fabrication in ducting?
                                </button>
                            </h2>
                            <div id="blog1A1" class="accordion-collapse collapse show" aria-labelledby="blog1Q1"
                                data-bs-parent="#accordionBlog1">
                                <div class="accordion-body">
                                    A: CNC fabrication ensures highly accurate duct components with tight tolerances,
                                    faster production cycles, and reduced material waste — all critical for efficient
                                    HVAC system performance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blog1Q2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#blog1A2" aria-expanded="false" aria-controls="blog1A2">
                                    Q: Why is PAL ducting gaining popularity in industrial HVAC?
                                </button>
                            </h2>
                            <div id="blog1A2" class="accordion-collapse collapse" aria-labelledby="blog1Q2"
                                data-bs-parent="#accordionBlog1">
                                <div class="accordion-body">
                                    A: PAL ducting is lightweight, corrosion-resistant, thermally insulated, and easy to
                                    install. It significantly improves energy efficiency while reducing installation
                                    time on-site.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blog1Q3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#blog1A3" aria-expanded="false" aria-controls="blog1A3">
                                    Q: How does your team maintain quality in HVAC installations?
                                </button>
                            </h2>
                            <div id="blog1A3" class="accordion-collapse collapse" aria-labelledby="blog1Q3"
                                data-bs-parent="#accordionBlog1">
                                <div class="accordion-body">
                                    A: Our engineers follow ISO-driven processes, use advanced tools, and implement
                                    real-time QA/QC checks during installation. Each system is tested for airflow,
                                    leakage, and commissioning parameters.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blog1Q4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#blog1A4" aria-expanded="false" aria-controls="blog1A4">
                                    Q: Do you fabricate duct accessories in-house?
                                </button>
                            </h2>
                            <div id="blog1A4" class="accordion-collapse collapse" aria-labelledby="blog1Q4"
                                data-bs-parent="#accordionBlog1">
                                <div class="accordion-body">
                                    A: Yes, we fabricate a full range of ducting accessories using CNC-cutting,
                                    notching, and forming machines to match design specifications and ensure a seamless
                                    system fit.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="blog1Q5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#blog1A5" aria-expanded="false" aria-controls="blog1A5">
                                    Q: How does CNC contribute to project timelines?
                                </button>
                            </h2>
                            <div id="blog1A5" class="accordion-collapse collapse" aria-labelledby="blog1Q5"
                                data-bs-parent="#accordionBlog1">
                                <div class="accordion-body">
                                    A: CNC machines accelerate fabrication, reduce manual errors, and streamline
                                    production — allowing faster site deliveries, easier assembly, and minimal on-site
                                    adjustments.
                                </div>
                            </div>
                        </div>
                    </div> <!-- end accordion -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog 1 FAQs End -->


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