<x-en-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
{{--         style="background-image:url({{ 'storage/'.$personalTraining->banner_path }});"--}}
style="background-image:url(/img/bg/contact.png);"
    >
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.memberships_packages') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('memberships', ['locale' => app()->getLocale()]) }}">{{ __('custom.links.memberships_packages') }}</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- pricing start -->
    <div class="pricing-area padding-top-90 padding-bottom-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title padding-bottom-65 text-center">
                        <p class="subtitle">Become A Part of us</p>
                        <h1 class="title">Our Membership</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-style-01 pricing-item-bg1">
                        <h2 class="off-style-1">10% Off</h2>
                        <div class="pricing-icon text-center">
                            <a href="#"><i class="flaticon-weight" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-title">
                            <h3>Biginner plan</h3>
                        </div>
                        <ul>
                            <li><span>$50</span></li>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-style-01 active pricing-item-bg2">
                        <h2 class="off-style-1">20% Off</h2>
                        <div class="pricing-icon text-center">
                            <a href="#"><i class="flaticon-weight-lifting" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-title">
                            <h3>Intermediate plan</h3>
                        </div>
                        <ul>
                            <li><span>$70</span></li>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-style-01 pricing-item-bg3">
                        <h2 class="off-style-1">20% Off</h2>
                        <div class="pricing-icon text-center">
                            <a href="#"><i class="flaticon-woman" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-title">
                            <h3>Ultimate plan</h3>
                        </div>
                        <ul>
                            <li><span>$90</span></li>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-element btn-normal-size btn-transparent-color btn-rounded">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing end -->

</x-en-master>
