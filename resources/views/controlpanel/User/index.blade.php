@extends('Layouts.ControlLayout.Layout')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>Users </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Created_at </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$user->name}}</td>
                                <td> {{$user->email}}</td>
                                <td> {{Carbon\Carbon::parse($user
                ->created_at)->format("y-m-d D")}} </td>
                                @empty
                                    <td colspan="4">No Users Found </td>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection