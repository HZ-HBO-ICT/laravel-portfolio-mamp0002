@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h2>New Article</h2>
        <form method="POST" action="{{route('article.index')}}">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="@error('title') button-error @enderror text-area" type="text" name="title" id="title" value={{old('title')}}>
                    @error('title')
                    <p class="error-message">{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="@error('excerpt') button-error @enderror text-area" name="excerpt" id="excerpt">{{old('excerpt')}}</textarea>
                    @error('excerpt')
                    <p class="error-message">{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="@error('body') button-error @enderror text-area" name="body" id="body">{{old('body')}}</textarea>
                    @error('body')
                    <p class="error-message">{{$errors->first('body')}}</p>
                    @enderror
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>

        </form>
    </main>
@endsection
