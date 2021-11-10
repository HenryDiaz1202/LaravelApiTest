<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditarTareasRequest;
use App\Http\Requests\GuardarTareasRequest;
use App\Models\Tareas;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tareas::query()->paginate();
        return response($tareas, 200);
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
    public function store(GuardarTareasRequest $request)
    {
        Tareas::make($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Guardado correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function show(Tareas $tareas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tareas $tareas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function update(EditarTareasRequest $request, Tareas $tareas)
    {
        $tareas->make($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Editado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tareas $tareas)
    {
        $tareas->make();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Eliminado correctamente'
        ]);
    }
}
