<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Http\Requests\StoreTareaRequest;
use App\Http\Requests\UpdateTareaRequest;
use App\Http\Resources\TareaResource;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $tareas = Tarea::with(['grupo', 'user', 'estatus', 'tags', 'tipo_tarea'])->where('user_id', 1)->get();
        return new TareaResource($tareas);
    }

    public function store(StoreTareaRequest $request)
    {
        $tarea = Tarea::create($request->all());
        return new TareaResource($tarea);
    }

    public function edit(Tarea $tarea)
    {
        return new TareaResource($tarea);
    }

    public function update(UpdateTareaRequest $request, Tarea $tarea)
    {
        $tarea->update($request->all());
        return new TareaResource($tarea);
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return new TareaResource($tarea);
    }

    public function orderTarea(Request $request){

        $filter = $request->get('filter');
    
        try {
            $tareas = Tarea::with(['grupo', 'user', 'estatus', 'tags', 'tipo_tarea'])->where('user_id', 1)->orderBy($filter, 'asc')->get();
            return new TareaResource($tareas);
        } catch (\Throwable $th) {
            $tareas = Tarea::with(['grupo', 'user', 'estatus', 'tags', 'tipo_tarea'])->where('user_id', 1)->get();
            return new TareaResource($tareas);
        }

    }
}
