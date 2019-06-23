@extends('Layouts.ControlLayout.Layout')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-shopping-cart"></i>Appointments </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th> # </th>
                            <th> User </th>
                            <th> Service </th>
                            <th> Date </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($appointments as $appointment)
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$appointment->user->name}}</td>
{{--                                {{dd($appointment->service->title)}}--}}
                                <td>{{$appointment->service['title']}}</td>
                                <td> {{Carbon\Carbon::parse($appointment
                ->date)->format("y-m-d D")}} </td>
                        @empty
                            <td colspan="4">No Appointments Found </td>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="com-md-12 text-right">
                        {{$appointments->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection