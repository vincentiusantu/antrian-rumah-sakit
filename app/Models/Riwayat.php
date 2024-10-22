<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $fillable = [
        'user_id',
        'poli_id',
        'aktif',
    ];
}
