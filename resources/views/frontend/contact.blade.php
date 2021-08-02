﻿@extends('frontend.layout')
@section('main')
    <div class="contact">
        <!-- Page Title Starts -->
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1>get in <span>touch</span></h1>
            <span class="title-bg">contact</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <div class="row">
                    <!-- Left Side Starts -->
                    <div class="col-12 col-lg-4">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                        <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always open to discussing new
                            projects, creative ideas or opportunities to be part of your visions.</p>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <i class="fa fa-envelope-open position-absolute"></i>
                            <span class="d-block">mail me</span>mehedi174629@gmial.com
                        </p>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <i class="fa fa-phone-square position-absolute"></i>
                            <span class="d-block">call me</span>+880 17 58 27 86 04
                        </p>
                        <ul class="social list-unstyled pt-1 mb-5">
                            <li class="facebook"><a title="Facebook" href="https://www.facebook.com/ovi15128/"><i
                                        class="fab fa-facebook"></i></a>
                            </li>
                            <li class="twitter"><a title="Twitter" href="https://twitter.com/MehediH92640417"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="youtube"><a title="Github" href="https://github.com/mhovishek"><i
                                        class="fab fa-github-alt"></i></a>
                            </li>
                            <li class="dribbble"><a title="Dribbble" href="https://dribbble.com/MHovi"><i
                                        class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Left Side Ends -->
                    <!-- Contact Form Starts -->
                    <div class="col-12 col-lg-8">
                        <form class="contactform" method="post" action="php/process-form.php">
                            <div class="contactform">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <input type="text" name="name" placeholder="YOUR NAME">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="email" name="email" placeholder="YOUR EMAIL">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" name="subject" placeholder="YOUR SUBJECT">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                                        <button type="submit" class="btn btn-contact">Send Message</button>
                                    </div>
                                    <div class="col-12 form-message">
                                        <span class="output_message text-center font-weight-600 text-uppercase"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form Ends -->
                </div>
            </div>

        </section>
        <!-- Template JS Files -->
    </div>
@endsection
