<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FAQController
{
    /**
     * function to show the view page
     */
    public function show()
    {
        return view('faq', ['questions'=>Faq::all()]);
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store()
    {
        //create a new article
        $question = new Faq();

        //set the values of article according to the data from the form
        $question->question = request('question');
        $question->answer = request('answer');

        //save it to the database
        $question->save();

        // redirecting to show a page
        return redirect('/faq');
    }
}
