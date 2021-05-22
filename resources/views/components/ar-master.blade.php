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
    <link rel="stylesheet" href="{{ asset('ar/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('ar/css/bootstrap.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('ar/css/magnific-popup.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('ar/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('ar/css/slick-theme.css') }}">
    <!-- nice select -->
    <link rel="stylesheet" href="{{ asset('ar/css/nice-select.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('ar/css/owl.carousel.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('ar/css/font-awesome.min.css') }}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('ar/css/flaticon.css') }}">
    <!-- hamburgers -->
    <link rel="stylesheet" href="{{ asset('ar/css/hamburgers.min.css') }}">
    <!-- hamburgers -->
    <link rel="stylesheet" href="{{ asset('ar/css/hamburgers.min.css') }}">
    <!-- twentytwenty -->
    <link rel="stylesheet" href="{{ asset('ar/css/twentytwenty.css') }}">
    <!-- Date Picker -->
    <link href="{{ asset('ar/css/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Time Picker -->
    <link rel="stylesheet" href="{{ asset('ar/css/wickedpicker.min.css') }}">
    <!-- Main Stylesheet -->
{{--    <link rel="stylesheet" href="{{ asset('ar/css/style.css') }}">--}}
<!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('ar/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ mix('ar/css/style.css') }}">

    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
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
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"> <img
                        src="{{ asset('storage/'.getLogo()) }}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="billatrail_main_menu">
                <ul class="nav menu-open" id="main-nav">
                    <li class="nav-item">
                        <a href="{{ route('about', ['locale' =>'ar']) }}"
                           class="nav-link active">{{ __('custom.links.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('memberships', ['locale' =>'ar']) }}"
                           class="nav-link">{{ __('custom.links.memberships_packages') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('personal-training', ['locale' =>'ar']) }}"
                           class="nav-link">{{ __('custom.links.personal_training') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kids-club', ['locale' =>'ar']) }}"
                           class="nav-link">{{ __('custom.links.kids_club') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news-events', ['locale' => 'ar']) }}"
                           class="nav-link">{{ __('custom.links.news_events') }}</a>
                    </li>
                    <li class="nav-item">
                        @if(request()->route()->getName() === 'news-events.show')
                            <a href="{{ route('news-events.show', ['id' => request()->segment(2), 'locale' => 'en']) }}"
                               class="nav-link" style="padding:1rem">
                                <img
                                    src="https://icons.iconarchive.com/icons/wikipedia/flags/256/KW-Kuwait-Flag-icon.png"
                                    id="language-icon">
                            </a>
                        @else
                            <a href="{{ route(request()->route()->getName(), ['locale' => 'en']) }}" class="nav-link"
                               style="padding:1rem">
                                <img
                                    src="http://icons.iconarchive.com/icons/wikipedia/flags/1024/GB-United-Kingdom-Flag-icon.png"
                                    id="language-icon">
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- navbar end -->

{{ $slot }}

<footer>
    <div class="container">
        <div class="row ">
            <div class="col-lg-4">
                {{-- links --}}
                <div class="row">
                    <div class="col-lg-5">
                        <ul>
                            <li><a href="{{ route('home', ['locale' => 'ar']) }}">{{ __('custom.links.home') }}</a></li>
                            <li>
                                <a href="{{ route('memberships', ['locale' => 'ar']) }}">{{ __('custom.links.memberships_packages') }}</a>
                            </li>
                            <li><a href="{{ route('about', ['locale' => 'ar']) }}">{{ __('custom.links.about') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <ul>
                            <li>
                                <a href="{{ route('personal-training', ['locale' => 'ar']) }}">{{ __('custom.links.personal_training') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('news-events', ['locale' => 'ar']) }}">{{ __('custom.links.news_events') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('terms-and-conditions', ['locale' => 'ar']) }}">{{ __('custom.links.terms_and_conditions') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('kids-club', ['locale' => 'ar']) }}"> {{ __('custom.links.kids_club') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4" style="text-align:center">
                {{-- Social Icons --}}
                <span class="social-icons">
                        @foreach(getSocialMediaLinks() as $link)
                        <a href="{{ $link->link }}" target="_blank"><i class="{{ $link->icon }}" aria-hidden="true"></i></a>
                    @endforeach
                    </span>
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
<script src="{{ asset('ar/js/jquery-2.2.4.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('ar/js/popper.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('ar/js/bootstrap.min.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('ar/js/jquery.magnific-popup.js') }}"></script>
<!-- wow -->
<script src="{{ asset('ar/js/wow.min.js') }}"></script>
<!-- nice select -->
<script src="{{ asset('ar/js/nice-select.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('ar/js/owl.carousel.min.js') }}"></script>
<!-- Slick -->
<script src="{{ asset('ar/js/slick.min.js') }}"></script>
<!-- Slick Animation -->
<script src="{{ asset('ar/js/slick-animation.js') }}"></script>
<!-- jquery.twentytwenty -->
<script src="{{ asset('ar/js/jquery.twentytwenty.js') }}"></script>
<script src="{{ asset('ar/js/jquery.event.move.js') }}"></script>
<!-- waypoint -->
<script src="{{ asset('ar/js/waypoints.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('ar/js/datepicker.min.js') }}"></script>
<script src="{{ asset('ar/js/datepicker.en.js') }}"></script>
<!-- Time Picker -->
<script src="{{ asset('ar/js/wickedpicker.min.js') }}"></script>
<!-- counterup -->
<script src="{{ asset('ar/js/jquery.counterup.min.js') }}"></script>
<!-- imageloaded -->
<script src="{{ asset('ar/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- isotope -->
<script src="{{ asset('ar/js/isotope.pkgd.min.js') }}"></script>
<!-- rProgressbar -->
<script src="{{ asset('ar/js/jQuery.rProgressbar.min.js') }}"></script>
<script src="{{ asset('ar/js/timepicker.js') }}"></script>
<!-- main js -->
<script src="{{ asset('ar/js/main.js') }}"></script>

<script src="{{ mix('ar/js/script.js') }}"></script>
</body>
</html>
