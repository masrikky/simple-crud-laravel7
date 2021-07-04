@extends('blogs.layout')

@section('content')

	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title :</strong>
                {{ $blogs->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description :</strong>
                {{ $blogs->description }}
            </div>
        </div>
    </div>
    

@endsection