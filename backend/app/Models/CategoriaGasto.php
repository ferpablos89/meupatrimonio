<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaGasto extends Model
{
    protected $fillable = [
        'id_categoria_gasto',
        'nome',
    ];
}
