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

    public function create()
    {
        return view('articles.create');
    }

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

    public function edit($link)
    {
            $article = Article::where('link', $link);

        return view('articles.edit', ['article'=>$article]);
    }

    public function update($link)
    {
        //get the current article we are editing
        $article = Article::where('link', $link);

        //edit the fields according to the form
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->link = request('link');

        //save it to the database
        $article->save();

        // redirect back to the edited article page:
        return redirect($article->link);
    }

    public function destroy($link)
    {
        $article = Article::where('link', $link);
        $article->delete();
        return redirect('/blog');
    }
}
