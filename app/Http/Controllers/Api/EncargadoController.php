<?php

namespace App\Http\Controllers\Api;

use App\Controles;
use App\Inscripciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inscrip()
    {
        $estudiante = Inscripciones::all();
        $estudiante->each(function ($estudiante){
            $estudiante->user->persona->carrera;
        });

        return response()->json(compact('estudiante'));
    }

    public function index($id)
    {
        $inscripcion = Inscripciones::where('user_id', '=', $id)->first();
        $control = Controles::where('inscripcion_id', '=', $inscripcion->id)->get();
        $control->each(function ($control){
            $control->planilla;
            $control->inscripcion->user->persona;
            $control->tutor->user->persona;
        });

        return response()->json(compact('control'));
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
