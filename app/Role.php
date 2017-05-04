<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    public function users() {
        return $this->hasMany(User::class);
    }
}
