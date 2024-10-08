<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingModel extends Model
{
    use HasFactory;

    protected $table = "booking";

    public function kamarForeign(): BelongsTo {
        return $this->belongsTo(KamarModel::class, "kamar");
    }
}
