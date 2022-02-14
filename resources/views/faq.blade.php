<!DOCTYPE html>
<html>

<head>
    <title>faq</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="An overview of the most frequently asked
    questions and their answers.">
    <link type="text/css" rel="stylesheet" href="/css/style-website.css">
</head>
@extends('layout')

@section('title')
    <title>FAQ</title>
@endsection

@section('name-of-page')
    Frequently Asked Questions
@endsection

@section('content')
<main class="margin-not-index">
    <section>
        <article>
            <h4>Below you will see a list of the most frequently asked questions. When you have a question that is
                not listed, please contact the helpdesk or look around in the <a
                    href="https://hzuniversity.topdesk.net/tas/public/ssp/" target="_blank">SelfServicePortal</a>.
            </h4>
        </article>
        <article>

            @foreach($questions as $question)
            <details>
                        <summary>{{ $question->question }}</summary>
                        <p>{!! $question->answer !!}</p>
            </details>
            @endforeach

            <a href="https://hzuniversity.topdesk.net/tas/public/ssp/" target="_blank"><img
                    alt="cartoon image of a man with a question mark" src="/img/question.png"
                    class="imgquestion"></a>
        </article>
    </section>
</main>
@endsection
