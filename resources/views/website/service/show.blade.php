@extends('Layouts.WebsiteLayout.Layout')

@section('body')
    <!-- Services section -->
    <section class="services-section spad set-bg" data-setbg="{{asset('websiteControl/img/service-bg.png')}}">
        <div class="container">
            <div class="section-title text-white">
                <h2>{{$service->title}}</h2>
            </div>
            <div class="row">
                    <div class="col-lg-4 col-md-6 service text-white">
                        <p>{{$service->description}}</p><br><br>
                        <h2>{{$service->price}} ₪</h2>
                    </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->
@endsection