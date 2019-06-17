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
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                    <tr>
                        <th> # </th>
                        <th> Service </th>
                        <th> Date </th>
                        <th style="text-align: center">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($appointments as $appointment)
                        <tr id="appointment{{$appointment->id}}">
                            <td> {{$loop->iteration}} </td>
                            <td> {{$appointment->service['title']}}</td>
                            <td> {{Carbon\Carbon::parse($appointment
                    ->date)->format("y-m-d D")}} </td>
                            <td style="text-align: center">
                                {{--<a class="btn btn-primary" href="{{route('appointment.edit',['id' =>$appointment->id ])}}">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                {{--</a>--}}
                                <a class="btn btn-danger delete-appointment"
                                   data-id="{{$appointment->id}}"
                                   data-token="{{ csrf_token() }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
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
@section('script')
    <script>
        $('.delete-appointment').click(function () {
            var id = $(this).data("id");
            var token = $(this).data("token");
            console.log(id);
            $.ajax(
                {
                    type: "DELETE",
                    url: '{{ url('website/appointment') }}/' + id,
                    data: {_method: 'delete', _token: token},
                    success: function (data) {
                        console.log(data);
                        $("#appointment" + id).remove();

                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
        })
    </script>
@endsection