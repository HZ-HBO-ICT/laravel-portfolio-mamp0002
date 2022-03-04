@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h2>Edit grade</h2>
        <form method="POST" action="{{route('grade.show', $grade)}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="course_id">Course id</label>

                <div class="control">
                    <textarea class="@error('course_id') button-error @enderror text-area" name="course_id" id="course_id">{{$grade->course_id}}</textarea>
                    @error('course_id')
                    <p class="error-message">{{$errors->first('course_id')}}</p>
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
