@extends('layout.main')

@section('content')
<style>
    .btn {
        border-color: rgb(231, 93, 36);
    }
</style>

<div class="container" style="margin-top: 100px;">

    <div class="row">
        <div class="col-8">
            <!-- <figure>
                <blockquote class="blockquote">
                    <p>{{ $course["title"] ?? '' }}</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </figure> -->
            <div class="card">
                <!-- <div class="card-header">
                    Quote
                </div> -->
                <div class="card-body" style="margin-top: 10px;">

                    <figure>
                        <blockquote class="blockquote">
                            <p style="font-size: xx-large; font-weight:bolder">{{ $course["title"] ?? '' }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Instructor is: <cite title="{{ $course->instructor->name }}">{{ $course->instructor->name }}</cite>
                        </figcaption>
                        <!-- Instructor name -->

                        <p>{{ $course["description"] ?? '' }}</p>
                        <div class="card" style="margin-top: 10px;">
                            <blockquote class="blockquote">
                                <p style="font-size: large; font-weight:bolder; padding-left: 5px;">What you will learn:</p>
                            </blockquote>
                            @foreach ( $course->WillLearn as $TOPIC)

                            <p style="padding-left: 5px;"> <svg xmlns="http://www.w3.org/2000/svg" style="color: #FF6600;" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg><i> <span style="padding-left: 5px;"></span>{{ $TOPIC->topic}}</span></i></p>
                            @endforeach
                            <!--hna haktb el 7aagat ely hatrg3 mn what you will learn-->
                        </div>

                        <div class="card" style="margin-top: 10px;">
                            <blockquote class="blockquote">
                                <p style="font-size: large; font-weight:bolder; padding-left: 5px;">Requirments:</p>
                            </blockquote>
                            @foreach ( $course->requirements as $req)

                            <p style="padding-left: 5px;"> <svg xmlns="http://www.w3.org/2000/svg" style="color: #FF6600;" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg><i> <span style="padding-left: 5px;"></span>{{ $req->requirement}}</span></i></p>
                            @endforeach

                            <!--hna haktb el 7aagat ely hatrg3 mn Requirments-->
                        </div>

                        <div class="card" style="margin-top: 10px;">
                            <blockquote class="blockquote">
                                <p style="font-size: large; font-weight:bolder; padding-left: 5px;">Who is this course for?</p>
                            </blockquote>
                            @foreach ( $course->course_for as $aud)

                            <p style="padding-left: 5px;"> <svg xmlns="http://www.w3.org/2000/svg" style="color: #FF6600;" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg><i> <span style="padding-left: 5px;"></span>{{ $aud->audience}}</span></i></p>
                            @endforeach
                            <!--hna haktb el 7aagat ely hatrg3 mn Who is this course for?-->
                        </div>
                        <div class="card" style="margin-top: 10px;">
                            <blockquote class="blockquote">
                                <p style="font-size: large; font-weight:bolder; padding-left: 5px;">Course level</p>
                            </blockquote>
                            @foreach ( $course->levels as $level)

                            <p style="padding-left: 5px;"> <svg xmlns="http://www.w3.org/2000/svg" style="color: #FF6600;" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg><i> <span style="padding-left: 5px;"></span>{{ $level->name}} => {{ $level->number }}  </span></i></p>
                            @endforeach
                            <!--hna haktb el 7aagat ely hatrg3 mn Who is this course for?-->
                        </div>
                        <div class="card" style="margin-top: 10px;">
                            <blockquote class="blockquote">
                                <p style="font-size: large; font-weight:bolder; padding-left: 5px;">Curriculum</p>
                            </blockquote>
                            @foreach ( $course->Curriculum as $cur)

                            <p style="padding-left: 5px;"> <svg xmlns="http://www.w3.org/2000/svg" style="color: #FF6600;" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg><i> <span style="padding-left: 5px;"></span>{{ $cur->Module}} </span></i></p>
                            @endforeach
                            <!--hna haktb el 7aagat ely hatrg3 mn Who is this course for?-->
                        </div>


                    </figure>
                </div>
            </div>


        </div>
        <div class="col-4">

            <div class="card" style="width: 18rem;">

                <img src="{{asset('pictures/'.$course["image"])  }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $course["title"] ?? '' }}</h5>
                    <p class="card-text"><small class="text-body-secondary"><span class="price"
                                style="color: #FF6600; font-size: large;">{{ $course["price"] ?? '' }} USD</span></small></p>
                    <a href="#" class="btn btn-primary" style="background-color: rgb(231, 93, 36);">Buy Now</a>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection