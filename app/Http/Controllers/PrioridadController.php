<?php

namespace App\Http\Controllers;

use App\Models\Prioridad;
use App\Http\Requests\StorePrioridadRequest;
use App\Http\Requests\UpdatePrioridadRequest;
use App\Http\Resources\PrioridadResource;

class PrioridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prioridades = Prioridad::all();
        return new PrioridadResource($prioridades);
    }

    public function store(StorePrioridadRequest $request)
    {
        $data = $request->validated();

        $prioridad = Prioridad::create($data);
        return new PrioridadResource($prioridad);
    }

    public function edit(Prioridad $prioridad)
    {
        return new PrioridadResource($prioridad);
    }

    public function update(UpdatePrioridadRequest $request, Prioridad $prioridad)
    {
        $data = $request->validated();
        $prioridad->update($data);
        return new PrioridadResource($prioridad);
    }

    public function destroy(Prioridad $prioridad)
    {
        $prioridad->delete();
        return new PrioridadResource($prioridad);
    }
}
