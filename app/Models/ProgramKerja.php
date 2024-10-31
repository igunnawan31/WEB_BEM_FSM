<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaproker',
        'bidang_id',
        'deskripsi',
        'path_foto_proker',
    ];

    public function bidang() : BelongsTo {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
