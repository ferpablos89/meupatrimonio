<?php

namespace App\Http\Controllers;

use App\Models\CategoriaGasto;
use App\Http\Requests\StoreCategoriaGastoRequest;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriaGastoResource;

class CategoriaGastoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoriaGastoResource::collection(CategoriaGasto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaGastoRequest $request)
    {
        $categoria = $request->validated();
        CategoriaGasto::create($categoria);
        return new CategoriaGastoResource($categoria)->additional([
            "message" => "Categoria de Gasto cadastrada com sucesso."
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoriaGasto $categoriaGasto)
    {
        return new CategoriaGastoResource($categoriaGasto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoriaGasto $categoriaGasto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaGasto $categoriaGasto)
    {
        $categoriaGasto->delete();
        return new CategoriaGastoResource($categoriaGasto)->additional([
            "message" => "Categoria de Gasto removida com sucesso."
        ]);
    }
}
