<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RequirementController;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//   return view('welcome');
// });
Route::get('/', [CourseController::class, 'index'])->name('courses.index');


// Route::get('/Home', function () {


//   return view('welcome');
// });


Route::post('/courses/test/{id}', [CourseController::class, 'update'])->name('courses.update.test');
Route::get("/courses/test/{id}", [CourseController::class, "destory"])->name("courses.destory");
// Route::get("/courses/edit/{id}", [CourseController::class,"edit"]);

Route::resource("courses", CourseController::class)->except(["update", "destory"]);

Route::get("/CourseAdmins", [CourseController::class, "adminsCourse"])->name("courses.admin");

// Route::get("/Home", [CourseController::class, "adminsCourse"])->name("courses.admin");


Route::resource("users", UserController::class);
Route::resource("enrollments", EnrollmentController::class);


Route::resource("requirements", RequirementController::class);


Route::resource("categories", CategoryController::class);
Route::get("/showcate", [CategoryController::class, "Showcategories"])->name("enrollments.showCategories");

