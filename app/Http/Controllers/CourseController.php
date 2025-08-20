<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses = Course::all();
        return view('CoursesForUsers', compact('courses'));
    }
    public function adminsCourse()
    {
        $courses = Course::all();
        $categories = Category::all();
        return view('CourseForAdmins', compact('courses', 'categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view("CreateCourse", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "string",
            "description" => "string",
            "price" => "int",
            "language" => "string",
            // "image" => "string",
            "duration" => "string",
            "category_id" => "integer",
            "instructor_id" => "integer",
            //"level" => "enum"
        ]);
        Course::create($validated);
        // @dd($validated);
        return redirect()->route("courses.index")->with("success", "Course Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with('requirements','WillLearn','course_for','levels','curriculum')->findOrFail($id);
        return view("ShowCourse", compact("course"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        $categories = Category::all();
        return view("CourseEdit", compact("course", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            "title" => "nullable|string",
            "description" => "nullable|string",
            "price" => "nullable|integer",
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            "duration" => "nullable|string",
            "category_id" => "nullable|int"
        ]);

        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');


            $filename = time() . '_' . $file->getClientOriginalName();


            $file->move(public_path('pictures'), $filename);
        }

        $validated['image'] = $filename;


        $course = Course::findOrFail($id);
        $course->update($validated);
        return redirect()->route("courses.index")->with("success", "course updated");
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destory(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route("courses.index")->with("success", "Course deleted");
    }


  
}
