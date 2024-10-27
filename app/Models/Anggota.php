<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'bidang_id',
        'jabatan',
        'path_foto_anggota',
    ];

    public function bidang() : BelongsTo {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
