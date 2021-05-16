<x-en-master>

{{-- <!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end --> --}}
<!-- banner start -->
    {{-- <div class="banner-area banner-style-one" style="background-image:url({{ asset('storage/'.getHomeBackground()) }}">
    </div> --}}
    <div class="banner-area banner-style-one"
         style="background-image:url({{ 'storage/'.getHomeBackground() }})">
        <div class="banner-message">
            <h1 class="display-6">{{ $titles->title_en }}</h1>
            <p class="lead">{!! $titles->sub_title_en !!}</p>
            <p class="lead">
                <a class="btn btn-success btn-md" href="#contactForm"
                        role="button">{{ $titles->button_text_en }}</a>
            </p>
        </div>
    </div>
    <!-- banner end -->

    <!-- home-about start -->
    <div class="home-about padding-top-100 padding-bottom-94">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-lg-6 px-md-5">
                    <img src="{{ 'storage/'.$aboutUs->image_path }}"
                         alt="">
                </div>
                <div class="col-lg-6 px-md-5">
                    <h2 class="display-6 box-underline">{{ $aboutUs->title_en }}</h2>
                    <h4 class="display-6">{{ $aboutUs->sub_title_en }}</h4>
                    <div class="card-text">{!! $aboutUs->overview_en !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- home-about end -->

    <!-- home service start -->
    <div class="home-services padding-top-100 padding-bottom-94">
        <div class="container">
            <h2 class="display-6 box-underline">Our Services</h2>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ 'storage/'.$service->icon }}" alt=""
                                     style="bottom: 2rem;width: 5rem;position: relative">
                                <h5 class="card-title">{{ $service->title_en }}</h5>
                                <div class="card-text overflow-card">
                                    {{ strlen($service->description_en) > 100 ? substr($service->description_en,5,500).'..' : $service->description_en }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- home service end -->

    <!-- home explore start -->
    <div class="home-explore ">
        <div class="container">
            <h2 class="display-6 box-underline">Memberships</h2>
            <div class="row">
                @foreach($memberships as $membership)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body" style="position: relative">
                                <div class="clock-holder">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <h5 class="card-title">{{ $membership->title_en }}</h5>
                                <p class="card-text">
                                    {!! $membership->short_description_en !!}
                                </p>
                                <hr>
                                @foreach(explode(',',$membership->features_en) as $item)
                                    <p class="card-text">
                                        {{ trim($item) }}
                                    </p>
                                @endforeach
                                <hr>
                            </div>
                            <p class="lead">
                                <a class="btn btn-custom btn-sm"
                                   href="{{ route('memberships', ['locale' => app()->getLocale()]) }}" role="button">Let's
                                    Try</a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- home explore end -->
    <!-- map-area start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 no-gutter">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="500" id="gmap_canvas"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13922.563150286602!2d48.0851024!3d29.2635096!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1eb3e25c0af647c!2sMiss%20Platinum%20Health%20Club!5e0!3m2!1sen!2skw!4v1604780698705!5m2!1sen!2skw"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor
                            review</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map-area end -->
    <!-- contact area -->
    <div class="contact-area padding-top-100">
        <div class="container">
            <div class="row" id="contactForm">
                <div class="col-lg-12">
                    <div class="contact-top">
                        <div class="col-lg-12">
                            <div class="contact-title text-center">
                                <h2 class="display-6 box-underline">{{ __('custom.contact_us.drop_us_a_line') }}</h2>
                                <p class="subtitle">{{ __('custom.contact_us.any_questions') }}</p>
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        <div class="col-lg-10 offset-lg-1">
                            <form class="row" method="post"
                                  action="{{ route('contact.store', ['locale' => app()->getLocale()]) }}"
                                  name="registration" style="padding-top: 45px;padding-bottom: 70px;position: inherit;">
                                @csrf
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                               aria-describedby="helpId" placeholder="Name*" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="name"
                                               aria-describedby="helpId" placeholder="{{ __('custom.email') }}*"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="mobile" id="name"
                                               aria-describedby="helpId"
                                               placeholder="{{ __('custom.contact_us.phone') }}*" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="" rows="3"
                                                  placeholder="{{ __('custom.contact_us.submit_message') }}*"
                                                  required></textarea>
                                    </div>
                                </div>
                                <div class="btn-wrapper desktop-center margin-bottom-10" style="margin: 0 auto">
                                    <button class="btn btn-success btn-md" type="submit"
                                            role="button">{{ __('custom.contact_us.submit_message') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
</x-en-master>
