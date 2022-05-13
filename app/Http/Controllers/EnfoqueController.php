<?php

namespace App\Http\Controllers;

use App\Models\Enfoque;
use App\Http\Requests\StoreEnfoqueRequest;
use App\Http\Requests\UpdateEnfoqueRequest;
use App\Http\Resources\EnfoqueResource;

class EnfoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfoques = Enfoque::all();
        return new EnfoqueResource($enfoques);
    }

   
    public function store(StoreEnfoqueRequest $request)
    {
        $data = $request->validated();
        
        $enfoque = Enfoque::create($data);
        return new EnfoqueResource($enfoque);
    }

    public function edit(Enfoque $enfoque)
    {
        return new EnfoqueResource($enfoque);
    }

    public function update(UpdateEnfoqueRequest $request, Enfoque $enfoque)
    {
        $data = $request->validated();
        $enfoque->update($data);
        return new EnfoqueResource($enfoque);
    }

    public function destroy(Enfoque $enfoque)
    {
        $enfoque->delete();
        return new EnfoqueResource($enfoque);
    }
}
