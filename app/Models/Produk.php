<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['gambar', 'nama', 'kategori_id', 'deskripsi', 'harga', 'status'];

    protected $table = 'produk';

    protected $casts = [
        'status' => 'string',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
