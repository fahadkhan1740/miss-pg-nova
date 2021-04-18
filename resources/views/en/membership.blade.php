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
    <div class="memberships-area padding-top-90 padding-bottom-200">
        <div class="container">
            @for ($i=1;$i<=4;$i++)
            @if ($i%2!=0)
            <div class="row no-gutter">
                    <div class="col-lg-6">
                        <img src="https://dummyimage.com/585x410/bdb9bd/474747.png">
                    </div>
                    <div class="col-lg-6 pl-5 pt-3">
                        <h4 class="text-success">Membership {{$i}}</h4>
                        <p class="text-left">Aliqua eu officia enim minim. Anim consequat minim exercitation aute non non officia anim incididunt est aliqua eu ea. Reprehenderit esse ipsum quis ad irure mollit veniam occaecat do aliqua do enim id duis. Aute deserunt magna enim ipsum officia irure aute minim. Ex ullamco exercitation labore amet do est eiusmod qui sunt et aliquip fugiat nostrud Lorem. Pariatur nisi fugiat adipisicing incididunt proident. Excepteur cupidatat enim cillum quis deserunt voluptate cillum est ullamco voluptate aliqua aute enim.</p>
                    </div>
                </div>    
            @else
            <div class="row no-gutter">                    
                    <div class="col-lg-6 pr-5 pt-3">
                        <h4 class="text-success">Membership {{$i}}</h4>
                        <p class="text-right">Officia enim laboris ea id labore exercitation id reprehenderit officia sit aute incididunt. Ipsum do officia officia veniam duis proident commodo et culpa veniam. Pariatur et ad ullamco laboris officia non do proident enim do id cillum id ut. Sint in excepteur fugiat sit nostrud occaecat sit voluptate fugiat eu. Ut mollit dolor consectetur quis amet ipsum amet incididunt. Duis dolore do pariatur esse sit est. Consequat exercitation sit proident magna mollit reprehenderit ut.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://dummyimage.com/585x410/bdb9bd/474747.png">
                    </div>
                </div>
            @endif                
            @endfor
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
