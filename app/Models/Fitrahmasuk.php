<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitrahmasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'nama',
        'jumlahjiwa',
        'setuang',
        'setberas',
        'jenis',
        'hargaberas_id',
        'jumlahberas',
        'jumlahuang',
    ];
    public function hargaberas()
    {
        return $this->belongsTo(Hargaberas::class);
    }
}
