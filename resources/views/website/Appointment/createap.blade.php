@extends('Layouts.WebsiteLayout.Layout')
@section('style')
    @parent
    <style>
        .Appointment-section{
            background-color: #E08283;
            text-align: center;
        }

        .site-btn{
            margin-bottom: 20px;
        }
        .section-title{
            padding-top: 20px;
            font-size: 40px;
        }
        .form-control{
            background: none;
            border-color: #2b4a5c;
            color: #5e5e5d;
            font-size: 16px;
    }
       .error{
           color: white;
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

    <section class="Appointment-section">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="section-title">
                <h2>Book An Appointment</h2>
            </div>
                <div class="row">
                    <div class="col-md-4" style="margin: auto">
                        <form class="fw-contact-form" action="{{route('appointment.store')}}" method="post" >
                            @csrf
                            <div class="form-group">
                                <select name="services"  class="form-control" value="{{old('services')}}">
                                 <option>Select Service*</option>
                                    @foreach($servicess as $service)
                                        <option value="{{$service->title}}" {{ old('services',$service->title)==$service->title ? 'selected' : ''  }}>{{$service->title}}</option>
                                    @endforeach
                                </select>
                                <span class="error">{{$errors->first('services')}}</span>
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{old('date')}}" class="form-control datepicker" placeholder="Date *" name="date">
                                <span class="error">{{$errors->first('date')}}</span>
                            </div>
                            <div>
                                <textarea placeholder="Your Message*" name="description">{{old('description')}}</textarea>
                                <span class="error">{{$errors->first('description')}}<br></span>
                            </div>
                            <button class="site-btn" name="submit">Save</button>
                    </form>
                </div>
        </div>
        </div>
    </section>
    <!-- Page info section end -->
    <!-- Appointment section -->
@endsection
