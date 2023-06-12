<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['nama', 'url', 'banner', 'status'];

    protected $table = 'slider';

    protected $casts = [
        'status' => 'string',
    ];
}
