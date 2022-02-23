<?php

namespace App\Http\Controllers;

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
        $grades = Grade::all()->sortBy('category');

        return view('grades.index', ['grades' =>$grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('grades.create');
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
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     *
     */
    public function show(Grade $grade)
    {

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
            'category' => 'required',
            'course_name' => 'required',
            'test_name' => 'required',
            'credits' => 'required',
            'lowest_passing_grade' => 'required',
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
            'category' => 'required',
            'course_name' => 'required',
            'test_name' => 'required',
            'credits' => 'required',
            'lowest_passing_grade' => 'required',
        ]);
        return $validatedAttributes;
    }
}
