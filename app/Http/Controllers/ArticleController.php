<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController
{
    /**
     * function to show the view page of article (render a list of articles)
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Function to show the view page for the specific article
     * @param $article
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    /**
     * function to create new article
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * function to store the filled-in data in the form for create
     */
    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));

        // redirecting to show a page
        return redirect('/article');
    }

    /**
     * function to edit existing article
     */
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * function to update existing article
     */
    public function update(Article $article, Request $request)
    {
          $article->update($this->validateArticle($request));

        return redirect('/article/' . $article->id);
    }

    /**
     * function to delete an article
     * @param $id
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/article');
    }

    /**
     * @return array
     */
    public function validateArticle(Request $request): array
    {
        $validatedAttributes = $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
        return $validatedAttributes;
    }
}
