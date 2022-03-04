<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * gets the grades related to the course
     */
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    /**
     * marks the passed_at at now if all the grades that belong to the
     * course are passed
     */
    public function assignCredits()
    {
        $grades = Grade::where('course_id', $this->id)->get();
        $calculate = true;
        $i = 0;
        while ($calculate === true && $i < count($grades)) {
            if ($grades[$i]->best_grade < 5.5) {
                $calculate = false;
            }
            $i++;
        }
        if ($calculate === true) {
            $sum = 0;
            foreach ($grades as $grade) {
                $sum += $grade->best_grade;
            }
            $avg = $sum / count($grades);
            if ($avg >= 5.5) {
                $this->passed_at = now();
                $this->save();
            }
        }
    }
}
