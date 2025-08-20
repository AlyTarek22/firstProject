@extends('layout.main')


@section('title', 'Course Instructors')

@section('content')




<div class="container" style="margin-top: 100px;">
    <div class="before_table">
        <div>
            <h1 style="color: #1e1e2f;">Instructor list</h1>
        </div>
        <!-- <div>
            <a href="{{ route('courses.create') }}">

                <button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>Create</button>
            </a>

        </div> -->
    </div>


    <table class="table table-striped ">
        <thead>
            <tr>

                <th class="bg-orange">Name</th>
                <th class="bg-orange">Course</th>
         
            </tr>
        </thead>
        <tbody>
            
            @foreach ($courses as $course )


            <tr>
                <td>{{ $course->instructor->name ?? '' }}</td>
                <td>{{$course["title"] ?? ''}}</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>


@endsection