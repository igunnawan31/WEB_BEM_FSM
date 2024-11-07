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
        'path_logo_bidang',
    ];

    public function anggotas() : HasMany {
        return $this->hasMany(Anggota::class, 'bidang_id');
    }

    public function programkerjas() : HasMany {
        return $this->hasMany(ProgramKerja::class);
    }

    public function agendas() : HasMany {
        return $this->hasMany(Agenda::class);
    }
}
