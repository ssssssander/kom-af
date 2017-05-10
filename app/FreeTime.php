<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeTime extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'free_time_items';
}
