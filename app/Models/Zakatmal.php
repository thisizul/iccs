<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakatmal extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'uraian',
        'masuk',
        'keluar',
        'jenis',
    ];
}
