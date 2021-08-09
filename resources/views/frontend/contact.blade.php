@extends('frontend.layout')
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
                        @foreach ($cdinfo as $cdinfo)
                            <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">{{ $cdinfo['title'] }}</h3>
                            <p class="open-sans-font mb-3">{{ $cdinfo['description'] }}</p>
                            <p class="open-sans-font custom-span-contact position-relative">
                                <i class="fa fa-envelope-open position-absolute"></i>
                                <span class="d-block">mail me</span>{{ $cdinfo['email'] }}
                            </p>
                            <p class="open-sans-font custom-span-contact position-relative">
                                <i class="fa fa-phone-square position-absolute"></i>
                                <span class="d-block">call me</span>+880 {{ $cdinfo['phone'] }}
                            </p>
                        @endforeach

                        <ul class="social list-unstyled pt-1 mb-5">
                            @foreach ($slinfo as $slinfo)
                                <li class="facebook"><a title="Facebook" href="{{ $slinfo['link1'] }}"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li class="twitter"><a title="Twitter" href="{{ $slinfo['link2'] }}"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="youtube"><a title="Github" href="{{ $slinfo['link3'] }}"><i
                                            class="fab fa-github-alt"></i></a>
                                </li>
                                <li class="dribbble"><a title="Dribbble" href="{{ $slinfo['link4'] }}"><i
                                            class="fab fa-dribbble"></i></a>
                                </li>
                            @endforeach

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
