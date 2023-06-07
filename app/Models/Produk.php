<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama', 'kategori_id', 'deskripsi', 'harga', 'status'];

    protected $table = 'produk';

    protected $casts = [
        'status' => 'string', // jika Anda ingin mengonversi status ke string
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
