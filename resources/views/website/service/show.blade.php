@extends('Layouts.WebsiteLayout.Layout')

@section('body')
    <!-- Page info section -->
    <section class="page-info-section set-bg" data-setbg="{{asset('websiteControl/img/page-top-bg/1.jpg')}}">
        <div class="container text-center">
            <h2>Service {{$service->title}} </h2>
        </div>
    </section>
    <!-- Page info section end -->
    <!-- Services section -->
    <section class="services-section spad set-bg">
        <div class="container">
            <div class="section-title text-white">
                <h2>{{$service->title}}</h2>
            </div>
            <div class="row">
                    <div class="col-lg-4 col-md-6 service text-white">
                        <p><b>Description: </b> {{$service->description}}</p><br><br>
                        <h2><b>Price: </b> {{$service->price}} ₪</h2>
                    </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->
@endsection