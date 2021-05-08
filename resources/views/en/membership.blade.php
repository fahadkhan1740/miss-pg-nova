<x-en-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.getBanner('memberships') }});"
    >
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.memberships_packages') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li>
                    <a href="{{ route('memberships', ['locale' => app()->getLocale()]) }}">{{ __('custom.links.memberships_packages') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- pricing start -->
    <div class="memberships-area padding-top-90 padding-bottom-200">
        <div class="container">
            @foreach ($memberships as $membership)
                @if ($loop->iteration % 2 !== 0)
                    <div class="row no-gutter">
                        <div class="col-lg-6">
                            <img src="{{ 'storage/'.$membership->image }}" style="width: inherit">
                        </div>
                        <div class="col-lg-6 pl-3 pt-3">
                            <h4 class="text-success">{{ $membership->title_en }}</h4>
                            <p class="text-left">
                                {!! $membership->short_description_en !!}
                            </p>
                            <p class="text-left">
                            <ul>
                                @foreach(explode(',',$membership->features_en) as $feature)
                                    <li>
                                        {{ trim($feature) }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="row no-gutter">
                        <div class="col-lg-6 pr-5 pt-3">
                            <h4 class="text-success">{{ $membership->title_en }}</h4>
                            <p class="text-right">
                                {!! $membership->short_description_en !!}
                            </p>
                            <ul>
                                @foreach(explode(',',$membership->features_en) as $feature)
                                    <li>
                                        {{ trim($feature) }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <img src="https://dummyimage.com/585x410/bdb9bd/474747.png">
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="row padding-top-100">
                <div class="col-lg-12 text-center">
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing end -->

</x-en-master>
