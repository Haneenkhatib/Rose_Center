@extends('Layouts.ControlLayout.Layout')
@section('body')
<h1 align="center">Welcome To Rose Center</h1>
<div style="margin-top: 50px">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{$appointments}}</span>
                    </div>
                    <div class="desc">Appointments # </div>
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
                        <span>{{$users}}</span> </div>
                    <div class="desc"> Users # </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection