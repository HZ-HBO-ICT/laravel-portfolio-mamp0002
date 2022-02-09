<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController
{
    /**
     * function to show the view page
     */
    public function show()
    {
        return view('welcome');
    }
}
