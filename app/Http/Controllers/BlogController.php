<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{
    /**
     * Function to show the view page for the specific article
     * @param $id
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    /**
     * function to show the view page of blog (render a list of articles)
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles'=>$articles]);
    }

    /**
     * function to create new blogpost
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * function to store the filled-in data in the form for create
     */
    public function store()
    {
        //create a new article
        $article = new Article();

        //set the values of article according to the data from the form
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->link = request('link');

        //save it to the database
        $article->save();

        // redirecting to show a page
        return redirect('/blog');
    }

    /**
     * function to edit existing article
     */
    public function edit($link)
    {
        $article = Article::find($link);

        return view('articles.edit', ['article' => $article]);
    }

    /**
     * function to update existing article
     */
    public function update($link)
    {
        $article = Article::find($link);

        //set the values of article according to the data from the form
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->link = request('link');

        $article->save();

        return redirect($article->link);
    }

    /**
     * function to delete an article
     * @param $id
     */
    public function destroy($id)
    {
        $article = Article::where('id', $id);
        $article->delete();

        return redirect('/blog');
    }
}
