@extends('blogs.layout')

@section('content')

<form action="{{ route('blogs.update', $blogs->id) }}" method="POST">
        @csrf
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Title :</strong>
                    <input type="text" name="title" value="{{ $blogs->title }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $blogs->description }}</textarea>
                </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>


@endsection