@extends('Layouts.WebsiteLayout.Layout')

@section('style')
    <style>

        .ci-item .ca-text {
            padding-left: 0px;
            padding-top: 0px;
            font-size: 17px;
            color: #e32a63;
            margin: 0px;
            margin-top: 15px;
        }

        .contact-content p {
            font-size: 20px;
            line-height: 1.8;
            margin-bottom: 7px;
        }
        .ci-item a p:hover{

            color: #4a4a4a;
        }
    </style>
@endsection
@section('body')
    <!-- Page info section -->
    <section class="page-info-section set-bg" data-setbg="{{asset('websiteControl/img/page-top-bg/3.jpg')}}">
        <div class="container text-center">
            <h2>contact</h2>
        </div>
    </section>
    <!-- Page info section end -->
    <!-- about section -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-content">
                    <h2 class="contact-title">Rose Center</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque,
                        at rutrum nulla dictumdsds. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.Lorem ipsum dolor sit amet.</p>
                        <div class="ci-item">
                            <div class="row">
                                <div class="col-lg-2">
                                 <span class="fa-stack fa-2x">
                                     <i class="fas fa-square fa-stack-2x" style="color: #e32a63;"></i>
                                     <i class="fas fa-map-marker-alt fa-stack-1x fa-inverse"></i>
                                 </span>
                                </div>
                                <div class="col-lg-8">
                                    <p class="ca-text" style="color: #4a4a4a;">4127 Raoul Wallenber4</p>
                                </div>
                            </div>
                        </div>
                    <div class="ci-item">
                        <div class="row">
                            <div class="col-lg-2">
                                 <span class="fa-stack fa-2x">
                                     <i class="fas fa-square fa-stack-2x" style="color: #e32a63;"></i>
                                     <i class="fas fa-phone fa-flip-horizontal fa-stack-1x fa-inverse"></i>
                                 </span>
                            </div>
                            <div class="col-lg-8">
                                <p class="ca-text" style="color: #4a4a4a;">203-808-8613</p>
                            </div>
                        </div>
                    </div>
                    <div class="ci-item">
                        <div class="row">
                            <div class="col-lg-2">
                                 <span class="fa-stack fa-2x">
                                     <i class="fas fa-square fa-stack-2x" style="color: #e32a63;"></i>
                                     <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                                 </span>
                            </div>
                            <div class="col-lg-8">
                                <p class="ca-text" style="color: #4a4a4a;">Rose_Center2019@gmail.com</p>
                            </div>
                        </div>
                    </div>


                    </div>


                <div class="col-lg-6" style="padding: 0px 60px;">
                    <h2 class="contact-title">Other ways to connect</h2>
                    <p style="font-weight: 400;margin-top: 12px;">Call, email, send us a postcard — whatever works for you.<br> We'll be here.</p>
                    <div class="ci-item">
                        <div class="row">
                            <div class="col-lg-2">
                                 <span class="fa-stack fa-2x">
                                     <i class="fas fa-square fa-stack-2x" style="color: #e32a63;"></i>
                                     <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                 </span>
                            </div>
                            <div class="col-lg-8">
                                <a href="https://www.facebook.com/"><p class="ca-text">Rose_Center19</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="ci-item">
                        <div class="row">
                            <div class="col-lg-2">
                                 <span class="fa-stack fa-2x">
                                     <i class="fas fa-square fa-stack-2x" style="color: #e32a63;"></i>
                                     <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                 </span>
                            </div>
                        <div class="col-lg-8">
                           <a href="https://www.twitter.com/"><p class="ca-text">RoseCenter2019</p></a>
                        </div>
                        </div>
                    </div>
                    <div class="ci-item">
                        <div class="row">
                            <div class="col-lg-2">
                                 <span class="fa-stack fa-2x">
                                     <i class="fas fa-square fa-stack-2x" style="color: #e32a63;"></i>
                                     <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                                 </span>
                            </div>
                            <div class="col-lg-8 ci-item">
                                <a href="https://www.youtube.com/"><p class="ca-text">Rose_Center19</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="ci-item">
                        <div class="row">
                            <div class="col-lg-2">
                                 <span class="fa-stack fa-2x">
                                     <i class="fas fa-square fa-stack-2x" style="color: #e32a63;"></i>
                                     <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                 </span>
                            </div>
                            <div class="col-lg-8">
                                <a href="https://www.instagram.com/"><p class="ca-text">RoseCenter2019</p></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


@endsection