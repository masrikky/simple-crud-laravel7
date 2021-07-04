@extends('blogs.layout')

@section('content')

<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Title :</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description :</strong>
                <textarea class="form-control" style="height:200px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
   
</form>


@endsection