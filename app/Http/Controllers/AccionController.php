<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use App\Http\Requests\StoreAccionRequest;
use App\Http\Requests\UpdateAccionRequest;
use App\Http\Resources\AccionResource;
use Illuminate\Http\Request;

class AccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $acciones = Accion::with(['grupo', 'user', 'estatus', 'tags', 'tipo_accion'])->where('user_id', 1)->get();
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

    public function orderAccion(Request $request){

        $filter = $request->get('filter');
    
        try {
            $acciones = Accion::with(['grupo', 'user', 'estatus', 'tags', 'tipo_accion'])->where('user_id', 1)->orderBy($filter, 'asc')->get();
            return new AccionResource($acciones);
        } catch (\Throwable $th) {
            $acciones = Accion::with(['grupo', 'user', 'estatus', 'tags', 'tipo_accion'])->where('user_id', 1)->get();
            return new AccionResource($acciones);
        }

    }
}
