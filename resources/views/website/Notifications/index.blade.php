@extends('Layouts.WebsiteLayout.Layout')

@section('style')
    @parent

@endsection
@section('body')
    <section class="page-info-section set-bg" data-setbg="{{asset('websiteControl/img/page-top-bg/4.jpg')}}">
        <div class="container text-center">
            <h2>Notifications </h2>
        </div>
    </section>
    <section class="Appointments-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin: auto;background-color: #da555b;margin-top: 50px;margin-bottom: 50px;padding-top: 20px">
                    @forelse(\Illuminate\Support\Facades\Auth::user()->notifications as $notification)
                        <li style="list-style: none;text-align: center;">
                            you book appointment in {{$notification->data['date']}}</li>
                        <hr>
                        @empty
                        <li style="list-style: none">There's no notifications</li>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection