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
                    <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="RR Engineers Project Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-industry fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-5 text-uppercase text-white mb-md-4">Pre-Insulated Ducting Solutions</h1>
                            <a href="#services" class="btn btn-primary py-md-3 px-md-5 mt-2">Explore Our Services</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="PAL Ducting System">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-cogs fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-5 text-uppercase text-white mb-md-4">Authorized Partner of PAL Systems</h1>
                            <a href="#products" class="btn btn-primary py-md-3 px-md-5 mt-2">View Products</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="Engineering Team at Work">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-users-cog fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-5 text-uppercase text-white mb-md-4">Expert Team for Global Project Execution</h1>
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
                <h1 class="display-6 text-uppercase mb-4">Welcome to <span class="text-primary">RR Engineers & Contractors</span></h1>
                <h4 class="text-uppercase mb-3 text-body">Pioneers in Pre-Insulated Ducting & HVAC Fabrication Solutions</h4>
                <p>Established in 2011, RR Engineers & Contractors is a trusted name in the field of HVAC ducting systems. We are an authorized partner of PAL SYSTEM INDIA PVT LTD, offering world-class Pre-Insulated Ducting Systems, Eco Panels, Spiral Ducting, CNC Machines, and a wide range of Fabrication Tools and Accessories.</p>

                <p>Our skilled engineering team executes international and domestic projects across commercial, industrial, and residential sectors. We follow technical standards and safety norms rigorously and have received recognition from top clients including Blue Star India Ltd.</p>

                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Skilled Engineering Workforce</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Authorized PAL System Partner</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Global Project Execution</p>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>In-house CNC & Tooling Facility</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Safety Award-Winning Team</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Environmentally Friendly Systems</p>
                    </div>
                </div>

                <p class="mb-4">We continue to evolve with modern technology and ensure excellence in every project we execute. Our mission is to deliver innovative, durable, and efficient ducting solutions that meet international standards.</p>
                <img src="<?php bloginfo('template_directory'); ?>/img/signature.jpg" alt="RR Engineers Signature">
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="<?php bloginfo('template_directory'); ?>/img/about.jpg" style="object-fit: cover;" alt="RR Engineers About Image">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-3 px-lg-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-6 text-uppercase mb-4">Our <span class="text-primary">Specialized</span> Services</h1>
            <p>We offer complete turnkey solutions in pre-insulated ducting, HVAC systems, under-roof insulation, CNC fabrication, ventilation, and accessories supply.</p>
        </div>
        <div class="row g-5">

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-1.jpg" alt="Pre Insulated Ducting">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-wind text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Pre-Insulated Ducting</h4>
                        <p>Authorized installation of PAL SYSTEM pre-insulated ducts offering low leakage, high strength, and clean air performance.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-2.jpg" alt="HVAC Ventilation">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-fan text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">HVAC & Ventilation</h4>
                        <p>Execution of complete HVAC projects including air handling systems, chimneys, fresh air supply, and ventilation systems.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-3.jpg" alt="CNC Fabrication">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-cogs text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">CNC Duct Fabrication</h4>
                        <p>Advanced CNC machining and fabrication tools for accurate, efficient duct panel manufacturing and accessory cutting.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-4.jpg" alt="Insulation Services">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-temperature-low text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Under Roof Insulation</h4>
                        <p>Efficient thermal insulation services to reduce heat gain and maintain energy efficiency for industrial and commercial spaces.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-5.jpg" alt="Testing & Commissioning">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-vial text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Duct Testing</h4>
                        <p>Smoke, light, and pressure testing for leakage checks and performance assurance of installed ducting systems.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-6.jpg" alt="HVAC Spares & Accessories">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-toolbox text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">HVAC Accessories</h4>
                        <p>Supply of ducting tools, PAL accessories, adhesives, tapes, grilles, diffusers, dampers, and all HVAC-related parts.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid bg-light pt-4 pb-6 px-3 px-lg-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-6 text-uppercase mb-4">Some Of Our <span class="text-primary">Prestigious</span> Projects</h1>
        </div>
        <div class="row gx-5">
            <div class="col-12 text-center">
                <div class="d-inline-block bg-dark-radial text-center pt-4 px-5 mb-5">
                    <ul class="list-inline mb-0" id="portfolio-flters">
                        <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio-1.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">All</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".first">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio-2.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">HVAC</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".second">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio-3.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Fabrication</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-5 portfolio-container">
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/portfolio-1.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">HVAC Installation – Novotel Hotel</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Pune, Maharashtra</span>
                    </a>
                    <a class="portfolio-btn" href="<?php bloginfo('template_directory'); ?>/img/portfolio-1.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/portfolio-2.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">PAL Spiral Ducting Project</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Nashik, India</span>
                    </a>
                    <a class="portfolio-btn" href="<?php bloginfo('template_directory'); ?>/img/portfolio-2.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/portfolio-3.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">CNC Duct Cutting Facility</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Pune Industrial Area</span>
                    </a>
                    <a class="portfolio-btn" href="<?php bloginfo('template_directory'); ?>/img/portfolio-3.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/portfolio-4.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Commercial Tower Insulation</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Ahmedabad, Gujarat</span>
                    </a>
                    <a class="portfolio-btn" href="<?php bloginfo('template_directory'); ?>/img/portfolio-4.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/portfolio-5.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Under Roof PAL Panel Install</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Hyderabad, India</span>
                    </a>
                    <a class="portfolio-btn" href="<?php bloginfo('template_directory'); ?>/img/portfolio-5.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/portfolio-6.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Evaporative Cooling System</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Chakan MIDC, Pune</span>
                    </a>
                    <a class="portfolio-btn" href="<?php bloginfo('template_directory'); ?>/img/portfolio-6.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 mb-5 team">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-4">Meet Our <span class="text-primary">Skilled & Committed</span> Team</h1>
            </div>

            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                <!-- Team Member 1 -->
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" class="img-fluid w-100 rounded-circle" alt="Team Member">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4>Mr. Rajesh Patil</h4>
                                <p class="m-0">Founder & Managing Director</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg" class="img-fluid w-100 rounded-circle" alt="Team Member">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4>Ms. Sneha Kulkarni</h4>
                                <p class="m-0">Operations Head</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="<?php bloginfo('template_directory'); ?>/img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="Team Member">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4>Mr. Anil Deshmukh</h4>
                                <p class="m-0">Head of Fabrication</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="<?php bloginfo('template_directory'); ?>/img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="Team Member">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4>Mr. Kunal Joshi</h4>
                                <p class="m-0">Lead Project Engineer</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-6 px-3 px-lg-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-6 text-uppercase mb-4">What Our <span class="text-primary">Happy Clients</span> Say!!!</h1>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                <img class="img-fluid w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/testimonial.jpg">
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="testimonial bg-light">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Suresh Patil</h4>
                                <p>Real Estate Developer</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i>RR Engineers exceeded our expectations with timely project delivery and quality workmanship. Their dedication and professionalism are commendable.</p>
                            </div>
                        </div>
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="<?php bloginfo('template_directory'); ?>/img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Meena Kulkarni</h4>
                                <p>Architect</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i>The team brings innovative solutions and efficient execution to every project. Working with RR Engineers has always been a smooth and successful experience.</p>
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
