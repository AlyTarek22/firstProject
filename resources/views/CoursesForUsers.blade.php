@extends('layout.main')
<style>
    .btn-custom-hover:hover {
        background-color: transparent !important;

    }
</style>




@section('title', 'Courses For Users')

@section('content')

<div class="container" style="margin-top: 100px;">

    <div class="row justify-content-center" id="effect">
        @foreach ($courses as $course)

        <div class="card col-md-3" style="margin: 20px;">
            <img src="{{asset('pictures/'.$course["image"])  }}"
                style="width: 100%;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $course["title"] }}</h5>
                <h6>Description:</h6>
                <p class="card-text subst " title="{{  $course["description"] }}">{{ substr( $course["description"],1,80) }}</p>
                <div class="d-flex justify-content-between">
                    <p class="card-text "><small class="text-body-secondary"><span class="price" style="color: #FF6600; font-size: x-large;">
                                {{ $course->price }} USD
                            </span>
                        </small></p>
                    <button type="button" class="btn btn-danger" style="background-color: rgb(231, 93, 36);">

                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-custom-hover" style="color: white; ">
                            Show More
                        </a>

                    </button>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection