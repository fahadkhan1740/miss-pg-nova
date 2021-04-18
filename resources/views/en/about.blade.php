<x-en-master>

    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 about-breadcrumb-overlay"
         style="background-image:url({{ 'storage/'.$aboutUs->banner_path }});">
        <div class="breadcrumb-inner">
            <h1 class="page-title">{{ __('custom.links.about') }}</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">{{ __('custom.links.home') }}</a></li>
                <li><a href="{{ route('about', ['locale' => 'en']) }}">{{ __('custom.links.about') }}</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about start -->
    <div class="about-page-top">        
        <div class="container section-padding">
            <div class="row row-eq-height">
                <div class="col-lg-5 px-md-5">
                    <img src="https://images.unsplash.com/photo-1576678927484-cc907957088c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1534&q=80"
                        alt="">
                </div>
                <div class="col-lg-7 px-md-5">
                    <h2 class="display-6 about-box-underline">AI NAWADI HOLDING'S <br>HISTORY & VISION</h2>
                    <h4 class="display-6">Welcome to Miss Platinum Health</h4>
                    <p>Culpa enim anim nulla duis ullamco esse excepteur dolor in non sit. Eiusmod aliqua nulla nulla esse
                        occaecat do voluptate eu elit enim. Ipsum sint non magna occaecat deserunt reprehenderit cupidatat
                        cillum tempor aute.
                    </p>
                    <p>Lorem aute reprehenderit mollit consequat duis incididunt Lorem cillum esse. Nulla occaecat ex veniam
                        aliquip
                        ullamco anim. Voluptate do nisi ea magna consectetur ad minim magna est proident. Aliqua qui enim
                        duis minim
                        dolor aute ut eiusmod deserunt proident exercitation ullamco esse aute. Voluptate id dolore sunt
                        dolore sunt
                        incididunt esse. Do incididunt ex cupidatat occaecat occaecat ut ipsum amet. Do magna duis aliqua
                        fugiat sint
                        culpa proident ut exercitation ex sint id.</p>
                </div>
        
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- project-counter start -->
    <div class="container-fluid">
        <div class="container padding-top-165 padding-bottom-50">
            <div class="row ">                
                <div class="col-lg-12">
                    <h2 class="display-6 box-underline">Our Mission</h2>
                    <p class="text-center">Lorem aute reprehenderit mollit consequat duis incididunt Lorem cillum esse. Nulla occaecat ex veniam
                        aliquip
                        ullamco anim. Voluptate do nisi ea magna consectetur ad minim magna est proident. Aliqua qui enim
                        duis minim
                        dolor aute ut eiusmod deserunt proident exercitation ullamco esse aute. Voluptate id dolore sunt
                        dolore sunt
                        incididunt esse. Do incididunt ex cupidatat occaecat occaecat ut ipsum amet. Do magna duis aliqua
                        fugiat sint
                        culpa proident ut exercitation ex sint id.</p>
                    <p class="text-center">Lorem aute reprehenderit mollit consequat duis incididunt Lorem cillum esse. Nulla occaecat ex veniam
                        aliquip
                        ullamco anim. Voluptate do nisi ea magna consectetur ad minim magna est proident. Aliqua qui enim
                        duis minim
                        dolor aute ut eiusmod deserunt proident exercitation ullamco esse aute. Voluptate id dolore sunt
                        dolore sunt
                        incididunt esse. Do incididunt ex cupidatat occaecat occaecat ut ipsum amet. Do magna duis aliqua
                        fugiat sint
                        culpa proident ut exercitation ex sint id.</p>
                    </div>
        
            </div>
        </div>        
    </div>    
    <!--project-counter-->

    <!-- core values start -->    
    <div class="container-fluid padding-top-50 padding-bottom-50 core-values">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <h2 class="display-6 box-underline">Our Core Values</h2>
                        <p class="text-center">Lorem aute reprehenderit mollit consequat duis incididunt Lorem cillum esse. Nulla occaecat ex veniam
                            aliquip
                            ullamco anim. Voluptate do nisi ea magna consectetur ad minim magna est proident. Aliqua qui enim
                            duis minim
                            dolor aute ut eiusmod deserunt proident exercitation ullamco esse aute. Voluptate id dolore sunt
                            dolore sunt
                            incididunt esse. Do incididunt ex cupidatat occaecat occaecat ut ipsum amet. Do magna duis aliqua
                            fugiat sint
                            culpa proident ut exercitation ex sint id.</p>
                        <p class="text-center">Lorem aute reprehenderit mollit consequat duis incididunt Lorem cillum esse. Nulla occaecat ex veniam
                            aliquip
                            ullamco anim. Voluptate do nisi ea magna consectetur ad minim magna est proident. Aliqua qui enim
                            duis minim
                            dolor aute ut eiusmod deserunt proident exercitation ullamco esse aute. Voluptate id dolore sunt
                            dolore sunt
                            incididunt esse. Do incididunt ex cupidatat occaecat occaecat ut ipsum amet. Do magna duis aliqua
                            fugiat sint
                            culpa proident ut exercitation ex sint id.</p>
                    </div>
        
                </div>
            </div>
        </div>
    <!-- core values end -->

    <!-- mission-area start -->
    {{-- <div class="mission-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mission-content">
                        <h3 class="serial">01</h3>
                        <div class="title">
                            <h1>Our Mission & Vision</h1>
                        </div>
                        <div class="mission-content">
                            <div style="color: black;">
                                {!! $aboutUs->mission_vision !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- contact-details start -->
    <div class="container-fluid contact-details padding-top-50 padding-bottom-50">
        <div class="container">
            <h2 class="display-6 box-underline">Contact Details</h2>
            <div class="row">
                <div class="col-lg-4 text-center contact-cards">
                    <i class="fa fa-asl-interpreting"></i>
                    <p class="card-text">Ms. Platinum Gym, Messila</p>
                </div>
                <div class="col-lg-4 text-center contact-cards">
                    <i class="fa fa-asl-interpreting"></i>
                    <p class="card-text">Ms. Platinum Gym, Messila</p>
                </div>
                <div class="col-lg-4 text-center contact-cards">
                    <i class="fa fa-asl-interpreting"></i>
                    <p class="card-text">Ms. Platinum Gym, Messila</p>
                </div>
    
            </div>
        </div>
    </div>
    <!-- contact-details end -->
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
</x-en-master>
