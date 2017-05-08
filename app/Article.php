<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'image_url'];

    protected $dates = ['created_at', 'updated_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
