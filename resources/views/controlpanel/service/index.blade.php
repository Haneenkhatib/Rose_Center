@extends('Layouts.ControlLayout.Layout')

@section('style')
    <style>
        .fa-female{
            margin-right: 10px;
        }
    </style>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-shopping-cart"></i>Services </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Submitted at</th>
                            <th style="text-align: center">Options</th>
                        </tr>
                        <tbody>
                        @forelse($services as $service)
                        <tr id="service{{$service->id}}">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$service->title}}</td>
                        <td>{{ str_limit($service->description, 20) }}</td>
                        <td>{{$service->price}}</td>
                        <td>{{\Carbon\Carbon::parse($service->created_at)->format('y-m-d D')}}</td>
                            <td style="text-align: center">
                                <a class="btn btn-primary" href="{{route('Services.edit',['id' =>$service->id ])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-danger delete-service"
                                data-id="{{$service->id}}"
                                data-token="{{ csrf_token() }}">
                                <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">There is no Services</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="com-md-12 text-right">
                        {{$services->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.delete-service').click(function () {
            var id = $(this).data("id");
            var token = $(this).data("token");
            console.log(id);
            $.ajax(
                {
                    type: "DELETE",
                    url: '{{ url('controlpanel/Services') }}/' + id,
                    data: {_method: 'delete', _token: token},
                    success: function (data) {
                        console.log(data);
                        $("#service" + id).remove();

                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
        })
    </script>
@endsection
