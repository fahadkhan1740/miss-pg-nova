<x-ar-master>

{{-- <!-- preloader area start -->
<div class="preloader" id="preloader">
<div class="preloader-inner">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
</div>
<!-- preloader area end --> --}}
<!-- banner start -->
    {{-- <div class="banner-area banner-style-one" style="background-image:url({{ asset('storage/'.getHomeBackground()) }}">
    </div> --}}
    <div class="banner-area banner-style-one"
         style="background-image:url({{ 'storage/'.getHomeBackground() }})">
        <div class="banner-message">
            <h1 class="display-6">{{ $titles->title }}</h1>
            <p class="lead">{!! $titles->sub_title !!}</p>
            <p class="lead">
                <button class="btn btn-success btn-md" href="Jumbo action link"
                        role="button">{{ $titles->button_text }}</button>
            </p>
        </div>
    </div>
    <!-- banner end -->

    <!-- home-about start -->
    <div class="home-about padding-top-100 padding-bottom-94">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-lg-6 px-md-5">
                    <img src="{{ 'storage/'.$aboutUs->image_path }}" alt="">
                </div>
                <div class="col-lg-6 px-md-5">
                    <h2 class="display-6 box-underline">من نحن؟</h2>
                    <h4 class="display-6">مرحبًا بكم في مس بلاتينيوم هيلث</h4>
                    {!! $aboutUs->overview !!}
                </div>
            </div>
        </div>
    </div>
    <!-- home-about end -->

    <!-- home service start -->
    <div class="home-services padding-top-100 padding-bottom-94">
        <div class="container">
            <h2 class="display-6 box-underline">{{ __('custom.home.services') }}</h2>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4">
                        <div class="card" style="height: 90%">
                            <div class="card-body">
                                <i class="{{ $service->icon }}"></i>
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text">
                                    {!! $service->short_description !!}
                                    {{-- {{ strlen($service->short_description) > 100 ? substr($service->short_description,5,100).'..' : $service->short_description }} --}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text" style="text-align: left">
                                    <a href="#">
                                        اقرأ أكثر
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- home service end -->

    <!-- home explore start -->
    <div class="home-explore ">
        <div class="container">
            <h2 class="display-6 box-underline">Memberships</h2>
            <div class="row">
                @foreach($memberships as $membership)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body" style="position: relative">
                                <div class="clock-holder">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <h5 class="card-title">{{ $membership->title_ar }}</h5>
                                <p class="card-text">
                                    {!! $membership->short_description_ar !!}
                                </p>
                                <hr>
                                @foreach(explode(',',$membership->features_ar) as $item)
                                    <p class="card-text">
                                        <strong>
                                            {{ trim($item) }}
                                        </strong>
                                    </p>
                                @endforeach
                                <hr>
                            </div>
                            <p class="lead">
                                <button class="btn btn-custom btn-sm" href="#" role="button">Let's Try</button>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- home explore end -->

    <!-- partner-area start -->

    <!-- partner-area end -->

    <!-- pricing start -->

    <!-- pricing end -->

    <!-- map-area start -->
{{-- <div class="service-area m-4">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13922.563150286602!2d48.0851024!3d29.2635096!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1eb3e25c0af647c!2sMiss%20Platinum%20Health%20Club!5e0!3m2!1sen!2skw!4v1604780698705!5m2!1sen!2skw" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor review</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}
<!-- map-area end -->
</x-ar-master>
