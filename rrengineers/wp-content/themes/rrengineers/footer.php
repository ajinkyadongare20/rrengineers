<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rrengineers
 */

?>

<!-- Footer Start -->
<div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-6 pe-lg-5">
            <a href="<?php echo site_url('/index'); ?>" class="navbar-brand d-flex align-items-center mx-auto mb-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/rr_logo.png" alt="RR Engineers Logo"
                    style="height: 60px;">
                <!-- <h1 class="m-0 fs-5 text-white">RREngineers & Contractors</h1> -->
            </a>
            <p>Established in the year 2012, RR Engineers & Contractors is a leading firm offering Pre-Insulated Ducting
                Systems, Eco Panels, Spiral Ducting, CNC Machines, Fabrication Tools, and Ducting Accessories. Known for
                quality, durability, and precision, our products serve the needs of commercial, industrial, and
                residential projects.</p>
            <p><i class="fa fa-map-marker-alt me-2"></i>NO-2, Shree Ganesh Vastu, Ashiyana Park-2, Opp. Gaikwad Petrol
                Pump, Aundh, Pune – 411007, Maharashtra, India</p>
            <p><i class="fa fa-phone-alt me-2"></i>+91 9421677901, 9881301270</p>
            <p><i class="fa fa-envelope me-2"></i>sales@rrengineers.in</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2"
                    href="https://www.facebook.com/RREngineersContractorsPune" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2"
                    href="https://www.youtube.com/channel/UCNwP4fdDR8f_Z2SuZs3MKvQ?view_as=subscriber" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2"
                    href="https://www.linkedin.com/company/rr-engineers-and-contractors/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="https://x.com/engineers_rr"
                    target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 ps-lg-5">
            <div class="row g-5">
                <div class="col-sm-6">
                    <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Services</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Evaporative
                            Cooling</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Pal Ducting
                            Material</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h4 class="text-white text-uppercase mb-4">Other Products</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>CNC Machine</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Eco Panels</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Spiral Ducting</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Fabrication
                            Tools</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Ducting Accessories</a>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h4 class="text-white text-uppercase mb-4">Newsletter</h4>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 20px 30px;"
                                placeholder="Your Email Address">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="py-4 px-5 text-center text-md-start">
            <p class="mb-0">&copy; <a class="text-primary" href="#">RR Engineers & Contractors</a>. All Rights Reserved.
            </p>
        </div>
        <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
            <p class="mb-0">Designed by <a class="text-dark" href="https://lealsolution.com/" target="_blank">Leal
                    Software Solution Pvt Ltd</a></p>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- CounterUp JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/tempusdominus/js/moment.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>