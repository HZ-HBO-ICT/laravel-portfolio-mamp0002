@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h1>New FAQ</h1>
        <form method="POST" action="/faq">
            @csrf

            <div class="field">
                <label class="label" for="question">Question</label>

                <div class="control">
                    <textarea class="textarea" name="question" id="question"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea class="textarea" name="answer" id="answer"></textarea>
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>

        </form>
    </main>
@endsection
