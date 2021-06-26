<x-en-master>
    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1"
         style="background-image:url({{ 'storage/'.getBanner('terms-conditions') }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.terms_and_conditions') }}</h1>
            <ul class="page-list margin-bottom-4">
                <li><a href="{{ route('home', ['locale' => 'en']) }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('news-events', ['locale' => 'en']) }}">{{ __('custom.links.terms_and_conditions') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- home blog start -->
    <div class="blog-details-area margin-top-100">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        {!! $terms->description_en !!}
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-en-master>
