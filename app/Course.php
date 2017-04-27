<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function school() {
        return $this->belongsTo(School::class);
    }
}
