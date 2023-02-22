<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infaq extends Model
{
    protected $table = 'infaqs';

    protected $fillable = [
        'tanggal',
        'uraian',
        'masuk',
        'keluar',
        'jenis',
        'tipe',
    ];
}
