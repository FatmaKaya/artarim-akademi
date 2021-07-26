<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'name', 'type', 'icon', 'order', 'active', 'created_at', 'updated_at'
    ];
}
