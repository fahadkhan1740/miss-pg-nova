<x-ar-master>
    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 blog-breadcrumb-overlay"
         style="background-image:url(/img/blog/bg.png);">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.news_events') }}</h1>
            <ul class="page-list margin-bottom-10">
                <li><a href="{{ route('home', ['locale' => 'ar']) }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('news-events', ['locale' => 'ar']) }}">{{ __('custom.links.news_events') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- home blog start -->
    <div class="blog-details-area margin-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-single-item">
                                <div class="row">

                                    @foreach($news->take(1) as $new)
                                        <div class="col-lg-4">
                                            <div class="blog-item-inner">
                                                <div class="blog-detail">
                                                    <div class="blog-meta">
                                                        <h6><a href="#">{{ $new->created_at->format('d M,Y') }}</a>
                                                            <span
                                                                class="float-right text-right"><a
                                                                    href="#">{{ $new->user->name ?? 'User' }}</a></span>
                                                        </h6>
                                                    </div>
                                                    <h5><a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}">{{ $new->title }}</a></h5>
                                                    <p>{{ substr($new->short_description,0, 50) }}...</p>
                                                    <a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}" class="blog-more">قراءة المزيد</a>
                                                </div>
                                                <div class="blog-img">
                                                    <img src="{{ asset($new->banner_path) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach($news->skip(1)->take(1) as $new)
                                        <div class="col-lg-8">
                                            <div class="blog-item-inner">
                                                <div class="blog-img">
                                                    <img src="{{ asset($new->banner_path) }}" alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="blog-meta">
                                                        <h6 class="d-flex"><a
                                                                href="#">{{ $new->created_at->format('d M,Y') }}</a><a
                                                                href="#">{{ $new->user->name ?? 'User' }}</a></h6>
                                                    </div>
                                                    <h5><a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}">{{ $new->title }}</a></h5>
                                                    <p>{{ substr($new->short_description,0, 50) }}...</p>
                                                    <a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}" class="blog-more">قراءة المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($news->skip(2)->take(1) as $new)
                                        <div class="col-lg-8">
                                            <div class="blog-item-inner">
                                                <div class="blog-img">
                                                    <img src="{{ asset($new->banner_path) }}" alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="blog-meta">
                                                        <h6 class="d-flex"><a
                                                                href="#">{{ $new->created_at->format('d M,Y') }}</a><a
                                                                href="#">{{ $new->user->name ?? 'User' }}</a></h6>
                                                    </div>
                                                    <h5><a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}">{{ $new->title }}</a></h5>
                                                    <p>{{ substr($new->short_description,0, 50) }}...</p>
                                                    <a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}" class="blog-more">قراءة المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach($news->skip(3)->take(1) as $new)
                                        <div class="col-lg-4">
                                            <div class="blog-item-inner">
                                                <div class="blog-detail">
                                                    <div class="blog-meta">
                                                        <h6><a href="#">{{ $new->created_at->format('d M,Y') }}</a>
                                                            <span
                                                                class="float-right text-right"><a
                                                                    href="#">{{ $new->user->name ?? 'User' }}</a></span>
                                                        </h6>
                                                    </div>
                                                    <h5><a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}">{{ $new->title }}</a></h5>
                                                    <p>{{ substr($new->short_description,0, 50) }}...</p>
                                                    <a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}" class="blog-more">قراءة المزيد</a>
                                                </div>
                                                <div class="blog-img">
                                                    <img src="{{ asset($new->banner_path) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($news->skip(4)->take(1) as $new)
                                        <div class="col-lg-4">
                                            <div class="blog-item-inner">
                                                <div class="blog-detail">
                                                    <div class="blog-meta">
                                                        <h6><a href="#">{{ $new->created_at->format('d M,Y') }}</a>
                                                            <span
                                                                class="float-right text-right"><a
                                                                    href="#">{{ $new->user->name ?? 'User' }}</a></span>
                                                        </h6>
                                                    </div>
                                                    <h5><a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}">{{ $new->title }}</a></h5>
                                                    <p>{{ substr($new->short_description,0, 50) }}...</p>
                                                    <a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}" class="blog-more">قراءة المزيد</a>
                                                </div>
                                                <div class="blog-img">
                                                    <img src="{{ asset($new->banner_path) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($news->skip(5)->take(1) as $new)
                                        <div class="col-lg-8">
                                            <div class="blog-item-inner">
                                                <div class="blog-img">
                                                    <img src="{{ asset($new->banner_path) }}" alt="">
                                                </div>
                                                <div class="blog-detail">
                                                    <div class="blog-meta">
                                                        <h6 class="d-flex"><a
                                                                href="#">{{ $new->created_at->format('d M,Y') }}</a><a
                                                                href="#">{{ $new->user->name ?? 'User' }}</a></h6>
                                                    </div>
                                                    <h5><a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}">{{ $new->title }}</a></h5>
                                                    <p>{{ substr($new->short_description,0, 50) }}...</p>
                                                    <a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}" class="blog-more">قراءة المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pagination-area d-flex justify-content-center margin-top-50">
                                <ul>
                                    <li>
                                        <span class="next page-bumber"><i class="fa fa-angle-left"></i> Prev</span>
                                    </li>
                                    <li>
                                        <span class="page-bumber">1</span>
                                    </li>
                                    <li>
                                        <span class="page-bumber current">2</span>
                                    </li>
                                    <li>
                                        <span class="page-bumber">3</span>
                                    </li>
                                    <li>
                                        <span class="next page-bumber">Next <i class="fa fa-angle-right"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                            @foreach($news as $new)
                                <div class="share-img-item">
                                    <div class="img-part">
                                        <a href="{{ route('news-events.show', ['locale' => app()->getLocale(), 'id' => $new->id]) }}"><img
                                                src="{{ asset($new->banner_path) }}"
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
    </div>

    <!-- brand-area start -->
    <div class="brand-area margin-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand1.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand2.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand3.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand4.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand5.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand1.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand2.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand3.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand4.png') }}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{ asset('img/brand/brand5.png') }}" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->

</x-ar-master>
