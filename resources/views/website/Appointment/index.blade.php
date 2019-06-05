@extends('Layouts.WebsiteLayout.Layout')


@section('style')
    @parent
    <style>
        .Appointments-section{
            padding-top: 40px;
            padding-bottom: 40px;
            margin: auto;
        }
    </style>
@endsection
@section('body')
    <!-- Page info section -->
    <section class="page-info-section set-bg" data-setbg="{{asset('websiteControl/img/page-top-bg/4.jpg')}}">
        <div class="container text-center">
            <h2>Appointments </h2>
        </div>
    </section>
    <section class="Appointments-section">
        <div class="container">
            <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                    <tr>
                        <th> # </th>
                        <th> Service </th>
                        <th> Date </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($appointments as $appointment)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td> {{$appointment->service['title']}}</td>
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
    </section>
@endsection