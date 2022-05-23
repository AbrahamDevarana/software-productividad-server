<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipoTareaResource;
use App\Models\TipoTarea;
use Illuminate\Http\Request;

class TipoTareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_tareas = TipoTarea::all();
        return new TipoTareaResource($tipo_tareas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoTarea  $tipoTarea
     * @return \Illuminate\Http\Response
     */
    public function show(TipoTarea $tipoTarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoTarea  $tipoTarea
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoTarea $tipoTarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoTarea  $tipoTarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoTarea $tipoTarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoTarea  $tipoTarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoTarea $tipoTarea)
    {
        //
    }
}
