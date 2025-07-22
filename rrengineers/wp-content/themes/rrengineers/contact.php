<?php
/**
 * The main template file
 * Template Name: Contact
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
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Contact</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Contact Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-3 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4 px-lg-5">
            <div class="mx-auto text-center">
                <h1 class="mb-4 mb-md-5">Connect with RR Engineers & Contractors</h1>
            </div>
            <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                            <div class="py-2">
                                <div class="text-uppercase text-primary text-start fw-bold fs-6 mb-3">RR Engineers & Contractors</div>

                                <h5 class="mt-4">Email:</h5>
                                <p>sales@rrengineers.com</p>
                                <h5 class="mt-4">Phone:</h5>
                                <p>+91 9421677901 / +91 9881301270</p>
                                <h5 class="mt-4">Office Address:</h5>
                                <p>
                                    NO-2, Shree Ganesh Vastu, Ashiyana Park-2,<br>
                                    Opp. Gaikwad Petrol Pump, Aundh,<br>
                                    Pune – 411007, Maharashtra, India
                                </p>

                                <h5 class="mt-4">Social Media:</h5>
                                <p>Follow us for updates and insights:</p>
                                <div class="d-flex gap-3">
                                    <a class="btn btn-outline-primary rounded-pill" href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a class="btn btn-outline-primary rounded-pill" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary rounded-pill" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary rounded-pill" href="https://wa.me/9876543210" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="py-2">
                            <form action="https://api.web3forms.com/submit" method="POST">
                                <div class="row g-3">
                                    <input type="hidden" name="access_key" value="c9db945c-32e3-414e-8f98-ea2ac4166cf7">

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" required>
                                            <label for="mobile">Mobile Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="inquiry" name="inquiry" required>
                                                <option value="" selected disabled></option>
                                                <option value="New Project">New Project</option>
                                                <option value="Ducting Services">Ducting Services</option>
                                                <option value="HVAC Turnkey Solutions">HVAC Turnkey Solutions</option>
                                                <option value="Vendor">Vendor</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <label for="inquiry">Type of Inquiry*</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php
// get_sidebar();
get_footer();
