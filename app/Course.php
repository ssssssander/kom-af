<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use Searchable;

    protected $dates = ['created_at', 'updated_at'];

    public function school() {
        return $this->belongsTo(School::class);
    }
}
