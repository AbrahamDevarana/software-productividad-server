<?php

namespace App\Http\Controllers;

use App\Models\Estatus;
use App\Http\Requests\StoreEstatusRequest;
use App\Http\Requests\UpdateEstatusRequest;
use App\Http\Resources\EstatusResource;

class EstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatus = Estatus::all();
        return new EstatusResource($estatus);
    }

    public function store(StoreEstatusRequest $request)
    {
        $estatus = Estatus::create($request->all());
        return new EstatusResource($estatus);
    }

    public function edit(Estatus $estatus)
    {
        return new EstatusResource($estatus);
    }

    public function update(UpdateEstatusRequest $request, Estatus $estatus)
    {
        $estatus->update($request->all());
        return new EstatusResource($estatus);
    }

    public function destroy(Estatus $estatus)
    {
        $estatus->delete();
        return new EstatusResource($estatus);
    }
}
