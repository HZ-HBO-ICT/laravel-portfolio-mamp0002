@extends('layout')

@section('title')
    <title>Dashboard</title>
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
                    <th colspan="5">
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
                </tr>
                @foreach($grades as $grade)
                    <tr>
                        <td>{{$grade->category}}</td>
                        <td>{{$grade->course_name}}</td>
                        <td>{{$grade->credits}}</td>
                        <td>{{$grade->test_name}}</td>
                        <td>{{$grade->best_grade}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br><br><br><br><br>
        </article>
    </section>
</main>
@endsection
