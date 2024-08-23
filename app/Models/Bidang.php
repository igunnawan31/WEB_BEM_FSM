<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bidang extends Model
{
    use HasFactory;

    protected $fillable = [
        'bidang',
        'slug',
        'penjelasan',
        'path_foto_bidang',
    ];

    public function anggotas() : HasMany {
        return $this->hasMany(Anggota::class);
    }
}
