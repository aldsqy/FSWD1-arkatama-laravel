<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = ['email', 'nama', 'role', 'avatar', 'phone', 'address', 'password'];

    protected $table = 'pengguna';

    protected $casts = [
        'role' => 'string', // jika Anda ingin mengonversi role ke string
    ];
}
