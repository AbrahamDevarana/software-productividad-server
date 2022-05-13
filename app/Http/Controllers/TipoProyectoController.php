<?php

namespace App\Http\Controllers;

use App\Models\TipoProyecto;
use App\Http\Requests\StoreTipoProyectoRequest;
use App\Http\Requests\UpdateTipoProyectoRequest;
use App\Http\Resources\TipoProyectoResource;

class TipoProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoProyectos = TipoProyecto::all();
        return new TipoProyectoResource($tipoProyectos);
    }

    public function store(StoreTipoProyectoRequest $request)
    {
        $data = $request->validated();

        $tipoProyecto = TipoProyecto::create($data);
        return new TipoProyectoResource($tipoProyecto);
    }

    public function edit(TipoProyecto $tipoProyecto)
    {
        return new TipoProyectoResource($tipoProyecto);
    }

    public function update(UpdateTipoProyectoRequest $request, TipoProyecto $tipoProyecto)
    {
        $data = $request->validated();
        $tipoProyecto->update($data);
        return new TipoProyectoResource($tipoProyecto);
    }

    public function destroy(TipoProyecto $tipoProyecto)
    {
        $tipoProyecto->delete();
        return new TipoProyectoResource($tipoProyecto);
    }
}
