<x-en-master>
    <!-- breadcrumb area -->
    <div class="breadcrumb-style-1 contact-breadcrumb-overlay" style="background-image:url(/img/bg/contact.png);">
        <div class="breadcrumb-inner">
            <h1 class="page-title">Contact Us</h1>
            <ul class="page-list">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact area -->
    <div class="contact-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-top">
                        <div class="col-lg-12">
                            <div class="contact-title text-center">
                                <h2 class="title">Drop us a line</h2>
                                <p class="subtitle">If you got any questions, or you just want to say hello to us. feel free to send us a message</p>
                            </div>
                        </div>
                        <div class="col-lg-10 offset-lg-1">
                            <form class="contact-form" action="" name="registration">
                                <div class="form-row">
                                    <div class="form-group form-field col-md-4">
                                        <input type="text" name="firstname" id="firstname" class="form-control input-form" placeholder="Your Name">
                                    </div>
                                    <div class="form-group form-field col-md-4">
                                        <input type="email" class="form-control input-form" name="email" id="email" placeholder="Email" data-required="text" data-required-email="email">
                                    </div>
                                    <div class="form-group form-field col-md-4">
                                        <input type="number" class="form-control input-form" name="number" id="number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-field margin-bottom-30">
                                        <textarea name="message" id="message" id="thought" cols="30" rows="5" placeholder="Write message" data-required="text"></textarea>
                                    </div>
                                </div>
                                <div class="btn-wrapper desktop-center margin-bottom-10">
                                    <button type="submit" class="btn btn-element btn-normal-size btn-main-color">Submit Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13922.563150286602!2d48.0851024!3d29.2635096!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1eb3e25c0af647c!2sMiss%20Platinum%20Health%20Club!5e0!3m2!1sen!2skw!4v1604780698705!5m2!1sen!2skw" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor review</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row padding-top-90">
                <div class="col-lg-4 margin-bottom-30">
                    <div class="contact-box h-100">
                        <div class="contact-icon">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <h3 class="cb-title">Office Address</h3>
                        <span>
                            Miss Platinum, <br>
                            Sabah Al Salem, Block-1, <br>
                            Opposite Al Jamera Beach Hotel <br>
                            Free parking available
                        </span>
                        <h5> <a href="#">Get In Here</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 margin-bottom-30">
                    <div class="contact-box h-100">
                        <div class="contact-icon">
                            <i class="flaticon-search"></i>
                        </div>
                        <h3 class="cb-title">Email</h3>
                        <span>missplatinum@alnawadiolding.com <br> www.missplatinum.com</span>
                        <h5> <a href="#">Get In Here</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 margin-bottom-30">
                    <div class="contact-box h-100">
                        <div class="contact-icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <h3 class="cb-title">Phone</h3>
                        <span>+965 2292 2570</span>
                        <h5> <a href="#">Get In Here</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- brand-area start -->
    <div class="brand-area">
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

</x-en-master>
