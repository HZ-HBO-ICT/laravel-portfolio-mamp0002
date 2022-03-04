@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h2>Edit course</h2>
        <form method="POST" action="{{route('course.show', $course)}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="category">Category</label>

                <div class="control">
                    <input class="@error('category') button-error @enderror text-area" type="text" name="category" id="category" value={{$course->category}}>
                    @error('category')
                    <p class="error-message">{{$errors->first('category')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="course_name">Course Name</label>

                <div class="control">
                    <textarea class="@error('name') button-error @enderror text-area" name="name" id="name">{{$course->name}}</textarea>
                    @error('name')
                    <p class="error-message">{{$errors->first('name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="credits">Credits</label>

                <div class="control">
                    <textarea class="@error('EC') button-error @enderror text-area" name="EC" id="EC">{{$course->EC}}</textarea>
                    @error('EC')
                    <p class="error-message">{{$errors->first('EC')}}</p>
                    @enderror
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>

        </form>
        <form method="POST" action="{{route('course.show', $course)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </main>
@endsection

