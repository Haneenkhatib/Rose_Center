@extends('Layouts.ControlLayout.Layout')

@section('style')
    <style>
        .form-group {
            margin-right: 20px;
        }
    </style>
@endsection

@section('body')
    <form action="{{route('Services.store')}}" method="POST">
        @csrf
        <div class="portlet box blue ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-shopping-cart"></i> Add Service </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
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
                </div>
            </div>
        </div>
    </form>
@endsection
