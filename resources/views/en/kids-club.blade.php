<x-en-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.getBanner('kids-club') }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.kids_club') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li>
                    <a href="{{ route('kids-club', ['locale' => app()->getLocale()]) }}">{{ __('custom.links.kids_club') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about start -->
    <div class="kids-services padding-top-100 padding-bottom-94">
        <div class="container">
            <h2 class="display-6 box-underline">Services</h2>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $loop->iteration }}</h3>
                                <h5 class="card-subtitle">{{ $service->title_en }}</h5>
                                <p class="card-text">
                                    {{ strlen($service->description_en) > 100 ? substr($service->description_en,5,500).'..' : $service->description_en }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- services-facilities start -->
    <div class="blog-details-area margin-bottom-100">
        <div class="container">
            <h2 class="display-6 box-underline mb-5">Features</h2>
            <div class="row mb-5">
                @foreach ($features as $feature)
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ 'storage/'.$feature->image_path }}"
                                 alt="Card image cap">
                            <div class="card-body pl-0">
                                <h5 class="card-title">{{ $feature->title_en }}</h5>
                                <p class="card-text">
                                    {!! $feature->description_en !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- services-facilities end -->

</x-en-master>
