<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'image_url', 'title_url'];

    protected $dates = ['created_at', 'updated_at'];
}
