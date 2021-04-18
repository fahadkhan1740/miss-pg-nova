<x-en-master>
    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 blog-breadcrumb-overlay"
         style="background-image:url(/img/blog/bg.png);">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.news_events') }}</h1>
            <ul class="page-list margin-bottom-10">
                <li><a href="{{ route('home', ['locale' => 'en']) }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('news-events', ['locale' => 'en']) }}">{{ __('custom.links.news_events') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- home blog start -->
    <div class="blog-details-area margin-top-100 margin-bottom-100">
        <div class="container">
            <div class="row mb-5">
                @foreach ($news as $new)
                    <div class="col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ 'storage/'.$new->banner_path }}"
                                 alt="Card image cap">
                            <div class="card-body pl-0">
                                <h6 class="card-subtitle text-white mb-2">{{ $new->created_at->format('d M, Y') }}
                                    &#9679; in News</h6>
                                <h5 class="card-title">{{ $new->title }}</h5>
                                <p class="card-text">{!! $new->short_description !!}</p>
                                <a href="{{ route('news-events.show', ['id' => $new->id, 'locale' => app()->getLocale()]) }}"
                                   class="btn btn-sm btn-success pl-4 pr-4 pt-2 pb-2 mt-4">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-lg-6 text-default">
                        <span class="mr-5"> Showing</span>
                        <span> post in 72 posts</span>
                    </div>
                    <div class="col-lg-6">
                        <nav class="nav  justify-content-end">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-left"
                                                                                   aria-hidden="true"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-right"
                                                                     aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-en-master>
