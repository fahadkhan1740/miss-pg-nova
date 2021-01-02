<x-ar-master>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- banner start -->
    <div class="banner-area banner-style-one" style="background-image:url(/img/bg/1.png);">

        <div class="border1"></div>
        <div class="border2"></div>
        <div class="border3"></div>
        <div class="border4"></div>

        <div class="banner-slider banner-slide1">
            <div class="banner-bg-style-one">
                <div class="container">
                    <div class="row h-100vh">
                        <div class="col-lg-6">
                            <div class="banner-inner-style-one">
                                <p data-animation-in="fadeInLeft">FUEL YOUR</p>
                                <h1 class="title1" data-animation-in="fadeInDown"><span class="color-main">BODY</span>
                                    FITNESS</h1>
                                <div class="btn-wrapper" data-animation-in="fadeInUp">
                                    <a href="#" class="btn btn-slider">Be one of us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bg-style-one">
                <div class="container">
                    <div class="row h-100vh">
                        <div class="col-lg-6">
                            <div class="banner-inner-style-one">
                                <p data-animation-in="fadeInLeft">Improve</p>
                                <h1 class="title1" data-animation-in="fadeInDown"><span class="color-main">Your</span>
                                    Health</h1>
                                <div class="btn-wrapper" data-animation-in="fadeInUp">
                                    <a href="#" class="btn btn-slider">Be one of us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bg-style-one">
                <div class="container">
                    <div class="row h-100vh">
                        <div class="col-lg-6">
                            <div class="banner-inner-style-one">
                                <p data-animation-in="fadeInLeft">Let's Change</p>
                                <h1 class="title1" data-animation-in="fadeInDown"><span class="color-main">Life</span>
                                    Style</h1>
                                <div class="btn-wrapper" data-animation-in="fadeInUp">
                                    <a href="#" class="btn btn-slider">Be one of us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bg-style-one">
                <div class="container">
                    <div class="row h-100vh">
                        <div class="col-lg-6">
                            <div class="banner-inner-style-one">
                                <p data-animation-in="fadeInLeft">Start YOUR</p>
                                <h1 class="title1" data-animation-in="fadeInDown"><span class="color-main">Gym</span>
                                    Classes</h1>
                                <div class="btn-wrapper" data-animation-in="fadeInUp">
                                    <a href="#" class="btn btn-slider">Be one of us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- social icon -->
        <ul class="social-icon">
            <li class="icon-list">
                <a href="https://twitter.com/codingeeknet%20" target="_blank" class="icon-text">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="icon-list">
                <a href="https://www.facebook.com/pages/category/Gym-Physical-Fitness-Center/Miss-Platinum-998615896964320/"
                   target="_blank" class="icon-text">
                    <i class="fa fa-facebook-f"></i>
                </a>
            </li>
            <li class="icon-list">
                <a href="https://www.instagram.com/missplatinumkw/" target="_blank" class="icon-text">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li class="icon-list">
                <a href="https://www.youtube.com/channel/UCz1tS-oRzKeElBOd6pIjgLQ" target="_blank" class="icon-text">
                    <i class="fa fa-youtube"></i>
                </a>
            </li>
        </ul>

        <!-- scroll down -->
        <div class="scroll">
            <a href="#home-about">
                <div class="scroll-btn">
                    <span></span>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="banner-small-slider">
            <div class="small-slider">
                @foreach($banners as $banner)
                    <div class="slider-image1"><img src="{{ asset($banner->path) }}" alt=""></div>
                @endforeach
            </div>
            <div class="controler-wrapper d-none d-lg-block">
                <div class="progressbar">
                    <span class="home-slider-progress"></span>
                    <span class="home-slider-progress-active"></span>
                </div>
                <span class="active-controler">01</span><span>/</span><span class="total-controler">04</span>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- home-about start -->
    <div class="home-about" id="home-about">
        <div class="floating-icon" id="service_info_item">
            <div class="floating-icon__is floating-icon-info">
                <i class="flaticon-phone-call"></i>
            </div>
            <!--floating-icon-is-->
            <div class="floating-icon__is floating-icon-location">
                <i class="flaticon-placeholder"></i>
            </div>
            <!--floating-icon-is-->
            <div class="floating-icon__is floating-icon-message">
                <i class="flaticon-email"></i>
            </div>
            <!--floating-icon-is-->
        </div>
        <!--floating-icon-->

        <div class="container padding-top-100 padding-bottom-94">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5">
                            <div class="left-content-area" id="twentytwenty-container">
                                <img src="{{ asset($aboutUs->before_image_path) }}" alt="editing company image">
                                <img src="{{ asset($aboutUs->after_image_path) }}" alt="editing company image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <div class="about-content">
                                <span>من نحن</span>
                                <h3 class="padding-top-3">مرحبًا بكم في نادي مس بلاتينوم الصحي!</h3>
                                <div style="color: black !important;">
                                    {!! $aboutUs->overview !!}
                                </div>

                                <p dir="ltr">
                                    #Iam_missplatinum
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home-about end -->

    <!-- home service start -->
    <div class="our-service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center padding-bottom-35">
                        <p class="subtitle">{{ __('custom.home.services_we_provide') }}</p>
                        <h1 class="title">{{ __('custom.home.services') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area service-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row d-flex justify-content-between">
                            @foreach($services->take(2) as $service)
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="service-box-style-01">
                                        <div class="sb-icon">
                                            <a href="#"><i class="{{ $service->icon ?? 'flaticon-weight' }}" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="sb-content">
                                            <h4 class="title">{{ $service->title }}</h4>
                                            <div style="color: black !important;">
                                                {!! $service->short_description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row d-flex justify-content-between">
                            @foreach($services->skip(2)->take(2) as $service)
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="service-box-style-01">
                                        <div class="sb-icon">
                                            <a href="#"><i class="{{ $service->icon ?? 'flaticon-weight' }}" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="sb-content">
                                            <h4 class="title">{{ $service->title }}</h4>
                                            <div style="color: black !important;">
                                                {!! $service->short_description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="row d-flex justify-content-between">
                            @foreach($services->skip(4)->take(2) as $service)
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="service-box-style-01">
                                        <div class="sb-icon">
                                            <a href="#"><i class="{{ $service->icon ?? 'flaticon-weight' }}" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="sb-content">
                                            <h4 class="title">{{ $service->title }}</h4>
                                            <div style="color: black !important;">
                                                {!! $service->short_description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home service end -->

    <!-- home explore start -->
    <div class="explore-area explore-bg margin-top-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="explore-title">
                        <div class="title">
                            <h2>Explore life fitness</h2>
                        </div>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-element btn-lg btn-main">Join with us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home explore end -->

    <!-- pricing start -->
    <div class="pricing-area padding-top-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title padding-bottom-65 text-center">
                        <p class="subtitle">Become A Part of us</p>
                        <h1 class="title">Our Membership</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-style-01 pricing-item-bg1">
                        <h2 class="off-style-1">10% Off</h2>
                        <div class="pricing-icon text-center">
                            <a href="#"><i class="flaticon-weight" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-title">
                            <h3>Biginner plan</h3>
                        </div>
                        <ul>
                            <li><span>$50</span></li>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Select
                                Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-style-01 active pricing-item-bg2">
                        <h2 class="off-style-1">20% Off</h2>
                        <div class="pricing-icon text-center">
                            <a href="#"><i class="flaticon-weight-lifting" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-title">
                            <h3>Intermediate plan</h3>
                        </div>
                        <ul>
                            <li><span>$70</span></li>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Select
                                Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-style-01 pricing-item-bg3">
                        <h2 class="off-style-1">20% Off</h2>
                        <div class="pricing-icon text-center">
                            <a href="#"><i class="flaticon-woman" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-title">
                            <h3>Ultimate plan</h3>
                        </div>
                        <ul>
                            <li><span>$90</span></li>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Select
                                Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing end -->

    <!-- brand-area start -->
    <div class="brand-area margin-top-80">
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

</x-ar-master>
