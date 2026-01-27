<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaGastoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'gastos' => GastoResource::collection($this->whenLoaded('gastos')),
            'total_gasto' => $this->gastos_sum_valor
        ];
    }
}

