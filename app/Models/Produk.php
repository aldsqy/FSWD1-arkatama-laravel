<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'harga', 'status'];

    protected $table = 'produk';

    protected $casts = [
        'status' => 'string', // jika Anda ingin mengonversi status ke string
    ];
}
