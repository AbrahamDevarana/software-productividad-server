<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Http\Requests\StoreComentarioRequest;
use App\Http\Requests\UpdateComentarioRequest;
use App\Http\Resources\ComentarioResource;
use Illuminate\Http\Client\Request;

class ComentarioController extends Controller
{

    public function index(Request $request)
    {
        $comentarios = Comentario::where('accion_id', $request->accion_id)->get();
        return new ComentarioResource($comentarios);
    }

    public function store(StoreComentarioRequest $request)
    {
        $comentario = Comentario::create($request->all());
        return new ComentarioResource($comentario);
    }

    public function edit(Comentario $comentario)
    {
        return new ComentarioResource($comentario);
    }
    public function update(UpdateComentarioRequest $request, Comentario $comentario)
    {
        $comentario->update($request->all());
        return new ComentarioResource($comentario);
    }

    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return new ComentarioResource($comentario);
    }
}
