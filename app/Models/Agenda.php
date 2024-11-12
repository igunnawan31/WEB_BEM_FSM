<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaagenda',
        'bidang_id',
        'deskripsi',
        'path_foto_agenda',
    ];

    public function bidang() : BelongsTo {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
