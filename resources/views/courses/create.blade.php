@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h2>New course</h2>
        <form method="POST" action="{{route('course.index')}}">
            @csrf
            <div class="field">
                <label class="label" for="category">Category</label>

                <div class="control">
                    <input class="@error('category') button-error @enderror text-area" type="text" name="category" id="category" value={{old('category')}}>
                    @error('category')
                    <p class="error-message">{{$errors->first('category')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="name">Course Name</label>

                <div class="control">
                    <textarea class="@error('name') button-error @enderror text-area" name="name" id="name">{{old('name')}}</textarea>
                    @error('name')
                    <p class="error-message">{{$errors->first('name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="EC">EC</label>

                <div class="control">
                    <textarea class="@error('EC') button-error @enderror text-area" name="EC" id="EC">{{old('EC')}}</textarea>
                    @error('EC')
                    <p class="error-message">{{$errors->first('EC')}}</p>
                    @enderror
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>

        </form>
    </main>
@endsection
