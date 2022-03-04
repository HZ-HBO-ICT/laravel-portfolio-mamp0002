<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController
{

    /**
     * function to show the view page of blog (render a list of articles)
     */
    public function index()
    {
        $faqs = Faq::latest()->get();

        return view('faqs.index', ['faqs' => $faqs]);
    }

    /**
     * function to show the view page
     */
    public function show()
    {
        return view('faq', ['faq'=>Faq::all()]);
    }

    /**
     * function to create new faq
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * function to store the filled-in data in the form for create
     */
    public function store(Request $request)
    {
        Faq::create($this->validatedFaq($request));

        // redirecting to show a page
        return redirect('/faq');
    }

    /**
     * function to edit existing faq
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', ['faq' => $faq]);
    }

    /**
     * function to update existing faq
     */
    public function update(Faq $faq, Request $request)
    {
        $faq->update($this->validatedFaq($request));

        return redirect('/faq');
    }

    /**
     * function to delete a faq
     * @param $id
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq');
    }

    /**
     * @return array
     */
    public function validatedFaq(Request $request): array
    {
        $validatedFaq = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        return $validatedFaq;
    }
}
