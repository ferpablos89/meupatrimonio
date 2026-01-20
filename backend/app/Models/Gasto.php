<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gasto extends Model
{
    protected $fillable = [
        'id_categoria_gasto',
        'valor',
        'data',
        'descricao',
    ];

    public function categoriaGasto(): BelongsTo
    {
        return $this->belongsTo(CategoriaGasto::class);
    }
}
