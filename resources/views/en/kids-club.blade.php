<x-en-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.$kidsClub->banner_path }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.kids_club') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('kids-club', ['locale' => app()->getLocale()]) }}">{{ __('custom.links.kids_club') }}</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about start -->
    <div class="about-page-top">
        <div class="container section-padding" style="padding-bottom: 0;">
            <div class="row">
                <div class="col-lg-6 col-xl-6 d-flex">
                    <div class="about-content align-self-center">
                        <h3 class="about-title">Kids' Club</h3>

                        <div style="color: black !important;">
                            {!! $kidsClub->overview !!}
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

    <!-- services-facilities start -->
    <div class="mission-area my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mission-content">
                        <h3 class="serial">01</h3>
                        <div class="title">
                            <h1>{{ __('custom.kids_club.services_facilities') }}</h1>
                        </div>
                        <div class="mission-content">
                            <div style="color: black;">
                                {!! $kidsClub->services_facilities !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services-facilities end -->

    <!-- membership-packages start -->
    <div class="mission-area my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mission-content">
                        <h3 class="serial">02</h3>
                        <div class="title">
                            <h1>{{ __('custom.links.memberships_packages') }}</h1>
                        </div>
                        <div class="mission-content">
                            <div style="color: black;">
                                {!! $kidsClub->memberships !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- membership-packages end -->

</x-en-master>
