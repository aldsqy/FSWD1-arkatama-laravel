<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Pengguna extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $fillable = [
        'email', 'nama', 'role', 'avatar', 'phone', 'address', 'password'
    ];

    protected $table = 'pengguna';

    protected $casts = [
        'role' => 'string'
    ];
}
