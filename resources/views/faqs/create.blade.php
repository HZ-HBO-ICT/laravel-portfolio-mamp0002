@extends('layout')

@section('content')

    <main class="margin-not-index">
        <h1>New FAQ</h1>
        <form method="POST" action="/faq">
            @csrf

            <div class="field">
                <label class="label" for="question">Question</label>

                <div class="control">
                    <textarea class="@error('question') button-error @enderror text-area" name="question" id="question">{{old('question')}}</textarea>
                    @error('question')
                    <p class="error-message">{{$errors->first('question')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea class="@error('answer') button-error @enderror text-area" name="answer" id="answer"></textarea>
                    @error('answer')
                    <p class="error-message">{{$errors->first('answer')}}</p>
                    @enderror
                </div>
            </div>

            <div class="control">
                <button class="button is-link">Submit</button>
            </div>

        </form>
    </main>
@endsection
