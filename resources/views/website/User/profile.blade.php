@extends('Layouts.WebsiteLayout.Layout')
@section('style')
    @parent
    <style>
        .profile-section{
            background-color: #E08283;
            text-align: center;
        }
        .card {
            padding-top: 20px;
            margin: 10px 0 20px 0;
            background-color: rgba(214, 224, 226, 0.2);
            border-top-width: 0;
            border-bottom-width: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }


        .card.hovercard {
            padding-top: 0;
            overflow: hidden;
            text-align: center;
            background-color: rgba(214, 224, 226, 0.2);
        }


        .card.hovercard .info {
            padding: 25px px 25px;
        }

        .card.hovercard .info .desc {
            padding-left: 15px ;
            overflow: hidden;
            font-size: 14px;
            font-weight:bold
            line-height: 20px;
            text-overflow: ellipsis;
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
                <div class="col-md-4" style="margin: auto">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card hovercard">
                                    <div class="info">
                                        <div class="desc"><i class="fa fa-user" aria-hidden="true"></i>
                                            Name: {{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                                        <div class="desc"><i class="fa fa-envelope" aria-hidden="true"></i>
                                            Email: {{\Illuminate\Support\Facades\Auth::user()->email}}</div>
                                        <div class="desc"><i class="fa fa-hashtag" aria-hidden="true"></i>
                                            Of Appointments: {{\Illuminate\Support\Facades\Auth::user()->appointments()->count()}}</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>
@endsection