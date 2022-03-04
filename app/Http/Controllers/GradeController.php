<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $courses = Course::all()->sortBy('category');
        $grades = Grade::all()->sortBy('course_id');
        $gradesInCourse = [];

        foreach ($courses as $course) {
            $counter = 0;

            foreach ($grades as $grade) {
                if ($grade->course_id === $course->id) {
                    $counter++;
                }
            }
            $gradesInCourse[$course->id] = $counter;
        }

        return view('grades.index', [
            'courses' => $courses,
            'grades' => $grades,
            'gradesInCourse' => $gradesInCourse,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $courses = Course::all();
        return view('grades.create', ['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));

        // redirecting to show a page
        return redirect('/grade');
    }

    /**
     * function to show the view page
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     *
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grade' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     */
    public function update(Request $request, Grade $grade)
    {
        $validateGrade = $request->validate([
            'course_id' => 'required',
            'test_name' => 'required',
            'best_grade' => 'required'
        ]);

        $grade->addResult($validateGrade['best_grade']);

        $grade->update($this->validateGrade($request));

        return redirect('/grade/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect('/grade');
    }

    /**
     * @return array
     */
    public function validateGrade(Request $request): array
    {
        $validatedAttributes = $request->validate([
            'course_id' => 'required',
            'test_name' => 'required',
        ]);
        return $validatedAttributes;
    }
}
