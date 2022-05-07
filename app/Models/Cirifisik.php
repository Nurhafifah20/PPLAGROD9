<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cirifisik extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'warna',
        'bentuk',
        'kerusakaan',
        'umur',
        'status',
        'id_diagnosa',
    ];
}
