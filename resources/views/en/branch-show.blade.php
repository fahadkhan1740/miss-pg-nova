<x-en-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.$branch->banner_path }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.banner.branch') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('about', ['locale' => 'en']) }}">{{ __('custom.banner.branch') }}</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about start -->
    <div class="about-page-top">
        <div class="container section-padding">
            <div class="row">
                <div class="col-lg-6 col-xl-6 d-flex">
                    <div class="about-content align-self-center">
                        <h3 class="about-title">{{ $branch->name }}</h3>

                        <div style="color: black !important;">
{{--                            {!! $aboutUs->overview !!}--}}
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="about-left">
                        <div class="thumb">
                            <img src="{{ asset('img/bg/about-right') }}.png" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- project-counter start -->
    <div class="project-counter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="project-counter__boxes">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="project-counter__box">
                                    <div class="project-counter__box-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/counterup/1.png') }}" alt="counter img">
                                        </div>
                                        <span class="project-counter__is">1250</span>
                                        <span class="project-counter__text">all equipments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="project-counter__box">
                                    <div class="project-counter__box-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/counterup/2.png') }}" alt="counter img">
                                        </div>
                                        <span class="project-counter__is">200</span>
                                        <span class="project-counter__text">Trainers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="project-counter__box">
                                    <div class="project-counter__box-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/counterup/3.png') }}" alt="counter img">
                                        </div>
                                        <span class="project-counter__is">2500</span>
                                        <span class="project-counter__text">All Trainee</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="project-counter__box">
                                    <div class="project-counter__box-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/counterup/4.png') }}" alt="counter img">
                                        </div>
                                        <span class="project-counter__is">8</span>
                                        <span class="project-counter__text">World Challange</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="project-counter__box">
                                    <div class="project-counter__box-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/counterup/5.png') }}" alt="counter img">
                                        </div>
                                        <span class="project-counter__is">12</span>
                                        <span class="project-counter__text">Our Branch</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </div>
    <!--project-counter-->

    <!-- home explore start -->
    <div class="explore-area explore-bg margin-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="explore-title">
                        <h2>Explore life fitness</h2>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-element btn-lg btn-main">Join with us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home explore end -->

    <!-- mission-area start -->
    <div class="mission-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mission-content">
                        <h3 class="serial">01</h3>
                        <div class="title">
                            <h1>Our Mission & Vision</h1>
                        </div>
                        <div class="mission-content">
                            <div style="color: black;">
{{--                                {!! $aboutUs->mission_vision !!}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- brand-area start -->
    <div class="brand-area margin-top-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand1.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand2.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand3.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand4.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand5.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand1.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand2.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand3.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand4.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand5.png') }}" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->

</x-en-master>
