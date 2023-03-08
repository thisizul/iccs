<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $fillable = [
        'santri_id',
        'nama_santri',
        'alamat',
        'no_hp',
    ];
    public function relationtongaji()
    {
        return $this->belongsTo(Ngaji::class);
    }
    public function relationtouser()
    {
        return $this->belongsTo(User::class);
    }
}
