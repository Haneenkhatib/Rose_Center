@extends('Layouts.WebsiteLayout.Layout')


@section('style')
    @parent
    <style>
        .Appointment-section{
            background-color: #E08283;
            text-align: center;
        }
        .form{
            margin: auto;
        }
        .site-btn{
            margin-bottom: 20px;
        }
        .section-title{
            padding-top: 20px;
        }
        .select{
            height: 50px;
            width: 100%;
            border: none;
            background: none;
            border-bottom: 2px solid #5e5e5d;
            color: #b0b0b0;
            font-size: 16px;
            margin-bottom: 22px;
        }
        option{
            color: #5e5e5d;
        }
    </style>


@endsection
@section('body')
    <!-- Page info section -->
    <section class="page-info-section set-bg" data-setbg="{{asset('websiteControl/img/page-top-bg/4.jpg')}}">
        <div class="container text-center">
            <h2>Appointment </h2>
        </div>
    </section>
    <!-- Page info section end -->
    <!-- Appointment section -->
    <section class="Appointment-section">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="section-title text-white">
                <h2>Book An Appointment</h2>
            </div>
            <div class="row">
            <div class="form">
                <form class="fw-contact-form" action="{{route('appointment.store')}}" method="post" >
                    @csrf
                    <div class="cf-inputs">
                        <div class="cf-input">
                            <input type="text" placeholder="Your Name*" name="name">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>
                        <div class="cf-input">
                            <input type="email" class="cf-input" placeholder="Your E-mail*" name="email">
                            <span class="error">{{$errors->first('email')}}</span>
                        </div>
                        <div class="cf-input">
                            <select name="services"  class="select">
                                <option value="-1">Select Service*</option>
                                @foreach($services as $service)
                                    <option value="{{$service->title}}">{{$service->title}}</option>
                                @endforeach
                            </select>
                            <span class="error">{{$errors->first('services')}}</span>
                        </div>
                        <div class="cf-input">
                            <input type="text" class="cf-input datepicker" placeholder="Date*" name="date">
                            <span class="error">{{$errors->first('date')}}</span>
                        </div>
                    </div>
                    <div>
                        <textarea placeholder="Your Message*" name="description"></textarea>
                        <span class="error">{{$errors->first('description')}}</span>
                    </div>
                    <button class="site-btn" name="submit">Save</button>
                </form>
            </div>
            </div>
        </div>
    </section>

    <!-- Appointment section end -->

@endsection