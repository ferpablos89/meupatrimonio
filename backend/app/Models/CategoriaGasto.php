<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriaGasto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_categoria_gasto',
        'nome',
    ];
}
