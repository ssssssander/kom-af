<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    public function school() {
        return $this->belongsTo(School::class);
    }
}
