<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grup extends Model
{
    protected $fillable = ['nomor', 'role'];

    protected $table = 'grup';

    protected $casts = [
        'role' => 'string', // jika Anda ingin mengonversi role ke string
    ];
}
