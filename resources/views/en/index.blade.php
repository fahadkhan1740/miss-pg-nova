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
         style="background-image:url(https://images.unsplash.com/photo-1580086319619-3ed498161c77?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80)">
        <div class="banner-message">
            <h1 class="display-6">Start your Gym Classes</h1>
            <p class="lead">Excepteur sint occaecat cupidatat non
                <br>proident, sunt in culpa qui officia<br>
                deserunt</p>
            <p class="lead">
                <button class="btn btn-success btn-md" href="Jumbo action link" role="button">BE ONE OF US</button>
            </p>
        </div>
    </div>
    <!-- banner end -->

    <!-- home-about start -->
    <div class="home-about padding-top-100 padding-bottom-94">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-lg-6 px-md-5">
                    <img src="{{ 'storage/'.$aboutUs->before_image_path }}"
                         alt="">
                </div>
                <div class="col-lg-6 px-md-5">
                    <h2 class="display-6 box-underline">Who we are?</h2>
                    <h4 class="display-6">Welcome to Miss Platinum Health</h4>
                    <div class="card-text">{!! $aboutUs->overview !!}
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
                                <i class="fa fa-asl-interpreting"></i>
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <div class="card-text overflow-card">
                                    {{-- {!!strlen($service->short_description) > 50 ? substr($service->short_description,0,50).'..' : $service->short_description !!} --}}
                                    {{ strlen($service->short_description) > 100 ? substr($service->short_description,5,100).'..' : $service->short_description }}
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="card-text">
                                    <a href="#">
                                        Read More
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
