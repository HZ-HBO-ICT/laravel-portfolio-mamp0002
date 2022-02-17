<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    /**
     * function to show the view page
     */
    public function show()
    {
        $grades = Grade::all();

        return view('dashboard', ['grades' =>$grades]);
    }
}
