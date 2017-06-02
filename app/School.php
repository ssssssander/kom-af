<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use Searchable;

    protected $dates = ['created_at', 'updated_at'];

    public function courses() {
        return $this->hasMany(Course::class);
    }
}
