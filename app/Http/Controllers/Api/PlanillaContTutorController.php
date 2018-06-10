<?php

namespace App\Http\Controllers\Api;

use App\Controles;
use App\Defensa;
use App\Tutores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanillaContTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tutor = Tutores::where('user_id', '=', $id)->first();
        $control = Controles::where('tutor_id', '=', $tutor->id)->get();

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
        $control = Controles::find($id);

        $control->estado = 'Revisado';
        $control->save();
        $defensaData = [
            'estado' => 'AprobadoUno'
        ];
        $defensa = Defensa::where('inscripcion_id', '=', $control->inscripcion_id)->update($defensaData);

        /*$defensa->estado = 'AprobadoUno';
        $defensa->save();*/

        return response()->json(compact('control'));
    }

    public function aprobadouno(Request $request, $id)
    {
        $defensa = Defensa::where('inscripcion_id', '=', $id)->find();;

        $defensa->estado = 'AprobadoUno';
        $defensa->save();

        return response()->json(compact('defensa'));
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
