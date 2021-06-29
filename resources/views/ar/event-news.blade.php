<x-ar-master>
    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 blog-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.getBanner('news-events') }});">
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
    <div class="blog-details-area margin-top-100 margin-bottom-100">
        <div class="container">
            <div class="row mb-5">
                @foreach ($news as $new)
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top h-10rem" src="{{ 'storage/'.$new->banner_path }}" alt="Card image cap">
                        <div class="card-body pl-0">
                            <h6 class="card-subtitle text-white mb-2">{{ \Carbon\Carbon::parse($new->created_at)->locale('ar')->isoFormat('MMMM Do , YYYY') }}</h6>
                            <h5 class="card-title text-clip">{{ $new->title_ar }}</h5>
                            <p class="card-text three-text-line">{!! $new->short_description_ar !!}</p>
                            <a href="{{ route('news-events.show', ['id' => $new->id, 'locale' => app()->getLocale()]) }}"
                                class="btn btn-sm btn-success pl-4 pr-4 pt-2 pb-2 mt-4">اقرأ أكثر</a>
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
                        <span>إظهار {{ $news->count() }} مشاركة في {{ $news->total() }} مشاركة</span>
                    </div>
                    <div class="col-lg-6">
                        <nav class="nav  justify-content-end">
                            {!! $news->links() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-ar-master>
