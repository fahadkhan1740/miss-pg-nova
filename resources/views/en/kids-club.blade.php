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
    <div class="kids-services padding-top-100 padding-bottom-94">
        <div class="container">
            <h2 class="display-6 box-underline">Services</h2>
            <div class="row">
                @for ($i=1;$i<=6;$i++) <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{"0"}}{{$i}}</h3>                            
                            <h5 class="card-subtitle">Service {{$i}}</h5>                            
                            <p class="card-text">The health club holds nine studios - yoga,
                                power station, dance, boxing, spinning,
                                pool, aerobic, strength and squash while
                                offering a variety of group classes like
                                Zumba, HIIT, Strength & conditioning,
                                Pilates, Animal Flow, Steps, Aqua, Spinning,
                                Squash and more!</p>
                        </div>                        
                    </div>
            </div>
            @endfor
        </div>
    </div>
    </div>
    <!-- about end -->

    <!-- services-facilities start -->
    <div class="blog-details-area margin-bottom-100">
        <div class="container">
            <h2 class="display-6 box-underline mb-5">Features</h2>
            @for ($i=1;$i<=1;$i++) <div class="row mb-5">
                @for ($j=1;$j<=4;$j++) <div class="col-lg-3">
                    <div class="card" >
                        <img class="card-img-top" src="https://dummyimage.com/370X230/eeeeee/aaaaaa.png"
                            alt="Card image cap">
                        <div class="card-body pl-0">                            
                            <h5 class="card-title">Feature {{$i}}</h5>
                            <p class="card-text">Culpa enim tempor elit fugiat ex reprehenderit. Id excepteur laborum quis
                                Lorem exercitation ut mollit dolor culpa dolore commodo. Sunt aliquip adipisicing cupidatat
                                </p>                            
                        </div>
                    </div>
        </div>
        @endfor
    </div>
    @endfor
    </div>
    
    </div>
    <!-- services-facilities end -->

</x-en-master>
