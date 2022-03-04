<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $courses = Course::all()->sortBy('category');

        return view('courses.index', [
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        Course::create($this->validateCourse($request));

        // redirecting to show a page
        return redirect('/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     */
    public function edit(Course $course)
    {
        return view('courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     */
    public function update(Request $request, Course $course)
    {
        $course->update($this->validateCourse($request));
        return redirect('/course/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     */
    public function destroy(Course $course)
    {
        $grade->delete();

        return redirect('/grade');
    }

    /**
     * @return array
     */
    public function validateCourse(Request $request): array
    {
        $validatedAttributes = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'EC' => 'required',
        ]);
        return $validatedAttributes;
    }
}
