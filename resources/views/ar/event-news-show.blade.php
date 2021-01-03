<x-ar-master>
    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1" style="background-image:url(assets/img/bg/blog-details.png);">
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
                                <img src="{{ asset('storage/'.$new->banner_path) }}" class="attachment-siiimple_full size-siiimple_full wp-post-image" alt="">
                            </div>
                            <div class="blog-details-content">
                                <h6><a href="#">{{ $new->created_at->format('d M,Y') }}</a> <a href="#"><span>{{ $new->user->name ?? 'User' }}</span></a></h6>
                                <h2>{{ $new->title }}</h2>
                                <div style="color: black">
                                    {!! $new->long_description !!}
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-right-content widget-area sidebar">
                            <div class="widget widget_search">
                                <form class="search-form">
                                    <div class="form-group">
                                        <input type="text" name="search" class="form-control" placeholder="Search here">
                                    </div>
                                    <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget latest-post-widget">
                                <div class="eidget-title">
                                    <h1>{{ __('custom.news_events.latest_posts') }}</h1>
                                </div>
                                @foreach($latestNews as $new)
                                    <div class="share-img-item">
                                        <div class="img-part">
                                            <a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}"><img
                                                    src="{{ asset('storage/'.$new->banner_path) }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="content-part">
                                            <h4>{{ $new->title }}</h4>
                                            <span class="text">{{ substr($new->short_description,0, 50) }}...</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="widget widget_categories">
                                <h5 class="widget-title">{{ __('custom.categories') }}</h5>
                                <ul class="cat-menu">
                                    <li><a href="#">Boxing</a></li>
                                    <li><a href="#">Street</a></li>
                                    <li><a href="#">Fitness</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-ar-master>
