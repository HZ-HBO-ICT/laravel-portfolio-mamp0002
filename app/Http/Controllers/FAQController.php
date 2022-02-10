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
        // $questions = Faq::all();

        return view('faq', ['questions'=>Faq::all()]);
    }
}
