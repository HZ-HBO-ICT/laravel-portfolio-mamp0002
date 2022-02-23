<!DOCTYPE html>
<html>

<head>
    <title>{{ $article->title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="A blogpost about how much programming
    experience I had prior to starting this education programme.">
    <link type="text/css" rel="stylesheet" href="/css/style-website.css">
</head>

<body>
<header><a href="https://www.hz.nl" target="_blank"><img alt="HZ-logo" src="/img/hzlogo.png" class="hzlogo"></a>{{$article->title}}</header>
<nav>
    <ul>
        <li class="menu-right"><a href="/article">Back to the blogpage</a></li>
    </ul>
</nav>
<main class="margin-not-index">
    <section>
        <article>
            {!! $article->body !!}
        </article>
        <br><br>
        <button onclick="window.location.href='/article/{{$article->id}}/edit'">
            Edit this post
        </button>
    </section>
</main>

</body>

</html>
