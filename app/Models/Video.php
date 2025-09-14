<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'title',
        'video'
    ];

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class, 'id_imovel');
    }
}
