<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("CreateCourse");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $validated = $request->validate([
           "requirement" => "string",
           "course_id" => "int",
        ]);
        Requirement::create($validated);
        // @dd($validated);
        return redirect()->route("requirements.index")->with("success", "requirment Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $require = Requirement::findOrFail($id);
        return view("", compact("require"));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
