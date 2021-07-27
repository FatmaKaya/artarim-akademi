<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenPosition extends Model
{
    protected $fillable = [
        'category', 'name', 'title', 'description', 'content', 'order', 'active', 'created_at', 'updated_at'
    ];
}
