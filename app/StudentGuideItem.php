<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class StudentGuideItem extends Model
{
    use Searchable;

    protected $dates = ['created_at', 'updated_at'];

    public function hasAttribute($attr) {
        return array_key_exists($attr, $this->attributes);
    }
}
