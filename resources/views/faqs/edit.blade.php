@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h1>Edit FAQ</h1>
        <form method="POST" action="/faq/{{$question->id}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="question">Question</label>

                <div class="control">
                    <textarea class="textarea" name="question" id="question">{{$question->question}}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea class="textarea" name="answer" id="answer">{{$question->answer}}</textarea>
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>
        </form>
        <form method="POST" action="/faq/{{$question->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </main>
@endsection
