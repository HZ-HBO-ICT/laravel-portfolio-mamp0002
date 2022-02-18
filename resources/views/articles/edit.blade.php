@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h1>Edit Article</h1>
        <form method="POST" action="{{$article->link}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
                </div>
            </div>

            <div class="field">
                <label for="link">Link</label>
                <div class="control">
                    <input type="text" name="link" id="link" value="{{$article->link}}">
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>
        </form>
        <form method="POST" action="/blog/{{$article->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </main>
@endsection
