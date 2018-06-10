<?php

namespace App\Http\Controllers\Api;

use App\Defensa;
use App\Inscripciones;
use App\Tribunales;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TutorTribunalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $inscripcion = Inscripciones::where('user_id', '=', $id)->first();
        $defensa = Defensa::where('inscripcion_id', '=', $inscripcion->id)->first();
        $tribunales = Tribunales::where('defensa_id', '=', $defensa->id)->get();
        $tribunales->each(function ($tribunales){
            $tribunales->user->persona;
            $tribunales->defensa->inscripcion;
        });

        return response()->json(compact('tribunales'));
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
