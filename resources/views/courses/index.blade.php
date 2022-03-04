@extends('layout')

@section('title')
    <title>Courses</title>
@endsection

@section('description')
    <meta name="description" content="Courses">
@endsection

@section('name-of-page')
    Courses
@endsection

@section('content')
    <main class="margin-not-index">
        <section>
            <br><br><br>
            <article>
                <table class="courses">
                    <thead>
                    <tr>
                        <td>Course</td>
                        <td>Course ID</td>
                        <td>EC</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{$course->name}}</td>
                        <td>{{$course->id}}</td>
                        <td>{{$course->EC}}</td>
                        <td>
                            <button onclick=window.location.href="{{route('course.edit', $course)}}">
                                Edit
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </article>
        </section>
        <br>
        <button onclick=window.location.href="{{route('course.create')}}">
            Add New Course
        </button>
    </main>
@endsection
