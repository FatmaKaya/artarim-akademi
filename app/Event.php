<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'category', 'name', 'title', 'content', 'startDate', 'endDate', 'order', 'active', 'imageurl', 'created_at', 'updated_at'
    ];
}
