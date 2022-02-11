<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * This function will add a new grade when everything is met
     *
     * @param $newGrade
     * @return void
     */
    public function addResult($newGrade)
    {
        if ($this->best_grade < $newGrade) {
            $this->best_grade = $newGrade;
            if ($this->best_grade >= 5.5) {
                $this->passed_at = now();
            }
        }
        $this->save();
    }
}
