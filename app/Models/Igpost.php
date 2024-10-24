<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Igpost extends Model
{
    use HasFactory;
    protected $fillable = [
        'post',
        'bidang_id',
        'deskripsi_foto',
    ];

    public function bidang() : BelongsTo {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
