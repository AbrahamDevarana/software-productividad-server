<?php

namespace App\Http\Controllers;

use App\Models\Posicion;
use App\Http\Requests\StorePosicionRequest;
use App\Http\Requests\UpdatePosicionRequest;
use App\Http\Resources\PosicionResource;

class PosicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posiciones = Posicion::all();
        return new PosicionResource($posiciones);
    }

    public function store(StorePosicionRequest $request)
    {
        $posicion = Posicion::create($request->all());
        return new PosicionResource($posicion);
    }

    public function edit(Posicion $posicion)
    {
        return new PosicionResource($posicion);
    }

    public function update(UpdatePosicionRequest $request, Posicion $posicion)
    {
        $posicion->update($request->all());
        return new PosicionResource($posicion);
    }

    public function destroy(Posicion $posicion)
    {
        $posicion->delete();
        return new PosicionResource($posicion);
    }
}
