@extends('frontend.layout')
@section('main')
    <div class="portfolio">
        <!-- Page Title Starts -->
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1>my <span>portfolio</span></h1>
            <span class="title-bg">works</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
            <div id="grid-gallery" class="container grid-gallery">
                <!-- Portfolio Grid Starts -->
                <section class="grid-wrap">
                    <ul class="row grid">
                        @foreach ($data as $info1)
                            <!-- Portfolio Item Starts -->
                            <li>
                                <figure>
                                    <img src="{{ $info1['image'] }}" alt="Portolio Image" />
                                    <div><span>{{ $info1['project_name'] }}</span></div>
                                </figure>
                            </li>
                            <!-- Portfolio Item Ends -->
                        @endforeach


                    </ul>
                </section>
                <!-- Portfolio Grid Ends -->
                <!-- Portfolio Details Starts -->
                <section class="slideshow">
                    <ul>
                        @foreach ($data as $info)
                            <!-- Portfolio Item Detail Starts -->
                            <li>
                                <figure>
                                    <!-- Project Details Starts -->
                                    <figcaption>
                                        <h3>{{ $info['project_name'] }}</h3>
                                        <div class="row open-sans-font">
                                            <div class="col-6 mb-2">
                                                <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                                </span>: <span
                                                    class="ft-wt-600 uppercase">{{ $info['project_name'] }}</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                                <span class="ft-wt-600 uppercase">{{ $info['clint_name'] }}</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                                <span class="ft-wt-600 uppercase">{{ $info['languages'] }}</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                                </span>: <span class="ft-wt-600 uppercase"><a
                                                        href="{{ $info['preview_link'] }}"
                                                        target="_blank">{{ $info['preview_link'] }}</a></span>
                                            </div>
                                        </div>
                                    </figcaption>
                                    <!-- Project Details Ends -->
                                    <!-- Main Project Content Starts -->
                                    <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel"
                                        data-interval="false">
                                        <!-- The slideshow -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ $info['image'] }}" alt="slide 1">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Main Project Content Ends -->
                                </figure>
                            </li>
                            <!-- Portfolio Item Detail Ends -->

                        @endforeach







                    </ul>
                    <!-- Portfolio Navigation Starts -->
                    <nav>
                        <span class="icon nav-prev"><img src="assets/frontend/img/projects/navigation/left-arrow.png"
                                alt="previous"></span>
                        <span class="icon nav-next"><img src="assets/frontend/img/projects/navigation/right-arrow.png"
                                alt="next"></span>
                        <span class="nav-close"><img src="assets/frontend/img/projects/navigation/close-button.png"
                                alt="close"> </span>
                    </nav>
                    <!-- Portfolio Navigation Ends -->
                </section>
            </div>
        </section>
        <!-- Main Content Ends -->
    </div>
@endsection
