@extends('layout.main')

@section('title', 'Create Course')


@section("content")

<link rel="stylesheet" href="{{ asset("css/CreateCoursesBootstrap.css") }}">
<div>
  <nav class="navbar bg-body-tertiary fixed-top mb-1" style="background-color:#1e1e2f !important;">
    <div class="container-fluid">
      <a class="navbar-brand" href="mainProjectwithBootStrap.html" style="color: white;"><span
          style="font-weight: bolder;">STER</span>MER</a>
      <button class="navbar-toggler" style="background-color: #bebecb;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><span style="font-weight: bolder;">STER</span>MER</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="mainProjectwithBootStrap.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Courses.html">Courses</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Instructors</a></li>
                <li><a class="dropdown-item" href="#">Dashboard</a></li>
                <li><a class="dropdown-item" href="#">Transaction</a></li>
                <li><a class="dropdown-item" href="#">Categories</a></li>
                <li><a class="dropdown-item" href="#">Student</a></li>

                <li>

                </li>

              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
</div>
<div class="container" style="margin-top: 100px;">
  <h1 style="color: #d65622; font-size: 32px;">Create Course</h1>
   
  <!-- <h1 style="color: #d65622; font-size: 32px;">{{ isset($course) ? 'Edit Course' : 'Create Course' }}</h1> -->
  <form action="{{ route('courses.store') }}" method="post">
  @csrf 
  <!-- @if(isset($course))
    <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@else
    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
@endif

@csrf -->

  <div class="row mb-2">
    <div class="col-sm-6">
      <label for="">Title:</label>
      <br>
      <input type="text" name="title" class="w-100 form-control"
    value="{{ old('title', $course->title ?? '') }}" required>

    </div>
    <div class="col-sm-6">
      <label for="">Description:</label>
      <br>
      <input type="text" name="description" value="{{ old('description', $course->description ?? '') }}" required class="w-100 form-control">
    </div>


  </div>
  <div class="row mb-2">
    <div class="col-sm-12">
      <label for="">Duration:</label>
      <br>
      <input type="text" name="duration" value="{{ old('duration', $course->duration ?? '') }}" required class="w-100 form-control">
    </div>
  </div>


  <div class="row  mb-2">
    <div class="col-sm-6">
      <label for="">Language:</label>
      <br>
      <input type="text" name="language" value="{{ old('language', $course->language ?? '') }}" required class="w-100 form-control">
    </div>
    <div class="col-sm-6">
      <label for="">Price:</label>
      <br>
     <input type="number" name="price" value="{{ old('price', $course->price ?? '') }}" required class="w-100 form-control">
    </div>


  </div>



  <div class="row mb-2">
    <div class="col-sm-6">
      <label for="">Category:</label>
      <br>

      <select name="category_id" id="" class="w-100 form-select">
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
          {{ $category->title }}
        </option>
        @endforeach
      </select>
      <!-- <select name="category_id" class="form-select" required>
    @foreach($categories as $category)
        <option value="{{ $category->id }}" 
            {{ (old('category_id', $course->category_id ?? '') == $category->id) ? 'selected' : '' }}>
            {{ $category->title }}
        </option>
    @endforeach
</select> -->

    </div>
    

  </div>

  <div class="row mb-2">
    <div class="col-sm-12">
      <label for="">Course_Image:</label>
      <br>
      <input type="file" name="image" id="" required class="w-100 form-control">
    </div>
  </div>

  <div class=" row mb-5 d-flex justify-content-between">
    <div class="col-sm-12 col-md-2">
      <label for="">Requirement:</label>
      <br>
      <div id="inp"></div>
      <button type="button" class="btn btn-success" id="add_req"><svg xmlns="http://www.w3.org/2000/svg" width="16"
          height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>Add Requirement</button>
    </div>
    <div class="col-sm-12 col-md-2">
      <label for="">What you will learn:</label>
      <br>
      <div id="inp2"></div>

      <button type="button" class="btn btn-success" id="add_item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
          height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>Add Item</button>

    </div>

    <div class="col-sm-12 col-md-2">
      <label for="">Who is this course for?</label>
      <br>
      <div id="inp3"></div>

      <button type="button" class="btn btn-success" id='add_Audience'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
          fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>Add Audience</button>

    </div>
    <div class="col-sm-12 col-md-2">
      <label for="">Enter level:</label>
      <br>
      <div id="inp4"></div>

      <button type="button" class="btn btn-success" id='add_level'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
          fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>Add level</button>
    </div>
    <div class="col-sm-12 col-md-2">
      <label for="">
        Curriculum:</label>
      <br>
      <div id="inp5">
      </div>


      <button type="button" class="btn btn-success" id='add_Module'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
          fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>Add Module</button>
    </div>

  </div>

  <div class="d-flex flex-column align-items-center">

    <div class="d-flex">
      <input type="checkbox" name="Show_in_Home_page">
      <label for="">Show in Home page</label>
    </div>
    <button id="Save_course_bttn" type="submit">Save Course</button>
     
    <!-- <button type="submit" id="Save_course_bttn">
    {{ isset($course) ? 'Update Course' : 'Save Course' }}
</button> -->


    <button class="Delete_Form_bttn">Delete Form</button>

  </div>
  </form>
</div>
<script src="{{ asset('js/Createcourse.js') }}"></script>

@endsection