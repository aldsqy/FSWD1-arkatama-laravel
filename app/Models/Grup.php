<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grup extends Model
{
    protected $fillable = ['role'];

    protected $table = 'grup';

    protected $casts = [
        'role' => 'string'
    ];
}
