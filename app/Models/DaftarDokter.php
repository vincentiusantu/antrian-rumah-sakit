<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarDokter extends Model
{
    protected $fillable = [
        'nama',
        'poli',
        'jadwal',
    ];
}
