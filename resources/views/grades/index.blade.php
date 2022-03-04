@extends('layout')

@section('title')
    <title>Grades</title>
@endsection

@section('description')
    <meta name="description" content="The dashboard with an overview of the courses in
    the first year of the ICT Programme at HZ.">
@endsection

@section('name-of-page')
    Study Progress Dashboard
@endsection

@section('content')
    <main class="margin-not-index">
        <section>
            <article>
                <p>Amount of credits progress:
                    <progress value="0" max="60">
                        <span>25</span>%
                    </progress>
                    <br>
                    Make sure you have at least 45 credits to pass the NBSA Boundary!
                </p>
            </article>
            <br><br><br>
            <article>
                <table class="courses">
                    <thead>
                    <tr>
                        <th colspan="6">
                            <h3>All courses year 1</h3>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <th>Course</th>
                        <th>EC</th>
                        <th>Exam</th>
                        <th>Grade</th>
                        <th>Quartile</th>
                        <th></th>
                    </tr>

                    @foreach($courses as $course)
                        <tr>
                            <td rowspan="{{$gradesInCourse[$course->id]}}">{{$course->name}}</td>
                            <td rowspan="{{$gradesInCourse[$course->id]}}">{{$course->EC}}</td>
                            @if($gradesInCourse[$course->id] === 0)
                                <td colspan="4">
                                    <button onclick=window.location.href="{{route('grade.create', $grade, $course->id)}}">
                                        Add grade
                                    </button></td>
                            @endif
                            @foreach($grades as $grade)
                                @if($grade->course_id === $course->id)
                                    <td>{{$grade->test_name}}</td>
                                    <td>{{$grade->best_grade}}</td>
                                    <td>{{$course->category}}</td>
                                    <td>
                                        <button onclick=window.location.href="{{route('grade.edit', $grade)}}">
                                            Edit
                                        </button>
                                    </td>
                        </tr>
                        @endif
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
            </article>
        </section>
        <br>
        <button onclick=window.location.href="{{route('grade.create')}}">
            Add New Grade
        </button>
        <button onclick=window.location.href="{{route('course.index')}}">
            Course overview
        </button>
    </main>
@endsection
