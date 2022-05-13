<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Http\Requests\StoreGrupoRequest;
use App\Http\Requests\UpdateGrupoRequest;
use App\Http\Resources\GrupoResource;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();
        return new GrupoResource($grupos);
    }

    public function store(StoreGrupoRequest $request)
    {
        $grupo = Grupo::create($request->all());
        return new GrupoResource($grupo);
    }

    public function edit(Grupo $grupo)
    {
        return new GrupoResource($grupo);
    }

    public function update(UpdateGrupoRequest $request, Grupo $grupo)
    {
        $grupo->update($request->all());
        return new GrupoResource($grupo);
    }

    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return new GrupoResource($grupo);
    }
}
