<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
