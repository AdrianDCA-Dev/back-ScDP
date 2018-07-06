<?php

namespace App\Http\Controllers\Api;

use App\Tribunales;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TribunalNotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tribunalnotas = Tribunales::where('user_id', '=', $id)->get();
        $tribunalnotas->each(function ($tribunalnotas){
            $tribunalnotas->user->persona;
            $tribunalnotas->defensa->inscripcion->user->persona->carrera;
            $tribunalnotas->defensa->inscripcion->modalidad;
        });

        return response()->json(compact('tribunalnotas'));
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
        $tribunalnotas = Tribunales::find($id);

        $tribunalnotas->nota = trim($request->nota);
        $tribunalnotas->save();

        return response()->json(compact('tribunalnotas'));
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
