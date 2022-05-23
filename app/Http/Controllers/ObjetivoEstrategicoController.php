<?php

namespace App\Http\Controllers;

use App\Models\ObjetivoEstrategico;
use App\Http\Requests\StoreObjetivoEstrategicoRequest;
use App\Http\Requests\UpdateObjetivoEstrategicoRequest;
use App\Http\Resources\ObjetivoEstrategicoResource;
use Illuminate\Http\Request;

class ObjetivoEstrategicoController extends Controller
{

    public function index()
    {
        $objetivos = ObjetivoEstrategico::where('estatus_id', 1)->get();
        return new ObjetivoEstrategicoResource($objetivos);
    }

    public function store(StoreObjetivoEstrategicoRequest $request)
    {
        $data = $request->validated();
        $objetivo = ObjetivoEstrategico::create($data);
        return new ObjetivoEstrategicoResource($objetivo);
    }

    public function edit(ObjetivoEstrategico $objetivoEstrategico)
    {
        return new ObjetivoEstrategicoResource($objetivoEstrategico);
    }
    public function update(UpdateObjetivoEstrategicoRequest $request, ObjetivoEstrategico $objetivoEstrategico)
    {
        $data = $request->validated();
        $objetivoEstrategico->update($data);
        return new ObjetivoEstrategicoResource($objetivoEstrategico);
    }

    public function destroy(ObjetivoEstrategico $objetivoEstrategico)
    {
        $objetivoEstrategico->delete();
        return response()->json(['message' => 'Objetivo eliminado']);
    }

    public function filtrarPorIniciativa(Request $request){ 
        $objetivos = ObjetivoEstrategico::where('iniciativa_id', $request->iniciativa_id)->get();
        return new ObjetivoEstrategicoResource($objetivos);
    }
}
