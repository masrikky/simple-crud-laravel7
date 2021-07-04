@extends('blogs.layout')

@section('content')
@foreach ($blogs as $blogs)
		<div class="col">  
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">

           	  <h4>{{ $blogs->title }}</h4>
              <p class="card-text">{{ $blogs->description }}</p>


              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="{{ route('blogs.show',$blogs->id) }}">View</a>
                  <a class="btn btn-sm btn-warning" href="{{ route('blogs.edit',$blogs->id) }}">Edit</a>
                  
                  <form action="{{ route('blogs.destroy',$blogs->id) }}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </div>
                  </div>
                </form>
              
            </div>
          </div>
        </div>
@endforeach
@endsection