@extends('layout.main')


@section('title', 'Categories')

@section('content')


<div class="container" style="margin-top: 100px;">
    <div class="before_table">
        <div>
            <h1 class="display-4">Categories</h1>
        </div>
      
    </div>


    <div class="row">
        @foreach ($categories as $category )
        
        
        <div class="col-sm-6 mb-15 mb-sm-0 " >
            <div class="card"  style="margin-bottom: 20px; margin-top:10px">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->title }}</h5>
                    <p class="card-text">{{ $category->description }}</p>
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">Show Courses</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection