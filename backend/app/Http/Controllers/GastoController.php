<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use App\Http\Requests\StoreGastoRequest;
use Illuminate\Http\Request;
use App\Http\Resources\GastoResource;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GastoResource::collection(Gasto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGastoRequest $request)
    {
        $categoria = $request->validated();
        Gasto::create($categoria);
        return new GastoResource($categoria)->additional([
            "message" => "Gasto cadastrado com sucesso."
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gasto $gasto)
    {
        return new GastoResource($gasto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gasto $gasto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        return new GastoResource($gasto)->additional([
            "message" => "Gasto removido com sucesso."
        ]);
    }
}
