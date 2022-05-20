<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipoAccionResource;
use App\Models\TipoAccion;
use Illuminate\Http\Request;

class TipoAccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_acciones = TipoAccion::all();
        return new TipoAccionResource($tipo_acciones);
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
     * @param  \App\Models\TipoAccion  $tipoAccion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoAccion $tipoAccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoAccion  $tipoAccion
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoAccion $tipoAccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoAccion  $tipoAccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAccion $tipoAccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoAccion  $tipoAccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoAccion $tipoAccion)
    {
        //
    }
}
