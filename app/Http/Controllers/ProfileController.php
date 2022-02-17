<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ProfileController
{
    /**
     * function to show the view page
     */
    public function show()
    {
        return view('profile', ['articles'=>Article::take(3)->get()]);
    }
}
