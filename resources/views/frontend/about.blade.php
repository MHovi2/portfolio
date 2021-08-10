@extends('frontend.layout')
@section('main')
    <div class="about">
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1>ABOUT <span>ME</span></h1>
            <span class="title-bg">Resume</span>
        </section>
        <!-- Page Title Ends -->
        <section class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <div class="row">
                    <!-- Personal Info Starts -->
                    <div class="col-12 col-lg-5 col-xl-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                            </div>
                            <div class="col-12 d-block d-sm-none">
                                <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                            </div>
                            @foreach ($data as $info)
                                <div class="col-6">

                                    <ul class="about-list list-unstyled open-sans-font">

                                        <li> <span class="title">first name :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['first_name'] }}</span>
                                        </li>
                                        <li> <span class="title">last name :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['last_name'] }}</span>
                                        </li>
                                        <li> <span class="title">Age :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['age'] }}
                                                Years</span>
                                        </li>
                                        <li> <span class="title">Nationality :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['nationality'] }}</span>
                                        </li>
                                        <li> <span class="title">Freelance :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['freelance'] }}</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="about-list list-unstyled open-sans-font">
                                        <li> <span class="title">Address :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['address'] }}</span>
                                        </li>
                                        <li> <span class="title">phone :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+{{ $info['phone'] }}</span>
                                        </li>
                                        <li> <span class="title">Email :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['email'] }}</span>
                                        </li>
                                        <li> <span class="title">Skype :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['skype'] }}</span>
                                        </li>
                                        <li> <span class="title">langages :</span> <span
                                                class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $info['language'] }}</span>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach


                            <div class="col-12 mt-3">
                                <a href="{{ route('about') }}" class="btn btn-download">Download CV</a>
                            </div>
                        </div>
                    </div>
                    <!-- Personal Info Ends -->
                    <!-- Boxes Starts -->
                    <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">12</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">years of <span
                                            class="d-block">experience</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">97</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">completed <span
                                            class="d-block">projects</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats">
                                    <h3 class="poppins-font position-relative">81</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span
                                            class="d-block">customers</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats">
                                    <h3 class="poppins-font position-relative">53</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">awards <span
                                            class="d-block">won</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxes Ends -->
                </div>
                <hr class="separator">
                <!-- Skills Starts -->
                <div class="row">
                    <div class="col-12">
                        <h3
                            class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">
                            My
                            Skills</h3>
                    </div>
                    @foreach ($data2 as $info2)
                        <div class="col-6 col-md-3 mb-3 mb-sm-5">
                            <div class="c100 p{{ $info2['html'] }}">
                                <span>{{ $info2['html'] }}%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-sm-5">
                            <div class="c100 p{{ $info2['js'] }}">
                                <span>{{ $info2['js'] }}%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-sm-5">
                            <div class="c100 p{{ $info2['css'] }}">
                                <span>{{ $info2['css'] }}%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-sm-5">
                            <div class="c100 p{{ $info2['php'] }}">
                                <span>{{ $info2['php'] }}%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-sm-5">
                            <div class="c100 p{{ $info2['wp'] }}">
                                <span>{{ $info2['wp'] }}%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">wordpress</h6>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-sm-5">
                            <div class="c100 p{{ $info2['jquery1'] }}">
                                <span>{{ $info2['jquery1'] }}%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-sm-5">
                            <div class="c100 p{{ $info2['laravel'] }}">
                                <span>{{ $info2['laravel'] }}%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">laravel</h6>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-sm-5">
                            <div class="c100 p{{ $info2['bstrap'] }}">
                                <span>{{ $info2['bstrap'] }}%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">BootStrap</h6>
                        </div>
                    @endforeach


                </div>
                <!-- Skills Ends -->
                <hr class="separator mt-1">
                <!-- Experience & Education Starts -->
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience
                            <span>&</span> Education
                        </h3>
                    </div>
                    <div class="col-lg-6 m-15px-tb">
                        <div class="resume-box">
                            <ul>
                                @foreach ($edu as $edu)
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-graduation-cap"></i>
                                        </div>
                                        <span class="time open-sans-font text-uppercase">{{ $edu['date'] }} </span>
                                        <h5 class="poppins-font text-uppercase">{{ $edu['title'] }}<span
                                                class="place open-sans-font">Passed</span></h5>
                                        <p class="open-sans-font">{{ $edu['description'] }} </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 m-15px-tb">
                        <div class="resume-box">
                            <ul>
                                @foreach ($exp as $exp)
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <span class="time open-sans-font text-uppercase">{{ $exp['date'] }}</span>
                                        <h5 class="poppins-font text-uppercase">{{ $exp['title'] }}<span
                                                class="place open-sans-font">Achive</span></h5>
                                        <p class="open-sans-font">{{ $exp['description'] }} </p>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Experience & Education Ends -->
            </div>
        </section>
    </div>
@endsection
