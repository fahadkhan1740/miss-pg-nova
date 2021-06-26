<x-en-master>
    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 blog-breadcrumb-overlay"
         style="background-image:url({{ '/storage/'.getBanner('news-events') }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.news_events') }}</h1>
            <ul class="page-list margin-bottom-4">
                <li><a href="{{ route('home', ['locale' => 'en']) }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('news-events', ['locale' => 'en']) }}">{{ __('custom.links.news_events') }}</a>
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
                        <article class="blog-details">
                            <div class="blog-img">
                                <img src="{{ asset('storage/'.$new->banner_path) }}"
                                     class="attachment-siiimple_full size-siiimple_full wp-post-image" alt="">
                            </div>
                            <div class="blog-details-content">
                                <h6>{{ $new->created_at->format('d M,Y') }}</h6>
                                <h2>{{ $new->title_en }}</h2>
                                <div style="color: black">
                                    {!! $new->long_description_en !!}
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-right-content widget-area sidebar">
                            <div class="widget latest-post-widget">
                                <div class="eidget-title">
                                    <h1>{{ __('custom.news_events.latest_posts') }}</h1>
                                </div>
                                @foreach($latestNews as $new)
                                    <div class="share-img-item">
                                        <a href="{{ route('news-events.show', ['id' => $new->id, 'locale' => app()->getLocale()]) }}">
                                            <div class="img-part">
                                                <img src="{{ asset('storage/'.$new->banner_path) }}" alt="">
                                            </div>
                                            <div class="content-part">
                                                <h4>{{ $new->title_en }}</h4>
                                                <span class="text">{{ substr($new->short_description_en,0, 50) }}...</span>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="widget">
                                <div class="thumb only-thumb">
                                    <img src="assets/img/blog/big-thumb.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-en-master>
