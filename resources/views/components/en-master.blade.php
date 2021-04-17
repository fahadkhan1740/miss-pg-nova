<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miss Platinum</title>
    <!-- favicon -->
    <link rel=icon href="{{ asset('img/favicon.png') }}" sizes="20x20" type="image/png">

    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('en/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('en/css/bootstrap.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('en/css/magnific-popup.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('en/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('en/css/slick-theme.css') }}">
    <!-- nice select -->
    <link rel="stylesheet" href="{{ asset('en/css/nice-select.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('en/css/owl.carousel.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('en/css/font-awesome.min.css') }}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('en/css/flaticon.css') }}">
    <!-- hamburgers -->
    <link rel="stylesheet" href="{{ asset('en/css/hamburgers.min.css') }}">
    <!-- hamburgers -->
    <link rel="stylesheet" href="{{ asset('en/css/hamburgers.min.css') }}">
    <!-- twentytwenty -->
    <link rel="stylesheet" href="{{ asset('en/css/twentytwenty.css') }}">
    <!-- Date Picker -->
    <link href="{{ asset('en/css/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Time Picker -->
    <link rel="stylesheet" href="{{ asset('en/css/wickedpicker.min.css') }}">
    <!-- Main Stylesheet -->
{{--    <link rel="stylesheet" href="{{ asset('en/css/style.css') }}">--}}
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('en/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ mix('en/css/style.css') }}">
</head>
<body>

<!-- preloader area start -->
{{--<div class="preloader" id="preloader">--}}
{{--    <div class="preloader-inner">--}}
{{--        <div class="spinner">--}}
{{--            <div class="dot1"></div>--}}
{{--            <div class="dot2"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- preloader area end -->

<!-- navbar start -->
<div class="zarxio-navbar">
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#billatrail_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </button>
            </div>
            <div class="logo">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"> <img src="{{ asset('storage/'.getLogo()) }}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="billatrail_main_menu">
                <ul class="navbar-nav menu-open">
                    <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                    <li><a href="{{ route('about', ['locale' => 'en']) }}">{{ __('custom.links.about') }}</a></li>
                    <li><a href="{{ route('memberships', ['locale' => 'en']) }}">{{ __('custom.links.memberships_packages') }}</a></li>
                    <li><a href="{{ route('personal-training', ['locale' => 'en']) }}">{{ __('custom.links.personal_training') }}</a></li>
                    <li><a href="{{ route('kids-club', ['locale' => 'en']) }}">{{ __('custom.links.kids_club') }}</a></li>
                    <li><a href="{{ route('news-events', ['locale' => 'en']) }}">{{ __('custom.links.news_events') }}</a></li>
                    <li><a href="{{ route('contact', ['locale' => 'en']) }}">{{ __('custom.links.contact') }}</a></li>
                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'ar']) }}">العربي</a></li>
                </ul>
            </div>
        </div>
    </nav> --}}
    <nav class="container">
        <!-- Nav tabs -->
        <ul class="nav  justify-content-end" id="main-nav">
            <li class="nav-item">
                <a href="#" class="nav-link active">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Membership</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Training</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Kids Club</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">News n Events</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="https://icons.iconarchive.com/icons/wikipedia/flags/256/KW-Kuwait-Flag-icon.png"
                        id="language-icon">
                </a>
            </li>
        </ul>        
    </nav>
</div>
<!-- navbar end -->

{{ $slot }}

<footer class="footer-area footer-style-1 black-bg padding-top-160">
    <div class="footer-top padding-top-30 padding-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-md-6">
                    <div class="footer-widget widget">
                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="footer-logo">
                            <img src="{{ asset('storage/'.getLogo()) }}" alt="footer logo">
                        </a>
                        <ul class="contact_info_list">
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="details">
                                    {{ getContactDetails()->phone_1 }} <br>
                                    {{ getContactDetails()->phone_2 }}
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                                <div class="details">
                                    {!! getContactDetails()->address !!}
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="details">
                                    {!! getContactDetails()->email !!}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="footer-widget widget">
                        <h4 class="widget-title">Recent Post</h4>
                        <ul class="recent_post_item">
                            <li class="single-recent-post-item">
                                <div class="thumb">
                                    <img src="{{ asset('img/post/1.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <p class="title">New gym center</p>
                                    <p class="desc">There are many variations of passages</p>
                                </div>
                            </li>
                            <li class="single-recent-post-item">
                                <div class="thumb">
                                    <img src="{{ asset('img/post/2.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <p class="title">Improve fitness</p>
                                    <p class="desc">There are many variations of passages</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-md-12 offset-xl-1">
                    <div class="footer-widget widget">
                        <h4 class="widget-title">Stay in Touch</h4>
                        <p class="description">Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu, vitae convallis</p>
                        <div class="subscribe-form">
                            <div class="input-group margin-top-30">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <span class="input-group-btn">
                                        <button class="btn btn-default submit-btn" type="button">Subscribe</button>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner copyright-sm margin-top-30">
                        © Miss Platinum {{ now()->year }} All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<!-- jquery -->
<script src="{{ asset('en/js/jquery-2.2.4.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('en/js/popper.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('en/js/bootstrap.min.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('en/js/jquery.magnific-popup.js') }}"></script>
<!-- wow -->
<script src="{{ asset('en/js/wow.min.js') }}"></script>
<!-- nice select -->
<script src="{{ asset('en/js/nice-select.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('en/js/owl.carousel.min.js') }}"></script>
<!-- Slick -->
<script src="{{ asset('en/js/slick.min.js') }}"></script>
<!-- Slick Animation -->
<script src="{{ asset('en/js/slick-animation.js') }}"></script>
<!-- jquery.twentytwenty -->
<script src="{{ asset('en/js/jquery.twentytwenty.js') }}"></script>
<script src="{{ asset('en/js/jquery.event.move.js') }}"></script>
<!-- waypoint -->
<script src="{{ asset('en/js/waypoints.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('en/js/datepicker.min.js') }}"></script>
<script src="{{ asset('en/js/datepicker.en.js') }}"></script>
<!-- Time Picker -->
<script src="{{ asset('en/js/wickedpicker.min.js') }}"></script>
<!-- counterup -->
<script src="{{ asset('en/js/jquery.counterup.min.js') }}"></script>
<!-- imageloaded -->
<script src="{{ asset('en/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- isotope -->
<script src="{{ asset('en/js/isotope.pkgd.min.js') }}"></script>
<!-- rProgressbar -->
<script src="{{ asset('en/js/jQuery.rProgressbar.min.js') }}"></script>
<script src="{{ asset('en/js/timepicker.js') }}"></script>
<!-- main js -->
<script src="{{ asset('en/js/main.js') }}"></script>

<script src="{{ mix('en/js/script.js') }}"></script>
</body>
</html>
