<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    public function courses() {
        return $this->hasMany(Course::class);
    }
}
