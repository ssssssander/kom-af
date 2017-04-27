<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'time_ago', 'image_url', 'url'];
    protected $dates = ['created_at', 'updated_at'];
}
