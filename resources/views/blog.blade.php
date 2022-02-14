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
            <article class="blogpost">
                <small><i>07-10-2021</i></small><br>
                <h3>Feedback pitch website</h3>
                <p>I received feedback after my pitch and make a list of tasks.
                    <a href="/blog/feedbackwebsite">Read more...</a>
                </p>
            </article>
            <article class="blogpost">
                <small><i>10-09-2021</i></small><br>
                <h3>Profession</h3>
                <p>I discuss three ICT companies that interest me and compare the pros and cons for each company.
                    <a href="/blog/profession">Read more...</a>
                </p>
            </article>
            <article class="blogpost">
                <small><i>09-09-2021</i></small><br>
                <h3>First Feedback</h3>
                <p>Containing the feedback I recieved on my Who Am I document. <a href="/blog/feedback">Read
                        more...</a></p>
            </article>
            <article class="blogpost">
                <small><i>08-09-2021</i></small></br>
                <h3>Programming experience</h3>
                <p>Do I have programming experience? What kind of experience and how did I gain the experience?
                    <a href="/blog/experience">Read more...</a>
                </p>
            </article>
            <article class="blogpost">
                <small><i>08-09-2021</i></small><br>
                <h3>Personal SWOT-Analysis</h3>
                <p>My Personal SWOT-Analysis, my strengths and weaknesses and an inventory of the opportunities and
                    threats I expect in my studies. <a href="/blog/swot">Read more...</a></p>
            </article>
            <article class="blogpost">
                <small><i>08-09-2021</i></small><br>
                <h3>Study Choice</h3>
                <p>On the HomePage, I explained briefly why I chose for ICT, in this blogpost I elaborate on that
                    a bit more. <a href="/blog/studychoice">Read more...</a></p>
            </article>
        </section>
    </main>
@endsection

