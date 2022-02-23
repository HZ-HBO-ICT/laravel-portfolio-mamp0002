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
                        <th>Quartile</th>
                        <th>Course</th>
                        <th>EC</th>
                        <th>Exam</th>
                        <th>Grade</th>
                        <th></th>
                    </tr>
                    @foreach($grades as $grade)
                        <tr>
                            <td>{{$grade->category}}</td>
                            <td>{{$grade->course_name}}</td>
                            <td>{{$grade->credits}}</td>
                            <td>{{$grade->test_name}}</td>
                            <td>{{$grade->best_grade}}</td>
                            <td><button onclick=window.location.href="{{route('grade.edit', $grade)}}">
                                    Edit
                                </button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </article>
        </section>
        <br>
        <button onclick=window.location.href="{{route('grade.create')}}">
            Add New Grade
        </button>
    </main>
@endsection
