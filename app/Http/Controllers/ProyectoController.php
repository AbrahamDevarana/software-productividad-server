<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Http\Requests\StoreProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;
use App\Http\Resources\ProyectoResource;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return new ProyectoResource($proyectos);
    }

    public function store(StoreProyectoRequest $request)
    {
        $data = $request->validated();
        $proyecto = Proyecto::create($data);
        return new ProyectoResource($proyecto);
    }

    public function edit(Proyecto $proyecto)
    {
        return new ProyectoResource($proyecto);
    }

    public function update(UpdateProyectoRequest $request, Proyecto $proyecto)
    {
        $data = $request->validated();
        $proyecto->update($data);
        return new ProyectoResource($proyecto);
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return new ProyectoResource($proyecto);
    }
}
