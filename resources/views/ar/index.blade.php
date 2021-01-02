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

        <!-- video button -->
        <div class="cart-btn">
            <a href="#"><i class="flaticon-cart"></i><span class="badge">3</span></a>
        </div>

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
                        <p class="subtitle">Service we provide</p>
                        <h1 class="title">Our Services</h1>
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
                                            <a href="#"><i class="flaticon-weight" aria-hidden="true"></i></a>
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
                                            <a href="#"><i class="flaticon-weight" aria-hidden="true"></i></a>
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
                                            <a href="#"><i class="flaticon-weight" aria-hidden="true"></i></a>
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

    <!-- popular classes start -->
    <div class="popular-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title title-padding-bottom text-center">
                        <p class="subtitle">What do you want to learn today?</p>
                        <h1 class="title">Popular Class</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular-slider">
                        <div class="single-popular-item">
                            <div class="popular-item-style-01">
                                <div class="thumb">
                                    <img src="{{ asset('img/home/popular/1.png') }}" alt="slider1">
                                </div>
                                <div class="content">
                                    <p>Muscles Build</p>
                                </div>
                                <div class="hover-element">
                                    <div class="hover-top">
                                        <span>Body Shaper</span><br>
                                        <a href="#" class="btn">H. Hines</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Sat <br><span>10:00am</span></a></li>
                                        <li><a href="#">Sun <br><span>12:00am</span></a></li>
                                        <li><a href="#">Mon <br><span>07:00am</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-popular-item">
                            <div class="popular-item-style-01">
                                <div class="thumb">
                                    <img src="{{ asset('img/home/popular/2.png') }}" alt="slider1">
                                </div>
                                <div class="content">
                                    <p>Body Build</p>
                                </div>
                                <div class="hover-element">
                                    <div class="hover-top">
                                        <span>Body Shaper</span><br>
                                        <a href="#" class="btn">Sharifur</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Sat <br><span>08:00am</span></a></li>
                                        <li><a href="#">Sun <br><span>09:00am</span></a></li>
                                        <li><a href="#">Wed <br><span>10:00am</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-popular-item">
                            <div class="popular-item-style-01">
                                <div class="thumb">
                                    <img src="{{ asset('img/home/popular/3.png') }}" alt="slider1">
                                </div>
                                <div class="content">
                                    <p>Fitness Build</p>
                                </div>
                                <div class="hover-element">
                                    <div class="hover-top">
                                        <span>Body Shaper</span><br>
                                        <a href="#" class="btn">Naeem</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Sat <br><span>05:00am</span></a></li>
                                        <li><a href="#">Mon <br><span>06:00am</span></a></li>
                                        <li><a href="#">Tues <br><span>08:00am</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-popular-item">
                            <div class="popular-item-style-01">
                                <div class="thumb">
                                    <img src="{{ asset('img/home/popular/4.png') }}" alt="slider1">
                                </div>
                                <div class="content">
                                    <p>Mind Refress</p>
                                </div>
                                <div class="hover-element">
                                    <div class="hover-top">
                                        <span>Body Shaper</span><br>
                                        <a href="#" class="btn">Janice Mcreaken</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Sat <br><span>10:00am</span></a></li>
                                        <li><a href="#">Thurs <br><span>10:00am</span></a></li>
                                        <li><a href="#">Fri <br><span>10:00am</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-popular-item">
                            <div class="popular-item-style-01">
                                <div class="thumb">
                                    <img src="{{ asset('img/home/popular/1.png') }}" alt="slider1">
                                </div>
                                <div class="content">
                                    <p>Muscles Build</p>
                                </div>
                                <div class="hover-element">
                                    <div class="hover-top">
                                        <span>Body Shaper</span><br>
                                        <a href="#" class="btn">John Smith</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Sat <br><span>12:00am</span></a></li>
                                        <li><a href="#">Wed <br><span>10:00am</span></a></li>
                                        <li><a href="#">Fri <br><span>09:00am</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular classes end -->

    <!-- class schedule start -->
    <div class="class-schedule padding-top-93">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center padding-bottom-47">
                        <p class="subtitle">Zarxio Weekly Classes</p>
                        <h1 class="title">Class Schedule</h1>
                    </div>
                </div>
            </div>
            <form>
                <div class="row schedule-bottom schedule-bg-1">
                    <div class="col-lg-12 col-xl-8">
                        <div
                            class="d-flex justify-content-lg-around flex-column flex-lg-row align-items-center text-center">
                            <div class="form-field margin-top-10 margin-bottom-10">
                                <!--Date Picker-->
                                <input type="text" id="datepicker-modal" placeholder="10/19/2019"
                                       class="datepicker-here datepick" data-language='en'
                                       data-date-format="dd/mm/yyyy">
                            </div>
                            <div class="form-field margin-top-10 margin-bottom-10">
                                <input type="text" name="timepicker" class="timepicker resto_timepicker"/>
                            </div>
                            <div class="btn-wrapper margin-top-10 margin-bottom-10">
                                <a href="#" class="btn btn-element btn-normal-size btn-main-color btn-rounded">Find
                                    Class → </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="d-flex flex-row flex-wrap justify-content-center schedule-area">
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 01</p>
                            <p>12:00pm - 01:00pm</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Charif Barrani</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 02</p>
                            <p>01:00pm - 02:00pm</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Sharifur</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 03</p>
                            <p>02:00pm - 03:00pm</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Naeem</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 04</p>
                            <p>03:00pm - 04:00pm</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Asadeee</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 05</p>
                            <p>04:00pm - 05:00pm</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Rasel</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 06</p>
                            <p>05:00am - 06:00am</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Nasir</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 07</p>
                            <p>07:00am - 8:00am</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Salim</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 08</p>
                            <p>09:00am - 10:00am</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Mosabber</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 09</p>
                            <p>11:00am - 12:00am</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Robiul</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 10</p>
                            <p>12:00am - 02:00am</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Refat</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 01</p>
                            <p>02:00am - 3:00am</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Alomgir</a>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item-style-01">
                        <div class="content">
                            <p>Gm Session 02</p>
                            <p>12:00am - 02:00am</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Subrata</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- class schedule end -->

    <!-- partner-area start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="order-2 order-sm-1 col-lg-6 col-xl-7 d-flex align-items-end">
                    <div class="thumb">
                        <img src="{{ asset('img/home/partner.png') }}" alt="partner">
                    </div>
                </div>
                <div class="order-1 order-sm-2 col-lg-6 col-xl-5 d-flex align-items-center">
                    <div class="partner-content">
                        <p>Team challenge</p>
                        <h1>Partner up - <br>Double Power</h1>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Choose
                                Your Partner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partner-area end -->

    <!-- home trainer start -->
    <div class="trainer-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title padding-top-93 padding-bottom-47 text-center">
                        <p class="subtitle">Your Best Partner</p>
                        <h1 class="title">Choose your trainer</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trainer-area margin-bottom-25">
        <div class="container">
            <div class="row class-slider">
                <div class="col-md-6">
                    <div class="row border-custom">
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="thumb">
                                <img src="{{ asset('img/home/trainer/1.png') }}" alt="trainer">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="content">
                                <h3>Dorothy D. Nabors</h3>
                                <h6>Fitness Trainer</h6>
                                <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum
                                    dignissim arcu, vitae convallis</p>
                                <div class="btn-wrapper">
                                    <a href="#"
                                       class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Details</a>
                                </div>
                                <ul class="social">
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
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
                                        <a href="https://www.instagram.com/missplatinumkw/" target="_blank"
                                           class="icon-text">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row border-custom">
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="thumb">
                                <img src="{{ asset('img/home/trainer/2.png') }}" alt="trainer">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="content">
                                <h3>Surunjit kumar</h3>
                                <h6>Health Trainer</h6>
                                <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum
                                    dignissim arcu, vitae convallis</p>
                                <div class="btn-wrapper">
                                    <a href="#"
                                       class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Details</a>
                                </div>
                                <ul class="social">
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
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
                                        <a href="https://www.instagram.com/missplatinumkw/" target="_blank"
                                           class="icon-text">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row border-custom">
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="thumb">
                                <img src="{{ asset('img/home/trainer/3.png') }}" alt="trainer">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="content">
                                <h3>Mushfiqur Rahman</h3>
                                <h6>Body Trainer</h6>
                                <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum
                                    dignissim arcu, vitae convallis</p>
                                <div class="btn-wrapper">
                                    <a href="#"
                                       class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Details</a>
                                </div>
                                <ul class="social">
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
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
                                        <a href="https://www.instagram.com/missplatinumkw/" target="_blank"
                                           class="icon-text">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row border-custom">
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="thumb">
                                <img src="{{ asset('img/home/trainer/4.png') }}" alt="trainer">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="content">
                                <h3>Janice Mcreaken</h3>
                                <h6>Message Trainer</h6>
                                <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum
                                    dignissim arcu, vitae convallis</p>
                                <div class="btn-wrapper">
                                    <a href="#"
                                       class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Details</a>
                                </div>
                                <ul class="social">
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
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
                                        <a href="https://www.instagram.com/missplatinumkw/" target="_blank"
                                           class="icon-text">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row border-custom">
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="thumb">
                                <img src="{{ asset('img/home/trainer/5.png') }}" alt="trainer">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="content">
                                <h3>Dorothy D. Nabors</h3>
                                <h6>Yoga Trainer</h6>
                                <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum
                                    dignissim arcu, vitae convallis</p>
                                <div class="btn-wrapper">
                                    <a href="#"
                                       class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Details</a>
                                </div>
                                <ul class="social">
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
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
                                        <a href="https://www.instagram.com/missplatinumkw/" target="_blank"
                                           class="icon-text">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row border-custom">
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="thumb">
                                <img src="{{ asset('img/home/trainer/6.png') }}" alt="trainer">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="content">
                                <h3>Dorothy D. Nabors</h3>
                                <h6>Gym Trainer</h6>
                                <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum
                                    dignissim arcu, vitae convallis</p>
                                <div class="btn-wrapper">
                                    <a href="#"
                                       class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Details</a>
                                </div>
                                <ul class="social">
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
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
                                        <a href="https://www.instagram.com/missplatinumkw/" target="_blank"
                                           class="icon-text">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row border-custom">
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="thumb">
                                <img src="{{ asset('img/home/trainer/7.png') }}" alt="trainer">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="content">
                                <h3>Dorothy D. Nabors</h3>
                                <h6>Weight Trainer</h6>
                                <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum
                                    dignissim arcu, vitae convallis</p>
                                <div class="btn-wrapper">
                                    <a href="#"
                                       class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Details</a>
                                </div>
                                <ul class="social">
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
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
                                        <a href="https://www.instagram.com/missplatinumkw/" target="_blank"
                                           class="icon-text">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row border-custom">
                        <div class="col-md-5 d-flex align-items-end">
                            <div class="thumb">
                                <img src="{{ asset('img/home/trainer/8.png') }}" alt="trainer">
                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="content">
                                <h3>Dorothy D. Nabors</h3>
                                <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum
                                    dignissim arcu, vitae convallis</p>
                                <div class="btn-wrapper">
                                    <a href="#"
                                       class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Details</a>
                                </div>
                                <ul class="social">
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
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
                                        <a href="https://www.instagram.com/missplatinumkw/" target="_blank"
                                           class="icon-text">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="icon-list">
                                        <a href="#" class="icon-text">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home trainer end -->

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

    <!-- home shopping start -->
    <div class="shopping-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title padding-top-93 padding-bottom-60 text-center">
                        <p class="subtitle">Product For People</p>
                        <h1 class="title">Let's Shopping</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 shopping-slider shopping-slider-item text-center">
                    <div class="shop-single-item">
                        <div class="top-content">
                            <div class="thumb">
                                <img src="{{ asset('img/home/shopping/1.png') }}" alt="shopping">
                            </div>
                            <div class="hover-content">
                                <div class="btn-wrapper desktop-center">
                                    <a href="#" class="btn btn-element btn-normal-size btn-rounded">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <p class="subtitle">Fitness, Accessories</p>
                            <h3><a href="product-details.html">Free Dumbbell Ball</a></h3>
                            <p class="price">
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>34.00
                                    </span>
                                </ins>
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>50.00
                                    </span>
                                </del>
                            </p>
                        </div>
                    </div>
                    <div class="shop-single-item">
                        <div class="top-content">
                            <div class="thumb">
                                <img src="{{ asset('img/home/shopping/2.png') }}" alt="shopping">
                            </div>
                            <div class="hover-content">
                                <div class="btn-wrapper desktop-center">
                                    <a href="#" class="btn btn-element btn-normal-size btn-rounded">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <p class="subtitle">Gym, Accessories</p>
                            <h3><a href="product-details.html">Incline Bench Press</a></h3>
                            <p class="price">
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>34.00
                                    </span>
                                </ins>
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>50.00
                                    </span>
                                </del>
                            </p>
                        </div>
                    </div>
                    <div class="shop-single-item">
                        <div class="top-content">
                            <div class="thumb">
                                <img src="{{ asset('img/home/shopping/3.png') }}" alt="shopping">
                            </div>
                            <div class="hover-content">
                                <div class="btn-wrapper desktop-center">
                                    <a href="#" class="btn btn-element btn-normal-size btn-rounded">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <p class="subtitle">Health, Accessories</p>
                            <h3><a href="product-details.html">Pec Deck Machine</a></h3>
                            <p class="price">
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>34.00
                                    </span>
                                </ins>
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>50.00
                                    </span>
                                </del>
                            </p>
                        </div>
                    </div>
                    <div class="shop-single-item">
                        <div class="top-content">
                            <div class="thumb">
                                <img src="{{ asset('img/home/shopping/4.png') }}" alt="shopping">
                            </div>
                            <div class="hover-content">
                                <div class="btn-wrapper desktop-center">
                                    <a href="#" class="btn btn-element btn-normal-size btn-rounded">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <p class="subtitle">Weight, Accessories</p>
                            <h3><a href="product-details.html">Pull-Down Machine</a></h3>
                            <p class="price">
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>34.00
                                    </span>
                                </ins>
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>50.00
                                    </span>
                                </del>
                            </p>
                        </div>
                    </div>
                    <div class="shop-single-item">
                        <div class="top-content">
                            <div class="thumb">
                                <img src="{{ asset('img/home/shopping/5.png') }}" alt="shopping">
                            </div>
                            <div class="hover-content">
                                <div class="btn-wrapper desktop-center">
                                    <a href="#" class="btn btn-element btn-normal-size btn-rounded">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <p class="subtitle">Yoga, Accessories</p>
                            <h3><a href="product-details.html">Inclined Bench Press</a></h3>
                            <p class="price">
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>34.00
                                    </span>
                                </ins>
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>50.00
                                    </span>
                                </del>
                            </p>
                        </div>
                    </div>
                    <div class="shop-single-item">
                        <div class="top-content">
                            <div class="thumb">
                                <img src="{{ asset('img/home/shopping/12.png') }}" alt="shopping">
                            </div>
                            <div class="hover-content">
                                <div class="btn-wrapper desktop-center">
                                    <a href="#" class="btn btn-element btn-normal-size btn-rounded">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <p class="subtitle">Health, Accessories</p>
                            <h3><a href="product-details.html">Hammer Strength</a></h3>
                            <p class="price">
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>34.00
                                    </span>
                                </ins>
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>50.00
                                    </span>
                                </del>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home shopping end -->

    <!-- shaper-area start -->
    <div class="shaper-area padding-top-85">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="shaper-left h-100">
                        <h1>Body<br> Shapper</h1>
                        <div class="btn-wrapper">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shaper-right h-100">
                        <h1>Cycling</h1>
                        <div class="btn-wrapper desktop-right">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shaper-area end -->

    <!-- news-area start -->
    <div class="news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title title-padding text-center">
                        <p class="subtitle">Zarxio News For You</p>
                        <h1 class="title">Latest News</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-11 news-slider text-center">
                    <div class="news-item-style-01">
                        <div class="thumb">
                            <img src="{{ asset('img/home/news/1.png') }}" alt="news">
                        </div>
                        <div class="content">
                            <div class="blog-meta">
                                <h6 class="d-flex justify-content-between"><a href="#"><i class="fa fa-user-o"
                                                                                          aria-hidden="true"></i> By
                                        Rasel</a><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 9
                                        comments</a></h6>
                            </div>
                            <h3>Cable Pulley gym</h3>
                            <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim
                                arcu, vitae convallis</p>
                        </div>
                        <div class="hover-content">
                            <span class="border-bottom">20 Dec</span><br>
                            <span>2019</span>
                        </div>
                    </div>
                    <div class="news-item-style-01">
                        <div class="thumb">
                            <img src="{{ asset('img/home/news/2.png') }}" alt="news">
                        </div>
                        <div class="content">
                            <div class="blog-meta">
                                <h6 class="d-flex justify-content-between"><a href="#"><i class="fa fa-user-o"
                                                                                          aria-hidden="true"></i> By
                                        Nasir</a><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 7
                                        comments</a></h6>
                            </div>
                            <h3><a href="blog-details.html">Just like a stability</a></h3>
                            <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim
                                arcu, vitae convallis</p>
                        </div>
                        <div class="hover-content">
                            <span class="border-bottom">25 Dec</span><br>
                            <span>2019</span>
                        </div>
                    </div>
                    <div class="news-item-style-01">
                        <div class="thumb">
                            <img src="{{ asset('img/home/news/3.png') }}" alt="news">
                        </div>
                        <div class="content">
                            <div class="blog-meta">
                                <h6 class="d-flex justify-content-between"><a href="#"><i class="fa fa-user-o"
                                                                                          aria-hidden="true"></i> By
                                        Fuad</a><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 4
                                        comments</a></h6>
                            </div>
                            <h3><a href="blog-details.html">Nulla tempus, augue</a></h3>
                            <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim
                                arcu, vitae convallis</p>
                        </div>
                        <div class="hover-content">
                            <span class="border-bottom">24 Jun</span><br>
                            <span>2019</span>
                        </div>
                    </div>
                    <div class="news-item-style-01">
                        <div class="thumb">
                            <img src="{{ asset('img/home/news/4.png') }}" alt="news">
                        </div>
                        <div class="content">
                            <div class="blog-meta">
                                <h6 class="d-flex justify-content-between"><a href="#"><i class="fa fa-user-o"
                                                                                          aria-hidden="true"></i> By
                                        Robin</a><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 8
                                        comments</a></h6>
                            </div>
                            <h3><a href="blog-details.html">Train different parts</a></h3>
                            <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim
                                arcu, vitae convallis</p>
                        </div>
                        <div class="hover-content">
                            <span class="border-bottom">14 Jan</span><br>
                            <span>2019</span>
                        </div>
                    </div>
                    <div class="news-item-style-01">
                        <div class="thumb">
                            <img src="{{ asset('img/home/news/5.png') }}" alt="news">
                        </div>
                        <div class="content">
                            <div class="blog-meta">
                                <h6 class="d-flex justify-content-between"><a href="#"><i class="fa fa-user-o"
                                                                                          aria-hidden="true"></i> By
                                        Asad</a><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 9
                                        comments</a></h6>
                            </div>
                            <h3><a href="blog-details.html">World wide occasion</a></h3>
                            <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim
                                arcu, vitae convallis</p>
                        </div>
                        <div class="hover-content">
                            <span class="border-bottom">10 Jan</span><br>
                            <span>2019</span>
                        </div>
                    </div>
                    <div class="news-item-style-01">
                        <div class="thumb">
                            <img src="{{ asset('img/home/news/6.png') }}" alt="news">
                        </div>
                        <div class="content">
                            <div class="blog-meta">
                                <h6 class="d-flex justify-content-between"><a href="#"><i class="fa fa-user-o"
                                                                                          aria-hidden="true"></i> By
                                        Naeem</a><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 7
                                        comments</a></h6>
                            </div>
                            <h3><a href="blog-details.html">Easy solution here</a></h3>
                            <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim
                                arcu, vitae convallis</p>
                        </div>
                        <div class="hover-content">
                            <span class="border-bottom">09 Aug</span><br>
                            <span>2019</span>
                        </div>
                    </div>
                    <div class="news-item-style-01">
                        <div class="thumb">
                            <img src="{{ asset('img/home/news/7.png') }}" alt="news">
                        </div>
                        <div class="content">
                            <div class="blog-meta">
                                <h6 class="d-flex justify-content-between"><a href="#"><i class="fa fa-user-o"
                                                                                          aria-hidden="true"></i> By
                                        Admin</a><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 3
                                        comments</a></h6>
                            </div>
                            <h3><a href="blog-details.html">Doing something new</a></h3>
                            <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim
                                arcu, vitae convallis</p>
                        </div>
                        <div class="hover-content">
                            <span class="border-bottom">03 May</span><br>
                            <span>2019</span>
                        </div>
                    </div>
                    <div class="news-item-style-01">
                        <div class="thumb">
                            <img src="{{ asset('img/home/news/8.png') }}" alt="news">
                        </div>
                        <div class="content">
                            <div class="blog-meta">
                                <h6 class="d-flex justify-content-between"><a href="#"><i class="fa fa-user-o"
                                                                                          aria-hidden="true"></i> By
                                        John</a><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 6
                                        comments</a></h6>
                            </div>
                            <h3><a href="blog-details.html">Gym fair 2019</a></h3>
                            <p>Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim
                                arcu, vitae convallis</p>
                        </div>
                        <div class="hover-content">
                            <span class="border-bottom">12 Jul</span><br>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news-area end -->

    <!-- client start -->
    <div class="client-area margin-top-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title title-padding-bottom text-center">
                        <p class="subtitle">Zarxio Testimonial</p>
                        <h1 class="title">Our Clients Say's</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item quote-style-1">
                <div class="thumb">
                    <img src="{{ asset('img/home/client/1.png') }}" alt="client">
                </div>
                <div class="content">
                    <h1>Arpita paul</h1>
                    <p>"Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu,
                        vitae libero. Nulla interdum erat nec tincidunt"</p>
                </div>
            </div>
            <div class="item quote-style-1">
                <div class="thumb">
                    <img src="{{ asset('img/home/client/2.png') }}" alt="client">
                </div>
                <div class="content">
                    <h1>Susmita sen</h1>
                    <p>"Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu,
                        vitae libero. Nulla interdum erat nec tincidunt"</p>
                </div>
            </div>
            <div class="item quote-style-1">
                <div class="thumb">
                    <img src="{{ asset('img/home/client/3.png') }}" alt="client">
                </div>
                <div class="content">
                    <h1>Dipa talukdar</h1>
                    <p>"Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu,
                        vitae libero. Nulla interdum erat nec tincidunt"</p>
                </div>
            </div>
            <div class="item quote-style-1">
                <div class="thumb">
                    <img src="{{ asset('img/home/client/4.png') }}" alt="client">
                </div>
                <div class="content">
                    <h1>Jimmy H. Hines</h1>
                    <p>"Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu,
                        vitae libero. Nulla interdum erat nec tincidunt"</p>
                </div>
            </div>
            <div class="item quote-style-1">
                <div class="thumb">
                    <img src="{{ asset('img/home/client/7.png') }}" alt="client">
                </div>
                <div class="content">
                    <h1>Sharifur Rahman</h1>
                    <p>"Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu,
                        vitae libero. Nulla interdum erat nec tincidunt"</p>
                </div>
            </div>
            <div class="item quote-style-1">
                <div class="thumb">
                    <img src="{{ asset('img/home/client/8.png') }}" alt="client">
                </div>
                <div class="content">
                    <h1>Azharul Naeem</h1>
                    <p>"Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu,
                        vitae libero. Nulla interdum erat nec tincidunt"</p>
                </div>
            </div>
            <div class="item quote-style-1">
                <div class="thumb">
                    <img src="{{ asset('img/home/client/9.png') }}" alt="client">
                </div>
                <div class="content">
                    <h1>Asaduzzaman</h1>
                    <p>"Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu,
                        vitae libero. Nulla interdum erat nec tincidunt"</p>
                </div>
            </div>
        </div>
    </div>
    <!-- client end -->

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
