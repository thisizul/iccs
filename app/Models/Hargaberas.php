<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hargaberas extends Model
{
    use HasFactory;
    protected $fillable = [
        'beras',
    ];
    public function fitrahmasuk()
    {
        return $this->hasMany(fitrahmasuk::class);
    }
}
