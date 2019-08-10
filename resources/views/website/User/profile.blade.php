@extends('Layouts.WebsiteLayout.Layout')
@section('style')
    @parent
    <style>
        .profile-section{
            background-color: #E08283;
            text-align: center;
        }


    </style>


@endsection
@section('body')
<section class="page-info-section set-bg" data-setbg="{{asset('websiteControl/img/page-top-bg/4.jpg')}}">
        <div class="container text-center">
            <h2>User Profile </h2>
        </div>
    </section>
    <section class="profile-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin: auto;background-color: #da555b;margin-top: 20px;margin-bottom: 20px">
                    <h2>Name: {{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
                    <h2>email: {{\Illuminate\Support\Facades\Auth::user()->email}}</h2>
                    <h2>Appointment: {{\Illuminate\Support\Facades\Auth::user()->appointments->count()}}</h2>

                </div>
                </div>
        </div>
    </section>
@endsection