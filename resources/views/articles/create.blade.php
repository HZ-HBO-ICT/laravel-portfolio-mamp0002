@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h1>New Article</h1>
        <form method="POST" action="/blog">
            @csrf

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title">
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body"></textarea>
                </div>
            </div>

            <div class="field">
                <label for="link">Link</label>
                <div class="control">
                    <input type="text" name="link" id="link">
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>

        </form>
    </main>
@endsection
