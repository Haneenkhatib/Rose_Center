@extends('Layouts.ControlLayout.Layout')

@section('style')
    <style>
        .form-group {
            margin-right: 20px;
        }
    </style>
@endsection

@section('body')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-plus"></i> Add Service</h3>
        </div>
        <div class="panel-body">
    <div class="row" >
        <form action="{{route('Services.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title<span class="required">*</span></label>
                <input type="text" class="form-control" name="title" >
                <span class="error">{{$errors->first('title')}}</span>
            </div>
            <div class="form-group shadow-textarea">
                <label for="Description">Description<span class="required">*</span></label>
                <textarea class="form-control" name="description" rows="3"></textarea>
                <span class="error">{{$errors->first('description')}}</span>
            </div>
            <div class="form-group">
                <label for="price">Price<span class="required">*</span></label>
                <input type="text" class="form-control" name="price">
                <span class="error">{{$errors->first('price')}}</span>
            </div>
            <div class="form-action">
                <input type="submit" name="store" value="Store" class="btn btn-primary">
                <input type="reset" name="cancel" value="Cancel" class="btn btn-default">
            </div>

        </form>
    </div>
        </div>
    </div>


@endsection
