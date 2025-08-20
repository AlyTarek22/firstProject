<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Models\Category;
use App\Models\Course;


class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::all();

        return view("CreateCourse", compact("categories"));
    }
    public function Showcategories()
    {
        $categories = Category::all();

        return view("Categories", compact("categories"));
    }
    public function show($id)
    {

        $courses = Course::where('category_id', $id)->get();

        return view('CoursesInCategory', compact('courses'));
    }
}
