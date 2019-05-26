@extends('Layouts.ControlLayout.Layout')
@section('body')
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>Profile </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <div class="row">
                    <dt class="col-sm-3">User Name :</dt>
                    <dd class="col-sm-9">{{$user->name}}</dd><br><br>
                        <dt class="col-sm-3">Email :</dt>
                    <dd class="col-sm-9">{{$user->email}}</dd><br><br>
                        <dt class="col-sm-3">Created At:</dt>
                    <dd class="col-sm-9">{{Carbon\Carbon::parse($user
                ->created_at)->format("y-m-d D")}}</dd><br><br>
                    </div>
                </div>
            </div>
@endsection