<x-ar-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.$aboutUs->banner_path }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.about') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('about', ['locale' => 'en']) }}">{{ __('custom.links.about') }}</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about start -->
    <div class="about-page-top" style="border-bottom: 2px solid rgba(50, 50, 50, 1);">
        <div class="container section-padding">
            <div class="row row-eq-height">
                <div class="col-lg-5 px-md-5">
                    <img
                        src="{{ 'storage/'.$aboutUs->image_path }}"
                        alt="">
                </div>
                <div class="col-lg-7 px-md-5">
                    <h2 class="display-6 about-box-underline">
                        النوادي القابضة <br>
                        التاريخ والرؤية
                    </h2>
                    <div class="card-text">
                        {!! $aboutUs->history_vision_ar !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- project-counter start -->
    <div class="container-fluid">
        <div class="container padding-top-165 padding-bottom-50">
            <div class="row ">
                <div class="col-lg-12">
                    <h2 class="display-6 box-underline">مهمتنا</h2>
                    <div class="text-center">{!! $aboutUs->mission_ar !!}</div>
                </div>

            </div>
        </div>
    </div>
    <!--project-counter-->

    <!-- core values start -->
    <div class="container-fluid padding-top-50 padding-bottom-50 core-values">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <h2 class="display-6 box-underline" style="width:20rem">قيمنا الأساسية</h2>
                    <div class="text-center">{!! $aboutUs->core_values_ar !!}</div>
                </div>

            </div>
        </div>
    </div>
    <!-- core values end -->
    <!-- mission-area start -->
    <!-- contact-details start -->
    <div class="container-fluid contact-details padding-top-50 padding-bottom-50">
        <div class="container">
            <h2 class="display-6 box-underline">Contact Details</h2>
            <div class="row">
                <div class="col-lg-4 text-center contact-cards">
                    <i class="fa fa-map-marker-alt"></i>
                    <p class="card-text">Ms. Platinum Gym, Messila</p>
                </div>
                <div class="col-lg-4 text-center contact-cards">
                    <i class="fa fa-phone"></i>
                    <p class="card-text">Ms. Platinum Gym, Messila</p>
                </div>
                <div class="col-lg-4 text-center contact-cards">
                    <i class="fa fa-asl-interpreting"></i>
                    <p class="card-text">Ms. Platinum Gym, Messila</p>
                </div>

            </div>
        </div>
    </div>
    <!-- contact-details end -->
    <!-- map-area start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 no-gutter">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="500" id="gmap_canvas"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13922.563150286602!2d48.0851024!3d29.2635096!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1eb3e25c0af647c!2sMiss%20Platinum%20Health%20Club!5e0!3m2!1sen!2skw!4v1604780698705!5m2!1sen!2skw"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor
                            review</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map-area end -->
</x-ar-master>
