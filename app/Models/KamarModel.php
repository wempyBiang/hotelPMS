<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KamarModel extends Model
{
    use HasFactory;

    protected $table = "kamar";

    public function tipeKamar(): BelongsTo {
        return $this->belongsTo(TipeKamarModel::class, "tipe");
    }
}
