@extends('frontend.layout')
@section('main')
    <div class="home">
        <section
            class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
            <div class="color-block d-none d-lg-block"></div>
            <div class="row home-details-container align-items-center">
                <div class="col-lg-4 bg position-fixed d-none d-lg-block">
                </div>
                <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                    <div>
                        @foreach ($info as $info)
                            <img src="{{ $info['image'] }}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none"
                                alt="my picture" />
                            <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">
                                {{ $info['title'] }}
                            </h6>
                            <h1 class="text-uppercase poppins-font"><span>I'm</span> {{ $info['name'] }}</h1>
                            <p class="open-sans-font">{{ $info['description'] }}</p>
                        @endforeach
                        <a href="about.html" class="btn btn-about">more about me</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
