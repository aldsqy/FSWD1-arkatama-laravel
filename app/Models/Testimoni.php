<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = ['foto', 'nama', 'jabatan', 'deskripsi'];

    protected $table = 'testimoni';
}
