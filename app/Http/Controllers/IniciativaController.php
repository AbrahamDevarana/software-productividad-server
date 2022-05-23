<?php

namespace App\Http\Controllers;

use App\Models\Iniciativa;
use App\Http\Requests\StoreIniciativaRequest;
use App\Http\Requests\UpdateIniciativaRequest;
use App\Http\Resources\IniciativaResource;

class IniciativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iniciativas = Iniciativa::where('estatus_id', 1)->get();
        return new IniciativaResource($iniciativas);
    }

    public function show(Iniciativa $iniciativa)
    {
        $iniciativa = Iniciativa::findOrFail($iniciativa);
        return new IniciativaResource($iniciativa);
    }
    
    public function store(StoreIniciativaRequest $request)
    {
        $data = $request->validated();
        $iniciativa = Iniciativa::create($data);
        return new IniciativaResource($iniciativa);
    }

    public function edit(Iniciativa $iniciativa)
    {
        return new IniciativaResource($iniciativa);
    }

    public function update(UpdateIniciativaRequest $request, Iniciativa $iniciativa)
    {
        $data = $request->validated();
        $iniciativa->update($data);
        return new IniciativaResource($iniciativa);
    }

    public function destroy(Iniciativa $iniciativa)
    {
        $iniciativa->delete();
        return new IniciativaResource($iniciativa);
    }
}
