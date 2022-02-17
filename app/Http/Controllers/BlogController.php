<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{
    /**
     * function to show specific articles
     * @param $id
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    /**
     * function to show the view page of blog
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('index', ['articles'=>$articles]);
    }

    /**
     * function to show the view page of a post
     *
     * @param $link
     */
    public function showPost($link)
    {
        $article = Article::where('link', $link);
        return view('articles.show', [
            'article' => $article->firstOrFail()
        ]);
    }
}
