<x-en-master>

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
            <h1 class="display-6">{{ $titles->title_en }}</h1>
            <p class="lead">{!! $titles->sub_title_en !!}</p>
            <p class="lead">
                <button class="btn btn-success btn-md" href="Jumbo action link"
                        role="button">{{ $titles->button_text_en }}</button>
            </p>
        </div>
    </div>
    <!-- banner end -->

    <!-- home-about start -->
    <div class="home-about padding-top-100 padding-bottom-94">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-lg-6 px-md-5">
                    <img src="{{ 'storage/'.$aboutUs->image_path }}"
                         alt="">
                </div>
                <div class="col-lg-6 px-md-5">
                    <h2 class="display-6 box-underline">{{ $aboutUs->title_en }}</h2>
                    <h4 class="display-6">{{ $aboutUs->sub_title_en }}</h4>
                    <div class="card-text">{!! $aboutUs->overview_en !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- home-about end -->

    <!-- home service start -->
    <div class="home-services padding-top-100 padding-bottom-94">
        <div class="container">
            <h2 class="display-6 box-underline">Our Services</h2>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ 'storage/'.$service->icon }}" alt="">
                                <h5 class="card-title">{{ $service->title_en }}</h5>
                                <div class="card-text overflow-card">
                                    {{ strlen($service->description_en) > 100 ? substr($service->description_en,5,500).'..' : $service->description_en }}
                                </div>
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
                                <h5 class="card-title">{{ $membership->title_en }}</h5>
                                <p class="card-text">
                                    {!! $membership->short_description_en !!}
                                </p>
                                <hr>
                                @foreach(explode(',',$membership->features_en) as $item)
                                    <p class="card-text">
                                        {{ trim($item) }}
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
</x-en-master>
