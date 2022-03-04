@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h2>New grade</h2>
        <form method="POST" action="{{route('grade.index')}}">
            @csrf
            <div class="field">
                <label for="course_id">Course ID</label>
                <div class="control">
                    <select
                        class="@error('course_id') button-error @enderror inputField" name="course_id" id="course_id">
                        <option value="">Choose a course</option>
                        @foreach($courses as $course)
                            <option value={{$course->id}}>{{$course->id . '. ' . $course->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="field">
                <label class="label" for="test_name">Test Name</label>

                <div class="control">
                    <textarea class="@error('test_name') button-error @enderror text-area" name="test_name"
                              id="test_name">{{old('test_name')}}</textarea>
                    @error('body')
                    <p class="error-message">{{$errors->first('test_name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>

        </form>
    </main>
@endsection
