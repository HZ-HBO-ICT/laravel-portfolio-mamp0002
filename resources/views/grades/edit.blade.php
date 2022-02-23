@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h2>Edit grade</h2>
        <form method="POST" action="{{route('grade.show', $grade)}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="category">Category</label>

                <div class="control">
                    <input class="@error('category') button-error @enderror text-area" type="text" name="category" id="category" value={{$grade->category}}>
                    @error('category')
                    <p class="error-message">{{$errors->first('category')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="course_name">Course Name</label>

                <div class="control">
                    <textarea class="@error('course_name') button-error @enderror text-area" name="course_name" id="course_name">{{$grade->course_name}}</textarea>
                    @error('course_name')
                    <p class="error-message">{{$errors->first('course_name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="test_name">Test Name</label>

                <div class="control">
                    <textarea class="@error('test_name') button-error @enderror text-area" name="test_name" id="test_name">{{$grade->test_name}}</textarea>
                    @error('body')
                    <p class="error-message">{{$errors->first('test_name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="credits">Credits</label>

                <div class="control">
                    <textarea class="@error('credits') button-error @enderror text-area" name="credits" id="credits">{{$grade->credits}}</textarea>
                    @error('credits')
                    <p class="error-message">{{$errors->first('credits')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="lowest_passing_grade">Lowest Passing Grade</label>

                <div class="control">
                    <textarea class="@error('lowest_passing_grade') button-error @enderror text-area" name="lowest_passing_grade" id="lowest_passing_grade">{{$grade->lowest_passing_grade}}</textarea>
                    @error('lowest_passing_grade')
                    <p class="error-message">{{$errors->first('lowest_passing_grade')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="best_grade">Grade</label>

                <div class="control">
                    <textarea class="@error('best_grade') button-error @enderror text-area" name="best_grade" id="best_grade">{{$grade->best_grade}}</textarea>
                    @error('best_grade')
                    <p class="error-message">{{$errors->first('best_grade')}}</p>
                    @enderror
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>

        </form>
        <form method="POST" action="{{route('grade.show', $grade)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </main>
@endsection
