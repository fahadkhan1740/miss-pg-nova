<x-ar-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.getBanner('kids-club') }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.kids_club') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home', ['locale' => 'ar']) }}">{{ __('custom.links.home') }}</a></li>
                <li>
                    <a href="{{ route('kids-club', ['locale' => app()->getLocale()]) }}">{{ __('custom.links.kids_club') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about start -->
    @if(count($services) > 0)
        <div class="kids-services padding-top-100 padding-bottom-94">
            <div class="container">
                <h2 class="display-6 box-underline">{{ __('custom.kids_club.services') }}</h2>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $loop->iteration }}</h3>
                                    <h5 class="card-subtitle">{{ $service->title_ar }}</h5>
                                    <p class="card-text">
                                        {{ strlen($service->description_ar) > 100 ? substr($service->description_ar,0,500).'..' : $service->description_ar }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- about end -->

    <!-- services-facilities start -->
    @if(count($features) > 0)
        <div class="blog-details-area margin-bottom-100">
            <div class="container">
                <h2 class="display-6 box-underline mb-5">{{ __('custom.kids_club.features') }}</h2>
                <div class="row mb-5">
                    @foreach ($features as $feature)
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ 'storage/'.$feature->image_path }}"
                                     alt="Card image cap">
                                <div class="card-body pl-0">
                                    <h5 class="card-title">{{ $feature->title_ar }}</h5>
                                    <p class="card-text">
                                        {!! $feature->description_ar !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- services-facilities end -->

</x-ar-master>
