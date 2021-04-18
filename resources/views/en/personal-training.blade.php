<x-en-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.$personalTraining->banner_path }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.personal_training') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li>
                    <a href="{{ route('personal-training', ['locale' => app()->getLocale()]) }}">{{ __('custom.links.personal_training') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about start -->
    <div class="trainiers">
        <div class="container section-padding padding-bottom-90">
            <div class="row">
                <div class="col-lg-12 col-xl-12 ">
                    <ul class="nav  justify-content-center mb-5 " id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab"
                               aria-controls="pills-home" aria-selected="true">Show All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab"
                               aria-controls="pills-profile" aria-selected="false">Trainer CAT1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab"
                               aria-controls="pills-contact" aria-selected="false">Trainer CAT2</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 col-xl-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="row mb-5">
                                @foreach ($trainers as $trainer)
                                    <div class="col-lg-4">
                                        <div class="card" style="background:transparent;border:0">
                                            <img class="card-img-top" src="{{ $trainer->image }}" alt="Card image cap">
                                            <div class="card-body pl-0">
                                                <h5 class="card-title mb-3">{{ $trainer->name_en }}</h5>
                                                <p class="card-text">
                                                    {!! $trainer->description_en !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">...
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- services-facilities start -->
    <!-- services-facilities end -->

</x-en-master>
