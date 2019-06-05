    @extends('Layouts.WebsiteLayout.Layout')


    @section('style')
        @parent
    @endsection

    @section('body')
        <!-- Page info section -->
        <section class="page-info-section set-bg" data-setbg="{{asset('websiteControl/img/page-top-bg/1.jpg')}}">
            <div class="container text-center">
                <h2>Services</h2>
            </div>
        </section>
        <!-- Page info section end -->
        <!-- Services section -->
        <section class="services-section spad set-bg" data-setbg="{{asset('websiteControl/img/service-bg.png')}}">
            <div class="container">
                <div class="section-title text-white">
                    <h2>Our Services</h2>
                </div>
                <div class="row">
                @forelse($services as $service)
                        <div class="col-lg-4 col-md-6 service text-white">
                            <h2>{{$service->title}}</h2>
                            <p>{{str_limit($service->description,20)}}</p>
                            <a href="{{route('Service.show',$service->id)}}">More Info</a>
                        </div>
                @empty
                        <div class="col-lg-4 col-md-6 service text-white">
                            <h2>There is no Services</h2>
                        </div>
                @endforelse
                </div>
            </div>
        </section>
        <!-- Services section end -->


    @endsection