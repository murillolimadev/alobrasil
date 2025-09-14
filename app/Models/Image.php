<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    public function imovel(): BelongsTo
    {
        return $this->belongsTo(Imovei::class, 'imovel_id', 'id');
    }
}
