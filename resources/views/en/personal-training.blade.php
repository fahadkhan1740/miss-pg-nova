<x-en-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.$personalTraining->banner_path }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.personal_training') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('personal-training', ['locale' => app()->getLocale()]) }}">{{ __('custom.links.personal_training') }}</a></li>
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
                        <h3 class="about-title">{{ $personalTraining->title }}</h3>

                        <div style="color: black !important;">
                            {!! $personalTraining->description !!}
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
                            <h1>{{ __('custom.personal_training.sessions') }}</h1>
                        </div>
                        <div class="mission-content">
                            <div style="color: black;">
                                {!! $personalTraining->sessions !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services-facilities end -->

</x-en-master>
