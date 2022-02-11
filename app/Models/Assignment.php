<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    /**
     * this function sets a specific row into completed when called
     */
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
