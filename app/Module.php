<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'category', 'type', 'name', 'title', 'content', 'icon', 'order', 'active', 'imageurl', 'created_at', 'updated_at'
    ];
}
