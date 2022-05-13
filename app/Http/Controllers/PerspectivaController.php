<?php

namespace App\Http\Controllers;

use App\Models\Perspectiva;
use App\Http\Requests\StorePerspectivaRequest;
use App\Http\Requests\UpdatePerspectivaRequest;
use App\Http\Resources\PerspectivaResource;

class PerspectivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('viewAny', Perspectiva::class);
        $perspectivas = Perspectiva::where('estatus_id', 1)->get();
        return new PerspectivaResource($perspectivas);
    }

    public function store(StorePerspectivaRequest $request)
    {
        $data = $request->validated();
        $perspectiva = Perspectiva::create($data);
        return new PerspectivaResource($perspectiva);
    }

    public function edit(Perspectiva $perspectiva)
    {
        return new PerspectivaResource($perspectiva);
    }

    public function update(UpdatePerspectivaRequest $request, Perspectiva $perspectiva)
    {
        $data = $request->validated();
        $perspectiva->update($data);
        return new PerspectivaResource($perspectiva);
    }

    public function destroy(Perspectiva $perspectiva)
    {
        $perspectiva->delete();
        return response()->json(['message' => 'Perspectiva eliminada']);
    }
}
