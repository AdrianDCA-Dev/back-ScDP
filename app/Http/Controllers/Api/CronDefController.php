<?php

namespace App\Http\Controllers\Api;

use App\Cronograma;
use App\Defensa;
use App\Inscripciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CronDefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crondef = Defensa::all();
        $crondef->each(function ($crondef){
            $crondef->cronograma;
            $crondef->inscripcion->user->persona;
            $crondef->inscripcion->modalidad;
        });

        return response()->json(compact('crondef'));
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
        $cronograma = new Cronograma();
        $cronograma->fechaDefModUno = trim($request->fechaDefModUno);
        $cronograma->fechaDefModDos = trim($request->fechaDefModDos);
        $cronograma->descripcion = trim($request->descripcion_cr);

        $defensa = new Defensa();
        $cronograma->save();

        $defensa->inscripcion()->associate($request->inscripcion_id);
        $defensa->cronograma()->associate($cronograma);
        $defensa->estado = "Revicion";
        $defensa->save();
        $defensa->cronograma;
        $defensa->inscripcion->user->persona;
        $defensa->inscripcion->modalidad;
        return response()->json(compact('defensa'));
    }

    public function getInscripcionActivos()
    {
        $inscripcion = Inscripciones::where('estado', '=', 'Activo')->get();
        $inscripcion->each(function ($inscripcion){
            $inscripcion->user->persona;
        });
        return response()->json(compact('inscripcion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
