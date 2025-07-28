<?php
/**
 * The main template file
 * Template Name: Home
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

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/duct logo.jpg"
                    alt="RR Engineers Project Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <i class="fa fa-wind fa-4x text-primary mb-4 d-none d-sm-block"></i>
                        <h1 class="display-5 text-uppercase text-white mb-md-4">Pioneers in Pre-Insulated Ducting
                            Systems</h1>
                        <a href="#services" class="btn btn-primary py-md-3 px-md-5 mt-2">Explore Our Services</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/cnc_duct.jpg"
                    alt="PAL Ducting System">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <i class="fa fa-cogs fa-4x text-primary mb-4 d-none d-sm-block"></i>
                        <h1 class="display-6 text-uppercase text-white mb-md-4">Authorized Partner for Pre-Insulated
                            Panels – Alpha, PAL, Kingspan (Dubai)</h1>
                        <a href="#products" class="btn btn-primary py-md-3 px-md-5 mt-2">View Products</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel/carousel-1.jpg"
                    alt="Engineering Team at Work">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4 d-none d-sm-block"></i>
                        <h1 class="display-5 text-uppercase text-white mb-md-4">Expert Team for Global Project Execution
                        </h1>
                        <a href="#about" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More About Us</a>
                    </div>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5 px-4 px-lg-5">
    <div class="row g-5">
        <div class="col-lg-7">
            <h1 class="display-6 text-uppercase mb-4">Welcome to <span class="text-primary">RR Engineers &
                    Contractors</span></h1>
            <h4 class="text-uppercase mb-3 text-body">Pioneers in Pre-Insulated Ducting & HVAC Fabrication Solutions
            </h4>
            <p>Established in 2012, RR Engineers & Contractors is a trusted name in the field of HVAC ducting systems.
                We are an authorized partner of Pal/Kingspan & Alpha Ducts LLC, offering world-class Pre-Insulated Ducting
                Systems, Eco Panels, Spiral Ducting, CNC Machines, and a wide range of Fabrication Tools and
                Accessories.</p>

            <p>Our skilled engineering team executes international and domestic projects across commercial, industrial,
                and residential sectors. We follow technical standards and safety norms rigorously and have received
                recognition from top clients including Blue Star India Ltd.</p>

            <div class="row gx-5 py-2">
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Skilled Engineering Workforce
                    </p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Global Project Execution</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Authorized Partner for
                        International Brands</p>
                </div>
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>In-house CNC & Tooling Facility
                    </p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Safety Award-Winning Team</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Environmentally Friendly
                        Systems</p>
                </div>
            </div>

            <p class="mb-4">We continue to evolve with modern technology and ensure excellence in every project we
                execute. Our mission is to deliver innovative, durable, and efficient ducting solutions that meet
                international standards.</p>
        </div>
        <div class="col-lg-5 pb-5" style="min-height: 400px;">
            <div class="position-relative bg-dark-radial h-100 ms-5">
                <img class="position-absolute w-100 h-100 mt-5 ms-n5"
                    src="<?php bloginfo('template_directory'); ?>/img/index/1.jpg" style="object-fit: cover;"
                    alt="RR Engineers About Image">
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid bg-light py-6 px-3 px-lg-5">
    <div class="text-center mx-auto mb-5" style="max-width: 700px;">
        <h1 class="display-6 text-uppercase mb-4">Our <span class="text-primary">Specialized</span> Services</h1>
        <p>We offer complete turnkey solutions in pre-insulated ducting, HVAC systems, under-roof insulation, CNC
            fabrication, ventilation, and accessories supply.</p>
    </div>
    <div class="row g-4 g-lg-5">

        <div class="col-lg-4 col-md-6">
            <div
                class="service-item bg-white d-flex flex-column align-items-center text-center shadow-sm rounded overflow-hidden">
                <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/DUCTING IT OFFICE-2/3.jpg"
                    alt="Pre Insulated Ducting" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-wind text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Pre-Insulated Ducting</h4>
                    <p>Authorized installation of PAL SYSTEM pre-insulated ducts offering low leakage, high strength,
                        and clean air performance.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div
                class="service-item bg-white d-flex flex-column align-items-center text-center shadow-sm rounded overflow-hidden">
                <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/Expose_pharma_ducting/3.jpg"
                    alt="HVAC Ventilation" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-fan text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">HVAC & Ventilation</h4>
                    <p>Execution of complete HVAC projects including air handling systems, chimneys, fresh air supply,
                        and ventilation systems.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div
                class="service-item bg-white d-flex flex-column align-items-center text-center shadow-sm rounded overflow-hidden">
                <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/cnc_duct.jpg" alt="CNC Fabrication"
                    class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-cogs text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">CNC Duct Fabrication</h4>
                    <p>Advanced CNC machining and fabrication tools for accurate, efficient duct panel manufacturing and
                        accessory cutting.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div
                class="service-item bg-white d-flex flex-column align-items-center text-center shadow-sm rounded overflow-hidden">
                <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/UNDER DECK INDUSTRIAL AUTOMOBILE -2/1.jpg"
                    alt="Insulation Services" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-temperature-low text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Under Roof Insulation</h4>
                    <p>Efficient thermal insulation services to reduce heat gain and maintain energy efficiency for
                        industrial and commercial spaces.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div
                class="service-item bg-white d-flex flex-column align-items-center text-center shadow-sm rounded overflow-hidden">
                <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/duct_testing.jpg"
                    alt="Testing & Commissioning" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-vial text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Duct Testing</h4>
                    <p>Smoke, light, and pressure testing for leakage checks and performance assurance of installed
                        ducting systems.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div
                class="service-item bg-white d-flex flex-column align-items-center text-center shadow-sm rounded overflow-hidden">
                <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/hvac_accessories.jpg"
                    alt="HVAC Spares & Accessories" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-toolbox text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">HVAC Accessories</h4>
                    <p>Supply of ducting tools, accessories, adhesives, tapes, grilles, diffusers, dampers, and all
                        HVAC-related parts.</p>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Services End -->


<!-- Why Choose Us -->
<div class="container-fluid bg-dark feature pt-5">
    <div class="container pt-0 pt-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.2s">
                <h1 class="text-white mb-4">Why Choose Us<br>RR Engineers & Contractors</h1>
                <p class="text-light mb-4">
                    With over a decade of hands-on experience, RR Engineers & Contractors is a trusted partner in
                    delivering customized HVAC and MEP Contractors. As an authorized Pal/Kingspan & Alpha Duct LLC partner, we
                    specialize in CNC-based duct fabrication, modular eco panels, and spiral duct installations—all
                    manufactured and installed in-house. Our commitment to quality, safety, and innovation ensures every
                    project meets international standards with sustainable, cost-effective execution.
                </p>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>PAL Certified Partner – Pre-insulated Ducting Solutions</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>End-to-End MEP Execution: Design to Commissioning</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>CNC Precision Fabrication for All Site Conditions</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Eco-Friendly Materials & Sustainable Practices</span>
                </div>
                <div class="row g-4 pt-3">
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-users fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-primary mb-0" data-toggle="counter-up">450</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-check fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-primary mb-0" data-toggle="counter-up">850</h2>
                                <p class="text-white mb-0">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-user-tie fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-primary mb-0" data-toggle="counter-up">23</h2>
                                <p class="text-white mb-0">Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-map-marker-alt fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-primary mb-0" data-toggle="counter-up">2</h2>
                                <p class="text-white mb-0">Locations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pb-5">
                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                    data-wow-delay="0.3s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div
                            class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-industry fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">CNC-Driven Precision</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        Our advanced CNC machinery guarantees accurate and consistent fabrication of PAL ducts, eco
                        panels, and accessories, delivering optimal airflow, long-term durability, and Fast track Applications.
                    </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.4s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div
                            class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-project-diagram fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">Full-Scope MEP Solutions</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        We integrate HVAC ducting, electrical, plumbing, and fire safety services with expert QA/QC,
                        advanced planning, and seamless coordination across all project stages. </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.5s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div
                            class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-tasks fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">Turnkey Project Delivery</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        Our team handles everything from design drawings to final site handover, reducing downtime and
                        ensuring regulatory compliance through every critical project milestone. </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.6s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div
                            class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-leaf fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">Eco-Conscious Execution</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        We focus on sustainable ducting systems, recyclable components, smart materials, and
                        energy-efficient layout planning—maximizing performance while minimizing environmental and
                        operational impact. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us -->


<!-- Portfolio Start -->
<div class="container-fluid bg-light pt-4 pb-6 px-3 px-lg-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-6 text-uppercase mb-4">Our <span class="text-primary">Core Offerings</span></h1>
    </div>
    <div class="row g-4 g-lg-5">
        <div class="col-12 text-center">
            <div class="d-inline-block bg-dark-radial text-center pt-4 px-5 mb-5">
                <ul class="list-inline mb-0" id="portfolio-flters">
                    <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                        <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/under_deck_Falsealing_finesh_FOR_AUTO_MOBILE/2.jpg"
                            style="width: 150px; height: 100px;">
                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                            style="background: rgba(4, 15, 40, .3);">
                            <h6 class="text-white text-uppercase m-0">All Categories</h6>
                        </div>
                    </li>
                    <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".business">
                        <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/suma_soft.jpg"
                            style="width: 150px; height: 100px;">
                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                            style="background: rgba(4, 15, 40, .3);">
                            <h6 class="text-white text-uppercase m-0">Business Verticals</h6>
                        </div>
                    </li>
                    <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".insulation">
                        <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/HEAT PROFF PAINTS INSULATION/1.jpg"
                            style="width: 150px; height: 100px;">
                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                            style="background: rgba(4, 15, 40, .3);">
                            <h6 class="text-white text-uppercase m-0">Insulation</h6>
                        </div>
                    </li>
                    <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".hvac">
                        <img src="<?php bloginfo('template_directory'); ?>/img/rr_images/duct logo.jpg"
                            style="width: 150px; height: 100px;">
                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                            style="background: rgba(4, 15, 40, .3);">
                            <h6 class="text-white text-uppercase m-0">HVAC</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="row g-4 portfolio-container">
        <!-- Business Verticals (12 items) -->
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/industrial_ducting_cummins_automobile-1/1.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Industrial Ducting – Automobile, Plant</p>
                    <span class="text-body"><i class="fa fa-industry text-primary me-2"></i>Phaltan, Satara</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/Expose_pharma_ducting/2.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Pharma Industries</p>
                    <span class="text-body"><i class="fa fa-flask text-primary me-2"></i>Ranjangaon, Pune</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/hospitaltiy/1.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Industrial Ducting</p>
                    <span class="text-body"><i class="fa fa-hotel text-primary me-2"></i>Carrier, Supa</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/suma_soft.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Commercial Buildings</p>
                    <span class="text-body"><i class="fa fa-building text-primary me-2"></i>Suma Soft Pune</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/Ducting IT OFFICE/1.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">IT Parks</p>
                    <span class="text-body"><i class="fa fa-laptop text-primary me-2"></i>Hinjewadi, Pune</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/auditoriums_ductings.png" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Auditoriums Ductings</p>
                    <span class="text-body"><i class="fa fa-microphone text-primary me-2"></i>Bhandrkar Institute, TCS,
                        Goa Auditorium </span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/rathi_bunglow.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Residential Apartments / Bungalows</p>
                    <span class="text-body"><i class="fa fa-home text-primary me-2"></i>Rathi Bunglow, Dy Patil,
                        Venkys</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/allana.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Food Industries</p>
                    <span class="text-body"><i class="fa fa-utensils text-primary me-2"></i>Allana, Khopoli, Pune</span>
                </a>
            </div>
        </div>

         <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/suma_soft1.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">High-rise Buildings</p>
                    <span class="text-body"><i class="fa fa-city text-primary me-2"></i>Suma Soft, Pune</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/UNDER DECK INDUSTRIAL AUTOMOBILE FACTORY/1.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Underdeck Insulation Automobile Industry</p>
                    <span class="text-body"><i class="fa fa-database text-primary me-2"></i>Chakan MIDC, Pune</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/industrial_underdeck_below_glass_wool/4.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Underdeck Insulation</p>
                    <span class="text-body"><i class="fa fa-cogs text-primary me-2"></i>Ranjangaon, Pune</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/ruby_hall.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Hospitality Ducting </p>
                    <span class="text-body"><i class="fa fa-hospital text-primary me-2"></i>Ruby Hall, Jehangir,
                        Cloudnine Pune</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item business more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/novatel_hotel.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Hotel Industry</p>
                    <span class="text-body"><i class="fa fa-hospital text-primary me-2"></i>Novatel Hotel, ANP Atnlantis
                        Pune</span>
                </a>
            </div>
        </div>

        <!-- Insulation Items (5 items) -->
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item insulation">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/HEAT PROFF PAINTS INSULATION/1.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Heat Reflective Paints</p>
                    <span class="text-body"><i class="fa fa-fire text-primary me-2"></i>Energy Saving</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item insulation">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/wall_insulation.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Wall Insulation</p>
                    <span class="text-body"><i class="fa fa-wallpaper text-primary me-2"></i>Thermal Efficiency</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item insulation more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/under_deck_Falsealing_finesh_FOR_AUTO_MOBILE/2.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Under Roof Insulation</p>
                    <span class="text-body"><i class="fa fa-home text-primary me-2"></i>Heat Control</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item insulation more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/HEAT PROFF PAINTS INSULATION/4.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Over Roof Insulation</p>
                    <span class="text-body"><i class="fa fa-layer-group text-primary me-2"></i>Heat Reflective
                        Paints</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item insulation more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/paints.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Heat Reflective Paints</p>
                    <span class="text-body"><i class="fa fa-car text-primary me-2"></i>Paints</span>
                </a>
            </div>
        </div>

        <!-- HVAC Items (5 items) -->
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/tapes.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Leak Proof Tapes</p>
                    <span class="text-body"><i class="fa fa-tint text-primary me-2"></i>Waterproofing</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/sealant.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">RR Sealents</p>
                    <span class="text-body"><i class="fa fa-paint-brush text-primary me-2"></i>Ducting
                        Accessories</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/TOOLS CUTTER-1/3.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">RR Jumbo Cutters</p>
                    <span class="text-body"><i class="fa fa-paint-brush text-primary me-2"></i>Ducting
                        Tools</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100"
                    src="<?php bloginfo('template_directory'); ?>/img/rr_images/TOOLS CUTTER-1/1.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">RR V Cutters</p>
                    <span class="text-body"><i class="fa fa-paint-brush text-primary me-2"></i>Ducting
                        Tools</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/tapes.jpg"
                    alt="" class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Aluminum Tape</p>
                    <span class="text-body"><i class="fa fa-tape text-primary me-2"></i>Ducting Tool</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/img/ducting_accessories.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Ducting Accessories</p>
                    <span class="text-body"><i class="fa fa-glue text-primary me-2"></i>Ducting Tool</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/img/water_proof_tapes.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Water Proof Tapes</p>
                    <span class="text-body"><i class="fa fa-glue text-primary me-2"></i>Ducting Tool</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/img/PIR_panel_crushing.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">PIR Panel Crushing Machine</p>
                    <span class="text-body"><i class="fa fa-glue text-primary me-2"></i>Ducting Tool</span>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item hvac more-item" style="display: none;">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/rr_images/img/panel_crushing_machine.jpg" alt=""
                    class="img-fluid w-100" style="height: 270px; object-fit: cover;">
                <a class="portfolio-title shadow-sm" href="#">
                    <p class="h4">Panel Crushing Machine</p>
                    <span class="text-body"><i class="fa fa-glue text-primary me-2"></i>Ducting Tool</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container pb-5">
        <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
            style="max-width: 800px;">
            <h4 class="text-primary">Our Team</h4>
            <h1 class="display-6 mb-4">Dedicated Experts Behind Our Engineering Excellence</h1>
            <p class="mb-0">At RR Engineers & Contractors, our team comprises experienced professionals specializing in
                PAL ducting systems, HVAC installations, and project execution. With a focus on quality, innovation, and
                client satisfaction, we ensure every project is delivered with precision and performance.</p>

        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/team/team1.png"
                            class="img-fluid team-img-height w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content bg-light text-center p-4">
                        <h4>Mr. Shashidhar R</h4>
                        <p class="mb-0">Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/team/team2.png"
                            class="img-fluid team-img-height w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content bg-light text-center p-4">
                        <h4>Ms. Nisha Shashidhar</h4>
                        <p class="mb-0">Managing Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/team/team3.png"
                            class="img-fluid team-img-height w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content bg-light text-center p-4">
                        <h4>Mr. Ritesh S </h4>
                        <p class="mb-0">Project & Sales Head</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/team/team4.png"
                            class="img-fluid team-img-height w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content bg-light text-center p-4">
                        <h4>Ms. Rithika</h4>
                        <p class="mb-0">HR & Finance Head</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial bg-dark py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-xl-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">Testimonials</h4>
                <h1 class="display-4 text-white mb-4">What Our Clients Say About Us</h1>
                <p class="mb-4">Here’s what HVAC consultants, architects, and industry experts have to say about our
                    ducting solutions, work quality, and team dedication.</p>
                <a class="btn btn-light py-3 px-5" href="#">View All Reviews</a>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInUp" data-wow-delay="0.4s">
                <div class="owl-carousel testimonial-carousel">

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/Testimonial-1.jpg"
                                class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Sachin Wadkar</h4>
                                <p>HVAC Consultant, Infinity Proficient Engineering Services</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="mb-0">RR Engineers is the trusted name for PIR panel ductwork in the industry now.
                                Shashidhar is very competent and hardworking, always dedicated to serving clients with
                                full satisfaction. Best of luck to him for future endeavors.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/Testimonial-2.jpg"
                                class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Tushar Dastane</h4>
                                <p>Insulation Consultant</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="mb-0">RR Engineers and Shashidhar have been key players in pre-insulated ducting
                                for the HVAC industry. Energetic team and superior quality work. Most efficient
                                contractor I have met in HVAC contracting. Keep it up!</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/Testimonial-3.jpg"
                                class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Narendra Sardeshpande</h4>
                                <p>Architect</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="mb-0">RR Engineers has always shown excellent commitment to quality and timely
                                execution. Their technical understanding and practical approach make them a trusted
                                partner for our architectural projects.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/Testimonial-4.jpg"
                                class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Virendra Dande</h4>
                                <p>Consultant – Engineering</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="mb-0">Regarding RR Engineers and Contractors, I would certainly like to say they
                                are one of the most committed, competent, and hardworking teams I’ve worked with. Their
                                dedication to engineering excellence is commendable.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/Testimonial-5.jpg"
                                class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Dhananjay Sinnerker</h4>
                                <p>HVAC Consultant, Infinity</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="mb-0">I have had the pleasure of working with RR Engineers & Contractors and can confidently say they are one of the most reliable and technically sound teams in the industry. Their commitment to quality work, timely delivery, and a problem-solving mindset truly sets them apart.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/Testimonial-6.jpg"
                                class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Rasgtogi</h4>
                                <p>Service Consultant, (IFB)</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="mb-0">Regarding RR Engineers and Contractors was founded by Mr. Shashidhar, a seasoned field service expert known for his exceptional ability to delight customers with his dedicated and caring service. This customer-first approach has laid a strong foundation for the company’s growth. I am confident that RR Engineers is poised to climb great heights of success.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/Testimonial-7.jpg"
                                class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Rohit Verma</h4>
                                <p>Architect</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="mb-0">RR Engineers and Contractors are highly knowledgeable and professional. They deliver projects on time without any delays, ensuring quality and reliability throughout. A great team to work with!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


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


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs - RR Engineers</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">Find answers to common questions about our PAL ducting systems, accessories, services,
                    and technical support. We’re here to help you make informed decisions for your projects.</p>
                <a class="btn btn-primary py-3 px-5" href="#contact">Have More Questions?</a>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q: What is PAL ducting and how is it beneficial?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: PAL ducting is a pre-insulated, lightweight ducting system ideal for HVAC
                                    applications. It offers thermal insulation, sound dampening, and corrosion
                                    resistance, making it efficient and cost-effective.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Do you provide on-site installation for ducting systems?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, RR Engineers offers complete on-site installation services for PAL ducting
                                    systems. Our experienced technicians ensure precision fitting, sealing, and
                                    compliance with project standards.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: Can you customize ducting accessories as per project needs?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Absolutely! We offer custom-fabricated ducting accessories including bends,
                                    reducers, flanges, and supports based on project-specific requirements and
                                    dimensions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: What industries do you serve with your ducting solutions?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We cater to a wide range of sectors including industrial plants, commercial
                                    buildings, cleanrooms, data centers, hospitals, and pharmaceutical facilities.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: How do I get technical support or a product catalogue?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: You can contact us directly via our website or support email to request detailed
                                    product catalogs, datasheets, and technical consultation. We respond within 24 hours
                                    on working days.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->


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