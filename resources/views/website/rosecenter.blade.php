@extends('Layouts.WebsiteLayout.Layout')
@section('body')
    <section class="hero-section set-bg" data-setbg="{{asset('websiteControl/img/bg.jpg')}}" style="background-image: url(../../../public/websiteControl/img/bg.jpg);">
        <div class="container">
            <div class="hero-slider owl-carousel owl-loaded">

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2284px, 0px, 0px); transition: all 0s ease 0s; width: 6852px;">

                        <div class="owl-item cloned" style="width: 1142px;">
                            <div class="hs-item">
                                <div class="hs-content text-white">
                                    <h2>Be bold.<br>Be beautiful.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    <a href="#" class="site-btn sb-big">See Offers</a>
                                </div>
                                <div class="hs-preview set-bg" data-setbg="{{asset('websiteControl/img/hero-slider/1.jpg')}}" style="background-image: url(../../../public/websiteControl/img/hero-slider/1.jpg);"></div>
                            </div>
                        </div>

                        <div class="owl-item cloned" style="width: 1142px;">
                            <div class="hs-item">
                                <div class="hs-content text-white">
                                    <h2>Be bold.<br>Be beautiful.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    <a href="#" class="site-btn sb-big">See Offers</a>
                                </div>
                                <div class="hs-preview set-bg" data-setbg="{{asset('websiteControl/img/hero-slider/1.jpg')}}" style="background-image: url(../../../public/websiteControl/img/hero-slider/1.jpg);"></div>
                            </div>
                        </div>

                        <div class="owl-item active" style="width: 1142px;"><div class="hs-item">
                                <div class="hs-content text-white">
                                    <h2>Be bold.<br>Be beautiful.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    <a href="#" class="site-btn sb-big">See Offers</a>
                                </div>
                                <div class="hs-preview set-bg" data-setbg="{{asset('websiteControl/img/hero-slider/1.jpg')}}" style="background-image: url(../../../public/websiteControl/img/hero-slider/1.jpg);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro section -->
    <section class="intro-section spad  set-bg" data-setbg="{{asset('websiteControl/img/intro-bg.jpg')}}" style="background-image: url(../../../public/websiteControl/img/intro-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="intro-content">
                        <h2>Why Choose Us?</h2>
                        <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus hendrerit, id lobortis leo luctus nec. In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus hendrerit, id lobortis leo luctus nec. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- fact -->
                <div class="col-lg-3 col-sm-6 fact">
                    <i class="flaticon-016-woman"></i>
                    <h2>+3500</h2>
                    <p>Happy Clients</p>
                </div>
                <!-- fact -->
                <div class="col-lg-3 col-sm-6 fact">
                    <i class="flaticon-020-mirror"></i>
                    <h2>12</h2>
                    <p>New Locations</p>
                </div>
                <!-- fact -->
                <div class="col-lg-3 col-sm-6 fact">
                    <i class="flaticon-030-cream-1"></i>
                    <h2>+175</h2>
                    <p>Great Employees</p>
                </div>
                <!-- fact -->
                <div class="col-lg-3 col-sm-6 fact">
                    <i class="flaticon-013-facial-mask-1"></i>
                    <h2>56K</h2>
                    <p>Instagram Followers</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section -->
    <section class="services-section spad set-bg" data-setbg="{{asset('websiteControl/img/service-bg.png')}}" style="background-image: url(../../../public/websiteControl/img/service-bg.png);">
        <div class="container">
            <div class="section-title text-white">
                <h2>Our Services</h2>
            </div>
            <div class="row">
                <!-- service -->
                <div class="col-lg-4 col-md-6 service text-white">
                    <i class="flaticon-016-woman"></i>
                    <h2>Hair Dressing</h2>
                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat.</p>
                </div>
                <!-- service -->
                <div class="col-lg-4 col-md-6 service text-white">
                    <i class="flaticon-017-soap"></i>
                    <h2>Zen Massage</h2>
                    <p>Aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat sollicitudin </p>
                </div>
                <!-- service -->
                <div class="col-lg-4 col-md-6 service text-white">
                    <i class="flaticon-009-makeup-5"></i>
                    <h2>Manicure &amp; Pedicure</h2>
                    <p>Scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin </p>
                </div>
                <!-- service -->
                <div class="col-lg-4 col-md-6 service text-white">
                    <i class="flaticon-048-makeup"></i>
                    <h2>Make Up</h2>
                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat.</p>
                </div>
                <!-- service -->
                <div class="col-lg-4 col-md-6 service text-white">
                    <i class="flaticon-045-eyelid"></i>
                    <h2>Tanning Bed</h2>
                    <p>Aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat sollicitudin </p>
                </div>
                <!-- service -->
                <div class="col-lg-4 col-md-6 service text-white">
                    <i class="flaticon-015-facial-mask"></i>
                    <h2>Spa Treatments</h2>
                    <p>Scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section -->
    <section class="testimonials-section set-bg" data-setbg="{{asset('websiteControl/img/review-bg.jpg')}}" style="background-image: url(../../../public/websiteControl/img/review-bg.jpg);">
        <div class="container">
            <div class="section-title mb-0">
                <h2>Client Testimonials</h2>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="testimonials-slider owl-carousel owl-loaded owl-drag">
                        <!-- item -->
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2556px, 0px, 0px); transition: all 0.25s ease 0s; width: 5964px;"><div class="owl-item cloned" style="width: 852px;"><div class="ts-item">
                                        <div class="quota">“</div>
                                        <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus hendrerit, id lobortis leo luctus nec. In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. </p>
                                        <div class="ts-pic set-bg" data-setbg="{{asset('websiteControl/img/review-author.jpg')}}" style="background-image: url(../../../public/websiteControl/img/review-author.jpg);"></div>
                                        <div class="ts-author-info">
                                            <h4>Maria Parker</h4>
                                            <span>Regular Client</span>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 852px;"><div class="ts-item">
                                        <div class="quota">“</div>
                                        <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus hendrerit, id lobortis leo luctus nec. In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. </p>
                                        <div class="ts-pic set-bg" data-setbg="{{asset('websiteControl/img/review-author.jpg')}}" style="background-image: url(../../../public/websiteControl/img/review-author.jpg);"></div>
                                        <div class="ts-author-info">
                                            <h4>Maria Parker</h4>
                                            <span>Regular Client</span>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 852px;"><div class="ts-item">
                                        <div class="quota">“</div>
                                        <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus hendrerit, id lobortis leo luctus nec. In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. </p>
                                        <div class="ts-pic set-bg" data-setbg="{{asset('websiteControl/img/review-author.jpg')}}" style="background-image: url(../../../public/websiteControl/img/review-author.jpg);"></div>
                                        <div class="ts-author-info">
                                            <h4>Maria Parker</h4>
                                            <span>Regular Client</span>
                                        </div>
                                    </div></div>
                                <div class="owl-item active" style="width: 852px;"><div class="ts-item">
                                        <div class="quota">“</div>
                                        <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus hendrerit, id lobortis leo luctus nec. In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. </p>
                                        <div class="ts-pic set-bg" data-setbg="{{asset('websiteControl/img/review-author.jpg')}}" style="background-image: url(../../../public/websiteControl/img/review-author.jpg);"></div>
                                        <div class="ts-author-info">
                                            <h4>Maria Parker</h4>
                                            <span>Regular Client</span>
                                        </div></div>
                                </div>
                                </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </section>

@endsection