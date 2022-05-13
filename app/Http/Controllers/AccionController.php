<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use App\Http\Requests\StoreAccionRequest;
use App\Http\Requests\UpdateAccionRequest;
use App\Http\Resources\AccionResource;

class AccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acciones = Accion::all();
        return new AccionResource($acciones);
    }

    public function store(StoreAccionRequest $request)
    {
        $accion = Accion::create($request->all());
        return new AccionResource($accion);
    }

    public function edit(Accion $accion)
    {
        return new AccionResource($accion);
    }

    public function update(UpdateAccionRequest $request, Accion $accion)
    {
        $accion->update($request->all());
        return new AccionResource($accion);
    }

    public function destroy(Accion $accion)
    {
        $accion->delete();
        return new AccionResource($accion);
    }
}
