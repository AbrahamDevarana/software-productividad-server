<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Http\Requests\StoreEquipoRequest;
use App\Http\Requests\UpdateEquipoRequest;
use App\Http\Resources\EquipoResource;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        return new EquipoResource($equipos);
    }

    public function store(StoreEquipoRequest $request)
    {
        $data = $request->validated();
        $equipo = Equipo::create($data);
        return new EquipoResource($equipo);
    }

    public function edit(Equipo $equipo)
    {
        return new EquipoResource($equipo);
    }

    public function update(UpdateEquipoRequest $request, Equipo $equipo)
    {
        $data = $request->validated();
        $equipo->update($data);
        return new EquipoResource($equipo);
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return new EquipoResource($equipo);
    }
}
