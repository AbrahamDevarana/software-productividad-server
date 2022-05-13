<?php

namespace App\Http\Controllers;

use App\Models\ResultadoClave;
use App\Http\Requests\StoreResultadoClaveRequest;
use App\Http\Requests\UpdateResultadoClaveRequest;
use App\Http\Resources\ResultadoClaveResource;

class ResultadoClaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado_claves = ResultadoClave::all();
        return new ResultadoClaveResource($resultado_claves);
    }

    public function store(StoreResultadoClaveRequest $request)
    {
        $data = $request->validated();
        $resultado_clave = ResultadoClave::create($data);
        return new ResultadoClaveResource($resultado_clave);
    }

    public function edit(ResultadoClave $resultadoClave)
    {
        return new ResultadoClaveResource($resultadoClave);
    }

    public function update(UpdateResultadoClaveRequest $request, ResultadoClave $resultadoClave)
    {
        $data = $request->validated();
        $resultadoClave->update($data);
        return new ResultadoClaveResource($resultadoClave);
    }

    public function destroy(ResultadoClave $resultadoClave)
    {
        $resultadoClave->delete();
        return new ResultadoClaveResource($resultadoClave);
    }
}
