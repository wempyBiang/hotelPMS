<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipeKamarModel extends Model
{
    use HasFactory;

    protected $table = "tipe_kamar";

    public function kamar(): HasMany {
        return $this->hasMany(KamarModel::class, "tipe");
    }
}
