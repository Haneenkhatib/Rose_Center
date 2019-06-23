@extends('Layouts.ControlLayout.Layout')
@section('body')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{$usernum}}</span>
                    </div>
                    <div class="desc"> Users Number </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{$appointmentsnum}}</span>
                    </div>
                    <div class="desc">Appoitments Number</div>
                </div>
            </a>
        </div>
@endsection