<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['kategori', 'deskripsi', 'status'];

    protected $table = 'kategori';

    protected $casts = [
        'status' => 'string',
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
}
