<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngaji extends Model
{
    use HasFactory;
    protected $fillable = [
        'santri_id',
        'nama_santri',
        'nama_ustad',
        'jenis_ngaji',
        'halaman',
        'tanggal',
        'status',
    ];
    public function ngaji()
    {
        return $this->hasMany(Santri::class);
    }
}
