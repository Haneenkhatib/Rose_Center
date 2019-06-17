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
                                    {{--<a href="#" class="site-btn sb-big">See Offers</a>--}}
                                </div>
                                <div class="hs-preview set-bg" data-setbg="{{asset('websiteControl/img/hero-slider/1.jpg')}}" style="background-image: url(../../../public/websiteControl/img/hero-slider/1.jpg);"></div>
                            </div>
                        </div>

                        <div class="owl-item cloned" style="width: 1142px;">
                            <div class="hs-item">
                                <div class="hs-content text-white">
                                    <h2>Be bold.<br>Be beautiful.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    {{--<a href="#" class="site-btn sb-big">See Offers</a>--}}
                                </div>
                                <div class="hs-preview set-bg" data-setbg="{{asset('websiteControl/img/hero-slider/1.jpg')}}" style="background-image: url(../../../public/websiteControl/img/hero-slider/1.jpg);"></div>
                            </div>
                        </div>

                        <div class="owl-item active" style="width: 1142px;"><div class="hs-item">
                                <div class="hs-content text-white">
                                    <h2>Be bold.<br>Be beautiful.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    {{--<a href="#" class="site-btn sb-big">See Offers</a>--}}
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
            </div>
        </div>
    </section>



@endsection