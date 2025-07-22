<?php
/**
 * The main template file
 * Template Name: Alpha Duct System
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
    <h1 class="display-3 text-uppercase text-white mb-3">Alpha Duct System</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
        <h6 class="text-white m-0 px-3">/</h6>
        <h6 class="text-uppercase text-white m-0">Alpha Duct System</h6>
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
                    <div class="row g-4 my-5">
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
                    <p class="my-5">
                        RR Engineers & Contractors specializes in PAL ducting systems, HVAC installation, ventilation
                        design, under-roof insulation, descaling, and turnkey fabrication projects. We deliver smart,
                        energy-efficient, and space-optimized air management systems for industrial and commercial
                        spaces. Our solutions are backed by skilled engineers, advanced tools, and a deep commitment to
                        safety and timelines.
                    </p>
                    <div class="mt-4 pt-2 border-top">
                        <p class="fw-semibold mb-0">
                            Driven by precision, powered by expertise — we bring air management excellence to every
                            space we serve.
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


<!-- Product Start -->
<div class="container-xxl service py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h5 class="fw-bold text-primary">Our Products</h5>
            <h1 class="display-6 mb-5">Premium ALPHA Duct Systems</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-5 active"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <h5 class="m-0" style="font-size: 19px;"><i class="fa fa-bars text-primary me-3"></i>ALPHA-PIR
                            Air Duct System</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-5"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <h5 class="m-0" style="font-size: 19px;"><i
                                class="fa fa-bars text-primary me-3"></i>ALPHA-PIR-PLUS Air Duct System</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-5"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <h5 class="m-0" style="font-size: 19px;"><i class="fa fa-bars text-primary me-3"></i>ALPHA-PF
                            Air Duct System</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <h5 class="m-0" style="font-size: 19px;"><i
                                class="fa fa-bars text-primary me-3"></i>ALPHA-PF-PLUS Air Duct System</h5>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                        src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR-Air-Duct-System-AD-n.jpg"
                                        style="border: 1px solid" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="my-5">ALPHA-PIR Air Duct System</h3>
                                <p class="my-5">Lightweight, high-performance pre-insulated Polyisocyanurate air duct
                                    system for air distribution. Constructed with formaldehyde-free, fiber-free PIR
                                    panels faced with durable aluminium foil.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Thermal conductivity: 0.022 W/mK</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Water vapor transmission: zero</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Compressive strength: > 200 kPa</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Air velocity: up to 25 m/s</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tab 2 -->
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                        src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR-PLUS-AIR-DUCT-SYSTEM-n.jpg"
                                        style="border: 1px solid" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="my-5">ALPHA-PIR-PLUS Air Duct System</h3>
                                <p class="my-5">Designed for hygiene-critical environments like hospitals and food
                                    industries, with surface resistance to bacteria and microbes. Constructed from PIR
                                    panels with durable aluminium foil.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Thermal conductivity: 0.022 W/mK</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Compressive strength: > 200 kPa</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Closed cell content: > 90%</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Fire propagation class 0</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tab 3 -->
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                        src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PF-Air-Duct-System-ADn-n.jpg"
                                        style="border: 1px solid" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="my-5">ALPHA-PF Air Duct System</h3>
                                <p class="my-5">Premium pre-insulated Phenolic air duct system, ideal for a wide range
                                    of HVAC applications requiring high thermal and fire performance.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Thermal conductivity: 0.023 W/mK</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Closed cell content: > 90%</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Pressure: up to 2000 Pa</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Fire class: UL 723, BS 476-6/7</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tab 4 -->
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                        src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PF-PLUS-Air-Duct-System-AD.jpg"
                                        style="border: 1px solid" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="my-5">ALPHA-PF-PLUS Air Duct System</h3>
                                <p class="my-5">Engineered for projects demanding strict fire/smoke integrity. Features
                                    reinforced aluminum foil facing with fiberglass for superior protection and
                                    performance.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Thermal conductivity: 0.023 W/mK</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Pressure: up to 1000 Pa</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Air velocity: up to 15 m/s</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Fire class: UL 181, BS 476-6/7</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->


<!-- Product List Start -->
<div class="container py-5">
    <div class="text-center">
        <h5 class="fw-bold text-primary">Product List</h5>
        <h2 class="display-6 mb-5"> ALPHA-PIR PANELS
        </h2>
    </div>
    <p>ALPHA-PIR panels consist of a formaldehyde free, fiber free, high performance rigid thermoset Polyisocyanurate
        foam core faced on both sides with an extremely durable, protective, low vapor permeability aluminium foil.
        The foam core is produced using a CFC / HCFC free blowing agent having a zero Ozone Depletion Potential (ODP)
        and a Global Warming Potential (GWP) lower than 5.
        The aluminium foil is bonded to the foam core by heat reaction during the manufacturing process without using
        additional adhesives. The aluminium foil is lacquered with a factory applied corrosion and UV resistant polymer
        coating.
    </p>

    <h5 class="text-dark py-3">Alpha-PIR Panel for Internal Use</h5>

    <!-- Panel 1: AD-PIR-12-10 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL FOR INTERNAL USE/AD-PIR-12-10.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-12-10</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 12 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 50 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> embossed / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 80 micron</p>
        </div>
    </div>

    <!-- Panel 2: AD-PIR-20-10 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL FOR INTERNAL USE/AD-PIR-20-10.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-20-10</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 20 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 50 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> embossed / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 80 micron</p>
        </div>
    </div>

    <!-- Panel 3: AD-PIR-30-10 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL FOR INTERNAL USE/AD-PIR-30-10.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-30-10</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 30 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 50 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> embossed / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 80 micron</p>
        </div>
    </div>


    <h5 class="text-dark py-3">Alpha-PIR Panel for External Use</h5>
    <!-- Panel 1: AD-PIR-20-20 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL FOR EXTERNAL USE/AD-PIR-20-20.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-20-20</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 20 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 60 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> embossed / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 200 micron</p>
        </div>
    </div>

    <!-- Panel 2: AD-PIR-30-20 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL FOR EXTERNAL USE/AD-PIR-30-20.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-30-20</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 30 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 60 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> embossed / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 200 micron</p>
        </div>
    </div>


    <h5 class="text-dark py-3">Alpha-PIR Panel with Smooth Facer</h5>

    <!-- Panel 1: AD-PIR-S-20-10 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL WITH SMOOTH FACER/AD-PIR-S-20-10.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-S-20-10</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 20 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 55 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> smooth / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 80 micron</p>
        </div>
    </div>

    <!-- Panel 2: AD-PIR-S-20-20 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL WITH SMOOTH FACER/AD-PIR-S-20-20.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-S-20-20</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 20 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 60 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> smooth / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 200 micron</p>
        </div>
    </div>

    <!-- Panel 3: AD-PIR-S-30-10 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL WITH SMOOTH FACER/AD-PIR-S-30-10.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-S-30-10</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 30 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 55 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> smooth / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 80 micron</p>
        </div>
    </div>

    <!-- Panel 4: AD-PIR-S-30-20 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR PANEL WITH SMOOTH FACER/AD-PIR-S-30-20.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-S-30-20</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 30 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 60 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> smooth / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 200 micron</p>
        </div>
    </div>


    <div class="text-center mx-auto py-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h2 class="display-6 fw-bold">ALPHA-PIR-PLUS PANELS</h2>
    </div>
    <p> ALPHA-PIR-PLUS panels are designed for high-hygiene environments such as hospitals, food processing units, and
        pharmaceutical facilities. They feature a fiber-free, formaldehyde-free PIR foam core with aluminium facers that
        resist bacteria and microbes. Manufactured without adhesives and with low environmental impact, these panels
        comply with USFDA, APHA, ISO 11731:2017, and other microbial resistance standards.</p>
    <h5 class="text-dark py-3">Alpha-PIR-Plus Panels</h5>

    <!-- Panel 1: AD-PIR-PLUS-20-10 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR-PLUS PANELS/AD-PIR-PLUS-20-10.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-PLUS-20-10</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 20 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 55 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> smooth / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 80 micron</p>
        </div>
    </div>

    <!-- Panel 2: AD-PIR-PLUS-20-20 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR-PLUS PANELS/AD-PIR-PLUS-20-20.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-PLUS-20-20</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 20 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 60 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> smooth / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 200 micron</p>
        </div>
    </div>

    <!-- Panel 3: AD-PIR-PLUS-30-10 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR-PLUS PANELS/AD-PIR-PLUS-30-10.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-PLUS-30-10</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 30 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 55 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> smooth / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 80 micron</p>
        </div>
    </div>

    <!-- Panel 4: AD-PIR-PLUS-30-20 -->
    <div class="row g-3 bg-white my-5 p-3 rounded box-shadow-card" style="transition: all 0.3s ease; cursor: pointer;"
        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/ALPHA-PIR-PLUS PANELS/AD-PIR-PLUS-30-20.png"
                alt="Panel" class="img-fluid p-2" />
        </div>
        <div class="col-md-9 border-start border-4 border-primary ps-4">
            <h5 class="text-primary fw-bold">AD-PIR-PLUS-30-20</h5>
            <p class="mb-1"><span class="text-dark">Thickness:</span> 30 mm</p>
            <p class="mb-1"><span class="text-dark">Minimum density:</span> 60 kg/m³</p>
            <p class="mb-1"><span class="text-dark">Dimensions:</span> 4000 mm x 1200 mm and 3000 mm x 1200 mm</p>
            <p class="mb-1"><span class="text-dark">Aluminium foil finish:</span> smooth / embossed</p>
            <p class="mb-0"><span class="text-dark">Aluminium foil thickness:</span> 80 micron / 200 micron</p>
        </div>
    </div>


    <!-- <h5 class="text-dark py-3">Accessories</h5> -->
    <h2 class="display-6 text-center fw-bold py-5">Accessories</h2>
    <div class="row g-4">

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AIF-20.png"
                            alt="AD-F-AIF-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM INVISIBLE FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AIF-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AIF-30.png"
                            alt="AD-F-AIF-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM INVISIBLE FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AIF-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AIFB-20.png"
                            alt="AD-F-AIFB-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM INVISIBLE FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AIFB-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AIFB-30.png"
                            alt="AD-F-AIFB-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM INVISIBLE FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AIFB-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PIF-20.png"
                            alt="AD-F-PIF-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER INVISIBLE FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PIF-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PHB-2030.png"
                            alt="AD-F-PHB-20/30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER H BAYONET</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PHB-20/30</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PIFB-20.png"
                            alt="AD-F-PIFB-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER INVISIBLE FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PIFB-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PIFB-20.png"
                            alt="AD-F-PIFB-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER INVISIBLE FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PIFB-20</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-ACF-20.png"
                            alt="AD-F-ACF-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM CHAIR FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-ACF-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-ACF-30.png"
                            alt="AD-F-ACF-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM CHAIR FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-ACF-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-ACFB-20.png"
                            alt="AD-F-ACFB-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM CHAIR FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-ACFB-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-ACFB-30.png"
                            alt="AD-F-ACFB-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM CHAIR FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-ACFB-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AUF-20.png"
                            alt="AD-F-AUF-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM U FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AUF-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AUF-30.png"
                            alt="AD-F-AUF-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM U FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AUF-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AUFB-20.png"
                            alt="AD-F-AUFB-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM U FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AUFB-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AUFB-30.png"
                            alt="AD-F-AUFB-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM U FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AUFB-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AFF-20.png"
                            alt="AD-F-AFF-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM F FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AFF-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AFF-30.png"
                            alt="AD-F-AFF-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM F FLANGE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AFF-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AFFB-20.png"
                            alt="AD-F-AFFB-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM F FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AFFB-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-AFFB-30.png"
                            alt="AD-F-AFFB-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM F FLANGE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-AFFB-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PCA-20.png"
                            alt="AD-F-PCA-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER COVERING ANGLE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PCA-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 78 mm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PCA-30.png"
                            alt="AD-F-PCA-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER COVERING ANGLE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PCA-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 40 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 78 mm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PCAB-20.png"
                            alt="AD-F-PCAB-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER COVERING ANGLE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PCAB-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 78 mm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PCAB-30.png"
                            alt="AD-F-PCAB-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER COVERING ANGLE-BLUE</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PCAB-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 40 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 78 mm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-GIC-20.png"
                            alt="AD-F-GIC-20" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">GALVANIZED CORNER</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-GIC-20</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 20 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 80 mm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-GIC-30.png"
                            alt="AD-F-GIC-30" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">GALVANIZED CORNER</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-GIC-30</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 30 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 100 mm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-ARB.png"
                            alt="AD-F-ARB" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">ALUMINIUM REINFORCEMENT BAR</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-ARB</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 14 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 4 m</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="transition: all 0.3s ease; cursor: pointer;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
            <div class="bg-white p-3 rounded box-shadow-card h-100">
                <div class="row g-3">
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/alpha_system/accessories/AD-F-PCFC.png"
                            alt="AD-F-PCFC" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="text-primary fw-bold">POLYMER CROSS FIXING CONNECTOR</h6>
                        <p class="mb-1"><span class="text-dark">Code:</span> AD-F-PCFC</p>
                        <p class="mb-1"><span class="text-dark">Size:</span> 118 mm</p>
                        <p class="mb-0"><span class="text-dark">Length:</span> 118 mm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product List End -->


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