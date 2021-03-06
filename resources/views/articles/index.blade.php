@extends('layout')

@section('title')
    <title>Blog</title>
@endsection

@section('description')
    <meta name="description" content="Page with all of the blogposts.">
@endsection

@section('name-of-page')
    Blog
@endsection

@section('content')
    <main class="margin-not-index">
        <section>
            @foreach ($articles as $article)
                <article class="blogpost">
                    <small><i>{{$article->created_at}}</i></small><br>
                    <h3>{{$article->title}}</h3>
                    <p>{{$article->excerpt}}
                        <a href="{{route('article.show', $article)}}">Read more...</a>
                    </p>
                </article>
            @endforeach
        </section>
        <br><br><br>
        <button onclick=window.location.href="{{route('article.create')}}">
            Create New Post
        </button>
    </main>
@endsection

