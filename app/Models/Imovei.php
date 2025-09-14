<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Imovei extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'endereco',
        'quartos',
        'area',
        'garagem',
        'banheiros',
        'city',
        'valor',
        'desc',
        'image'
    ];


    public function tipo(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'cat_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'imovel_id');
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class, 'id_imovel');
    }
}
